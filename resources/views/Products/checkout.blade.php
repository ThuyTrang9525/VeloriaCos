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
    <script>
        function initAutocomplete() {
            let input = document.getElementById("address");
            let autocomplete = new google.maps.places.Autocomplete(input, {
                types: ['geocode'],
                componentRestrictions: { country: "VN" } // Giới hạn địa chỉ ở Việt Nam
            });
    
            autocomplete.addListener("place_changed", function () {
                let place = autocomplete.getPlace();
                console.log("Địa chỉ đã chọn:", place.formatted_address);
            });
        }
    
        document.addEventListener("DOMContentLoaded", initAutocomplete);
    </script>
    <script type="module">
 async function getProvince() {
    let response = await fetch('https://provinces.open-api.vn/api/?depth=3'); // Đổi depth=3 để lấy xã/phường
    let data = await response.json();
    return data;
}

async function init() {
    let data = await getProvince();
    let provinceSelect = document.getElementById('province');
    let districtSelect = document.getElementById('district');
    let wardSelect = document.getElementById('ward');

    // Thêm tỉnh/thành phố vào dropdown
    data.forEach(province => {
        let option = document.createElement("option");
        option.value = province.name;
        option.textContent = province.name;
        provinceSelect.appendChild(option);
    });

    // Khi chọn tỉnh/thành phố, cập nhật danh sách quận/huyện
    provinceSelect.addEventListener('change', function () {
        let selectedProvince = data.find(p => p.name == provinceSelect.value);
        renderDistrict(selectedProvince);
        wardSelect.innerHTML = '<option value="">-- Chọn xã/phường --</option>'; // Reset xã/phường khi chọn tỉnh mới
    });

    // Khi chọn quận/huyện, cập nhật danh sách xã/phường
    districtSelect.addEventListener('change', function () {
        let selectedProvince = data.find(p => p.name == provinceSelect.value);
        let selectedDistrict = selectedProvince.districts.find(d => d.name == districtSelect.value);
        renderWard(selectedDistrict);
    });

    // Hiển thị danh sách quận/huyện
    function renderDistrict(province) {
        districtSelect.innerHTML = '<option value="">-- Chọn quận/huyện --</option>'; // Xóa quận/huyện cũ
        if (province && province.districts) {
            province.districts.forEach(district => {
                let option = document.createElement("option");
                option.value = district.name;
                option.textContent = district.name;
                districtSelect.appendChild(option);
            });
        }
    }

    // Hiển thị danh sách xã/phường
    function renderWard(district) {
        wardSelect.innerHTML = '<option value="">-- Chọn xã/phường --</option>'; // Xóa xã/phường cũ
        if (district && district.wards) {
            district.wards.forEach(ward => {
                let option = document.createElement("option");
                option.value = ward.name;
                option.textContent = ward.name;
                wardSelect.appendChild(option);
            });
        }
    }
}

// Khởi chạy khi trang tải
init();


    </script>
</body>
@endsection
</html>