<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        .checkout-container {
            display: flex;
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .left-section, .right-section {
            padding: 20px;
        }
        .left-section {
            width: 60%;
        }
        .right-section {
            width: 40%;
            background: #fafafa;
            padding: 20px;
            border-radius: 8px;
        }
        .coupon-box, .free-shipping-alert {
            background: #fff3f3;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .highlight {
            color: red;
            font-weight: bold;
        }
        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .right-section table {
            width: 100%;
            margin-bottom: 15px;
        }
        .right-section table td {
            padding: 5px;
        }
        .payment-methods {
            margin-bottom: 15px;
        }
        .terms {
            font-size: 14px;
            margin-bottom: 15px;
        }
        .place-order {
            width: 100%;
            padding: 10px;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .place-order:hover {
            background: #e05656;
        }
    </style>
</head>
<body>
@extends('master')
@section('content')
    <div class="checkout-container">
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
                <input type="checkbox"> Create an account?
                <input type="checkbox"> Ship to a different address?
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
    <script type="module" src="{{ asset('assets/js/checkout.js') }}"></script>
</body>
@endsection
</html>