
@extends('master')
@section('content')
    <div class="checkout-container p-[100px]">
        <div class="left-section">
            <div class="coupon-box">
                <p>Have a coupon? <a href="#">Click here to enter your code</a></p>
            </div>
            <div class="free-shipping-alert">
                <p>Add <span class="highlight">$299.11</span> to cart and get free shipping!</p>
            </div>
            <h2>Billing details</h2>
            <form>
                <label>Your name *</label>
                <input type="text" required>
                <label for="province">Chọn tỉnh/thành phố:</label>
                <select id="province">
                    <option value="">-- Chọn tỉnh/thành phố --</option>
                </select>
            
                <label for="district">Chọn quận/huyện:</label>
                <select id="district">
                    <option value="">-- Chọn quận/huyện --</option>
                </select>
                <label for="ward">Chọn xã/phường:</label>
                <select id="ward">
                    <option value="">-- Chọn xã/phường --</option>
                </select>
                <label>Phone *</label>
                <input type="text" required>
                <label>Email address *</label>
                <input type="email" required>
                <label style="font-size: 14px;">
                    <input type="checkbox" style="width: 13px; height: 13px; margin-right: 5px;">
                    Create an account?
                  </label>
                  
                  <br>
                  
                  <label style="font-size: 14px;">
                    <input type="checkbox" style="width: 13px; height: 13px; margin-right: 5px;">
                    Ship to a different address?
                  </label>
                  
                <label>Order notes (optional)</label>
                <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
            </form>
        </div>
        <div class="right-section">
            <h2>Your order</h2>
            <table>
                <tr>
                    <td>Marketside Fresh Organic Bananas, Bunch ×1</td>
                    <td>$0.89</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>$0.89</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Flat rate: $15.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$15.89</td>
                </tr>
            </table>
            <div class="payment-methods">
                <input type="radio" name="payment" checked> Direct Bank Transfer
                <p>Make your payment directly into our bank account...</p>
                <input type="radio" name="payment"> Check Payments
                <input type="radio" name="payment"> Cash On Delivery
            </div>
            <div class="terms">
                <input type="checkbox" required> I have read and agree to the website <a href="#">terms and conditions</a> *
            </div>
            <button class="place-order">Place order</button>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="{{ asset('assets/js/checkout.js') }}"></script>
@endsection
