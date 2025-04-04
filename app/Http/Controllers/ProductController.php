<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryController;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('master', compact('products'));
    }

    public function showProductDetail($id)
    {
        $product = Product::with('images')->findOrFail($id);

    
        // Lấy các sản phẩm có cùng category
        $relatedProducts = Product::with('images')
                                   ->where('category_id', $product->category_id)
                                   ->where('id', '!=', $product->id)  // Loại trừ sản phẩm hiện tại
                                   ->get();
    
        // Lấy các sản phẩm có category > 1 (You may also like)
        $youMayAlsoLikeProducts = Product::with('images')
                                         ->where('category_id', '>', 1)
                                         ->where('id', '!=', $product->id)  // Loại trừ sản phẩm hiện tại
                                         ->get();
    
        // Lấy danh mục (category) của sản phẩm
        $category = Category::find($product->category_id);
    
        return view('Products.product_detail', compact('product', 'relatedProducts', 'youMayAlsoLikeProducts', 'category'));
    }
    
    public function checkout()
    {
        $products = Product::all();
        return view('Products.checkout', compact('products'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'payment_method' => 'required',
        ]);

        $product = Product::find($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        return redirect()->route('checkout.success')->with([
            'message' => 'Order placed successfully!',
            'product' => $product,
            'total_price' => $totalPrice,
        ]);
    }

    public function success()
    {
        return view('checkout-success');
    }
}