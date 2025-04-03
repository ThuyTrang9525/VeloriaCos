<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\header.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Calistoga&family=Cormorant+Upright:wght@300;400;500;600;700&family=Epilogue:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="header-container">
            <div class="top-header">
                <div class="left-top-header"></div>
                <div class="middle-top-header"></div>
                <div class="right-top-header"></div>
            </div>
    
            <div class="middle-header">
                <div class="info-LogoNameWeb">
                    <img src="images\LogoVeloriaCos.png" alt="">
                    <h1>Veloria Cos</h1>
                </div>

                <div class="info-ContactWeb">
                    <div class="info-Detail">
                        <ion-icon name="call-outline"></ion-icon>
                        <div>
                            <p>Call anytime</p>
                            <h6>+ 84 123 789 456</h6>
                        </div>
                    </div>

                    <div class="info-Detail">
                        <ion-icon name="mail-outline"></ion-icon>
                        <div class="div-info-Detail2">
                            <p>Send email</p>
                            <h6>VeloriaCos@gmail.com</h6>
                        </div>
                    </div>

                    <div class="info-Detail">
                        <ion-icon name="map-outline"></ion-icon>
                        <div>
                            <p>Address</p>
                            <h6>Sơn Trà, Đà Nẵng</h6>
                        </div>
                    </div>
                </div>

                <div class="info-Account">
                    <img src="{{ Auth::check() ? Auth::user()->avatar : asset('images\avatar.png') }}" alt="">
                    <div>
                        @if(Auth::check())
                            <p>{{ Auth::user()->name }}</p>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <p>Tài khoản</p>
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        @endif
                    </div>
                </div>

            </div>
    
            <div class="bottom-header">
                <ul class="navigate-header">
                <a href="{{ route('homepage') }}"><li>Shop</li></a>
                <a href="{{ route('product_list') }}"><li>Shop</li></a>
                    <li>Collections</li>
                    <li>About us</li>
                    <li>Contact</li>
                </ul>

                <div class="search-bar-container">
                    <input type="text" class="input-search-bar" placeholder="Nhập sản phẩm cần tìm kiếm">
                    <button type="submit" class="submit-search-bar"><ion-icon name="search-outline"></ion-icon></button>
                </div>

                <div class="icon-shopping-cart">
                    <p class="quantity-icon-shopping-cart">0</p>
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>
</body>
</html>