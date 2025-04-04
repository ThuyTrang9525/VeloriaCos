<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\homepage.css">
    <script src="/js/homepage.js"></script>
    <!-- Thêm Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Thêm Swiper JS -->
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



</head>
<body>
    
@include('components.header')
<div class="container-homepage">

<div class="banner-container">
    <div class="banner">
        <div class="banner-content">
            <h1>Elevate Your Space <br> with Ceramic Elegance</h1>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button>Shop now</button>
        </div>
        <div class="banner-images">
            <img src="/images/homepage/homepage-1.png" alt="Model 1">
            <img src="/images/homepage/homepage-2.png" alt="Model 2">
        </div>
    </div>
</div>

<div class="collection">
    <h2>New Collection</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <div class="swiper mySwiper"> <!-- Changed class to 'swiper' -->
        <div class="swiper-wrapper">
            <div class="swiper-slide item">
                <img src="/images/homepage/dress-icon.png" alt="Dress">
                <h3>Category 1</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
            </div>
            <div class="swiper-slide item">
                <img src="/images/homepage/dress-icon.png" alt="Dress">
                <h3>Category 2</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
            </div>
            <div class="swiper-slide item">
                <img src="/images/homepage/dress-icon.png" alt="Dress">
                <h3>Category 3</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
            </div>
            <div class="swiper-slide item">
                <img src="/images/homepage/dress-icon.png" alt="Dress">
                <h3>Category 4</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
            </div>
            <div class="swiper-slide item">
                <img src="/images/homepage/dress-icon.png" alt="Dress">
                <h3>Category 5</h3>
                <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
            </div>
        </div>
        <!-- Pagination for Swiper -->
        <div class="swiper-pagination"></div>
    </div>
</div>


<div class="collection-div">
    <h2 class="collection-title">Our Featured Collections</h2>
    <div class="collection-grid">
        <!-- Cột 1 -->
        <div class="collection-column">
            <div class="collection-item">
                <img src="/images/homepage/product-1.png" alt="Colorful Knitwear">
                <p class="collection-label">COLORFUL KNITWEAR SERIES</p>
                <span class="collection-arrow">→</span>
            </div>
            <div class="collection-item">
                <img src="/images/homepage/product-2.png" alt="Top Pants Series">
                <p class="collection-label">TOP PANTS SERIES</p>
                <span class="collection-arrow">→</span>
            </div>
        </div>

        <!-- Cột 2 (1 ảnh lớn) -->
        <div class="collection-column large">
            <div class="collection-item">
                <img src="/images/homepage/product-3.png" alt="Jiwoo Made Special Series">
                <p class="collection-label">JIWOO MADE SPECIAL SERIES</p>
                <span class="collection-arrow">→</span>
            </div>
        </div>

        <!-- Cột 3 -->
        <div class="collection-column">
            <div class="collection-item">
                <img src="/images/homepage/product-4.png" alt="Reshider Top Series">
                <p class="collection-label">RESHIDER TOP SERIES</p>
                <span class="collection-arrow">→</span>
            </div>
            <div class="collection-item">
                <img src="/images/homepage/product-5.png" alt="Sweet Dresses Series">
                <p class="collection-label">SWEET DRESSES SERIES</p>
                <span class="collection-arrow">→</span>
            </div>
        </div>
    </div>
</div>
    
<div class="why-shop">
    <h2 class="div-title">Why you’ll love to shop on our website</h2>
    <div class="features">
        <div class="feature-item">
            <div class="icon"><i class="fas fa-heart"></i></div>
            <h3>Take care with love</h3>
            <p>We take care of your package with full attention and of course full of love...</p>
        </div>
        <div class="feature-item">
            <div class="icon"><i class="fas fa-headset"></i></div>
            <h3>Friendly Customer Service</h3>
            <p>You do not need to worry when you want to check your package...</p>
        </div>
        <div class="feature-item">
            <div class="icon"><i class="fas fa-sync-alt"></i></div>
            <h3>Refund Process</h3>
            <p>Refund is a bad experience, but when it happens, we will ensure a smooth process...</p>
        </div>
        <div class="feature-item">
            <div class="icon"><i class="fas fa-truck"></i></div>
            <h3>Fast Shipping</h3>
            <p>We deliver your orders quickly and securely so you can enjoy your purchases sooner...</p>
        </div>
    </div>
</div>
    
<div class="fashion-div">
    <div class="image-container-fas">
        <img src="/images/homepage/Images.png" alt="Sweet Love Style">
    </div>
    <div class="content">
        <h2>How to combine your daily <span class="highlight">outfit</span> to looks fresh and cool.</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id cum dicta repellat dolores dolore...</p>
        <a href="#" class="read-more">READ MORE</a>
    </div>
</div>

<div class="discount-banner">
    <div class="text-content">
        <h1>Get <span class="highlight">50% Off</span></h1>
        <p>For all new product purchases <br> min. purchase Rp. 350.000</p>
    </div>
    <div class="image-container">
        <img src="/images/homepage/dress.png" alt="Discount Dress">
    </div>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination", // Add pagination control
            clickable: true,
        },
        autoplay: {
            delay: 3000, // chuyển slide sau 3 giây
            disableOnInteraction: false, // vẫn autoplay dù người dùng bấm nút
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            },
        },
    });
});



</script>
</body>
</html>
@include('components.footer')

