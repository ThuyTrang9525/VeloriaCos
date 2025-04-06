@extends('master')
@section('content')
<div class="cart-container">
    <h1 class="cart-title">Shopping Cart</h1>

    <!-- Hiển thị bảng nếu có sản phẩm trong giỏ hàng -->
    @if (count($cartItems) > 0)
    <table class="cart-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr id="cart-item-{{ $item['rowId'] }}">
                <td>
                    @php
                        // Lấy ảnh chính của sản phẩm trong giỏ hàng
                        $primaryImage = $item['item']->images->where('is_primary', true)->first();
                    @endphp
                    @if($primaryImage)
                        <img src="{{ $primaryImage->image_url }}" alt="{{ $item['item']->name }}" width="50" height="50">
                    @else
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="No image available" width="50" height="50">
                    @endif
                </td>

                <td>{{ $item['name'] }}</td>
                <td>${{ number_format($item['unit_price'], 2) }}</td>
                <td>
                    <div class="quantity">
                        <!-- Form cho việc giảm số lượng -->
                        <form action="{{ route('cart.update', $item['rowId']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}" {{ $item['quantity'] == 1 ? 'disabled' : '' }}>-</button>
                        </form>

                        <!-- Hiển thị số lượng sản phẩm -->
                        <span>{{ $item['quantity'] }}</span>

                        <!-- Form cho việc tăng số lượng -->
                        <form action="{{ route('cart.update', $item['rowId']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}">+</button>
                        </form>
                    </div>
                </td>
                <td>
                    <!-- Tính tổng giá của sản phẩm -->
                    ${{ number_format($item['quantity'] * $item['unit_price'], 2) }}
                </td>

                <td>
                <form action="{{ route('cart.remove', $item['rowId']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="remove"><i class="fas fa-trash"></i></button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    <!-- Hiển thị phần thông tin giỏ hàng (nếu có hoặc không có sản phẩm) -->
    <div class="cart-summary">
        <div class="coupon-section">
            <h3>Coupon</h3>
            <p>Enter your coupon code if you have one.</p>
            <div class="coupon-input-container">
                <input type="text" placeholder="Enter coupon code">
                <button class="apply-coupon">Apply Coupon</button>
            </div>
        </div>
        <div class="cart-totals">
            <h3>Cart Totals</h3>
            @if (count($cartItems) > 0)
            <p>Total: <span id="total">${{ number_format($totalPrice, 2) }}</span></p>

            <a href="{{ route('checkout') }}" class="checkout">Proceed to checkout</a>
            @else
                <p>Your cart is empty.</p>
            @endif
        </div>
    </div>

    <!-- Thông báo nếu giỏ hàng trống -->
    @if (count($cartItems) == 0)
    <p class="empty-cart">Your cart is empty. <a href="#">Continue shopping</a></p>
    @endif
</div>

<script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
