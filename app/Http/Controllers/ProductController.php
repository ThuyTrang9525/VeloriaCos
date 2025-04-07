<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\Models\CategoryController;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('master', compact('products'));
    }

    public function showProductDetail(Request $request, $id)
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
        $activeTab = $request->query('tab', 'description');

    
        return view('Products.product_detail', compact('product', 'relatedProducts', 'youMayAlsoLikeProducts', 'category', 'activeTab'));
    }

    public function getReviews($product_id)
    {
        $reviews = Review::where('product_id', $product_id)->get();
        return response()->json($reviews);
    }

    public function showCategory($id)
    {
        // Lấy category theo id
        $category = Category::findOrFail($id);

        // Lấy các sản phẩm thuộc category đó
        $products = Product::where('category_id', $id)->get();

        // Trả về view với dữ liệu category và products
        return view('Products.show_category', compact('category', 'products'));
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

    public function getListProduct($category_id = null)
    {
        $sidebar = Category::all();
    
        // Nếu có category_id, lấy sản phẩm theo danh mục
        if ($category_id) {
            $products = Product::where('category_id', $category_id)
                ->with('primaryImage')
                ->paginate(12);  // Chỉnh sửa số lượng sản phẩm trên mỗi trang (ví dụ: 12)
        } else {
            // Nếu không có category_id, lấy tất cả sản phẩm
            $products = Product::with('primaryImage')->paginate(12);
        }
    
        return view('Products.product_list')->with([
            'sidebar' => $sidebar,
            'products' => $products
        ]);
    }
    
    public function search(Request $request){
        $keyword = $request->input('keyword');
        $productType = Category::all();
        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();

        return view('products.searchResult', compact('products','productType'));
    }
    


    
}