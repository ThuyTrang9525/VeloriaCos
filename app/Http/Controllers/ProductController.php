<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function show()
    {
        $product = new Product([
            'name' => 'Pullover Hoodie',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'price' => 27.00,
            'image' => 'https://example.com/sample-image.jpg'
        ]);

        $relatedProducts = [
            new Product(['name' => 'Fit Round-neck T-shirt', 'price' => 24.00, 'image' => 'https://example.com/sample1.jpg']),
            new Product(['name' => 'Adult Quantity Tee', 'price' => 26.00, 'image' => 'https://example.com/sample2.jpg']),
            new Product(['name' => 'ADP C-lick Ease Tee', 'price' => 28.00, 'image' => 'https://example.com/sample3.jpg']),
            new Product(['name' => 'Relaxed Fit Sweatshirt', 'price' => 32.00, 'image' => 'https://example.com/sample4.jpg']),
        ];
        return view('Products.product_detail', compact('product', 'relatedProducts'));
    }
    public function checkout()
    {
        $products = Product::all();
        return view('checkout', compact('products'));
    }

    // public function placeOrder(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|exists:products,id',
    //         'quantity' => 'required|integer|min:1',
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'city' => 'required',
    //         'state' => 'required',
    //         'zip_code' => 'required',
    //         'payment_method' => 'required',
    //     ]);

    //     $product = Product::find($request->product_id);
    //     $totalPrice = $product->price * $request->quantity;

    //     return redirect()->route('checkout.success')->with([
    //         'message' => 'Order placed successfully!',
    //         'product' => $product,
    //         'total_price' => $totalPrice,
    //     ]);
    // }

    public function success()
    {
        return view('checkout-success');
    }
}