<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', null);
        $cartItems = [];
        $totalPrice = 0;
        $totalQty = 0;

        if ($cart && $cart->items) {
            foreach ($cart->items as $id => $item) {
                $unitPrice = $item['item']->price;
                $totalPriceForItem = $unitPrice * $item['qty'];
                $totalQty += $item['qty'];
                $cartItems[] = [
                    'rowId' => $id,
                    'name' => $item['item']->name,
                    'unit_price' => $unitPrice,
                    'price' => $totalPriceForItem,
                    'quantity' => $item['qty'],
                    'image' => $item['item']->image,
                    'item' => $item['item'],
                    'total' => $totalPriceForItem
                ];
                $totalPrice += $totalPriceForItem;
            }
        }

        if (!$cart || !$cart->items) {
            $totalPrice = 0;
            $totalQty = 0;
        }

        return view('Users.cart', compact('cartItems', 'totalPrice', 'totalQty'));
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);
        
        if ($product) {
            $quantity = (int)$request->input('quantity');
            $cart = Session::get('cart', new Cart(null));
            $cart->add($product, $productId, $quantity);
            Session::put('cart', $cart);
            return redirect()->route('product.show', ['id' => $product->id])
                             ->with('success', 'Product added to cart!');
        }

        return redirect()->route('product.index')->with('error', 'Product not found.');
        return redirect()->back();
    }

    public function updateCart(Request $request, $rowId)
    {
        $quantity = (int) $request->input('quantity');
        $cart = Session::get('cart');

        if (isset($cart->items[$rowId])) {
            $cart->items[$rowId]['qty'] = $quantity;
            $cart->items[$rowId]['price'] = $cart->items[$rowId]['item']->price * $quantity;
            $cart->totalQty = array_sum(array_column($cart->items, 'qty'));
            $cart->totalPrice = array_sum(array_column($cart->items, 'price'));
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = Session::get('cart');

        if (isset($cart->items[$id])) {
            unset($cart->items[$id]);
            $cart->totalQty = array_sum(array_column($cart->items, 'qty'));
            $cart->totalPrice = array_sum(array_column($cart->items, 'price'));
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }

    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->route('cart.index')->with('success', 'Đã xóa toàn bộ giỏ hàng.');
    }
}
