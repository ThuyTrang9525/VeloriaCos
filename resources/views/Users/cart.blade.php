
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\cart.css">
</head>
<body>
@include('components.header')
<div class="cart-container">
    <h1 class="cart-title">Shopping Cart</h1>
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
            <tr>
                <td><img src="/public/images/homepage/product-1.png" alt="Giấy note Kitty"></td>
                <td>Giấy note Kitty</td>
                <td>$15.00</td>
                <td>
                    <div class="quantity">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </td>
                <td>$15.00</td>
                <td><button class="remove">🗑️</button></td>
            </tr>
            <tr>
                <td><img src="/public/images/homepage/product-1.png" alt="Giấy note Kitty"></td>
                <td>Giấy note Kitty</td>
                <td>$15.00</td>
                <td>
                    <div class="quantity">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </td>
                <td>$15.00</td>
                <td><button class="remove">🗑️</button></td>
            </tr>
            <tr>
                <td><img src="/public/images/homepage/product-1.png" alt="Giấy note Kitty"></td>
                <td>Giấy note Kitty</td>
                <td>$15.00</td>
                <td>
                    <div class="quantity">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </td>
                <td>$15.00</td>
                <td><button class="remove">🗑️</button></td>
            </tr>
        </tbody>
    </table>

    <div class="cart-actions">
        <button class="update-cart">Update cart</button>
        <button class="continue-shopping">Continue shopping</button>
    </div>

    <div class="cart-summary">
        <!-- Coupon Section -->
        <div class="coupon-section">
            <h3>Coupon</h3>
            <p>Enter your coupon code if you have one.</p>
            <div class="coupon-input-container">
                <input type="text" placeholder="Enter coupon code">
                <button class="apply-coupon">Apply Coupon</button>
            </div>
            <link rel="stylesheet" href="assets\css\cart.css">
        </div>
        <!-- Cart Totals -->
        <div class="cart-totals">
            <h3>Cart Totals</h3>
            <p>Subtotal: <span>$230.00</span></p>
            <p>Total: <span>$230.00</span></p>
            <button class="checkout">Proceed to checkout</button>
        </div>
    </div>
</div>
</body>
</html>
@include('components.footer')