<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartComposer
{
    public function compose(View $view)
    {
        $totalQty = 0;

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $totalQty = $cart->totalQty ?? 0;
        }

        $view->with('totalQty', $totalQty);
    }
}
