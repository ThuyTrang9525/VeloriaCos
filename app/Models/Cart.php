<?php

namespace App\Models;

class Cart
{
    public $items = [];
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id, $qty = 1)
    {
        // Lấy giá sản phẩm (giảm giá nếu có)
        $price = $item->promotion_price ?: $item->price;  // Sử dụng giá khuyến mãi nếu có, nếu không thì lấy giá gốc
    
        if (isset($this->items[$id])) {
            // Nếu sản phẩm đã có trong giỏ, chỉ cần cập nhật số lượng
            $cartItem = $this->items[$id];
            $cartItem['qty'] += $qty;  // Cập nhật số lượng
            $cartItem['price'] = $price * $cartItem['qty'];  // Cập nhật giá sản phẩm theo số lượng mới
        } else {
            // Nếu sản phẩm chưa có trong giỏ, thêm mới vào giỏ
            $cartItem = [
                'qty' => $qty,
                'price' => $price * $qty,
                'item' => $item,
            ];
        }
    
        // Cập nhật lại sản phẩm trong giỏ
        $this->items[$id] = $cartItem;
    
        // Cập nhật lại tổng số lượng và tổng giá của giỏ hàng
        $this->totalQty += $qty;
        $this->totalPrice += $price * $qty;
    }
    
    
    
    public function removeItem($id)
    {
        if (!isset($this->items[$id])) return;

        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

        unset($this->items[$id]);
    }
}
