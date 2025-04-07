<div class="container">
    <div class="header">
        <div class="header-container">
            <div class="top-header">
                <div class="left-top-header"></div>
                <div class="middle-top-header"></div>
                <div class="right-top-header"></div>
            </div>
    
            <div class="middle-header">
                <div class="info-LogoNameWeb">
                    <img src="{{ asset('images/LogoVeloriaCos.png') }}" alt="Logo VeloriaCos">
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

            <a href="{{ route('cart.index') }}" class="icon-shopping-cart">
                <p class="quantity-icon-shopping-cart">{{ $totalQty ?? 0 }}</p>
                <ion-icon name="cart-outline"></ion-icon>
            </a>


            </div>
        </div>
    </div>
</div>