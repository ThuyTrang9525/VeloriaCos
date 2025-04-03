<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="" href="assets\css\searchResult.css">
    <title>Document</title>
</head>
<body>
    @include('components.header')

    <div class="search-results-container">
        <div class="title-search-results">
            <h1 class="search-title">Tìm kiếm</h1>
            <p class="search-count">Có <span id="quantity-results"> 20 sản phẩm </span> cho tìm kiếm</p>
            <div class="underline"></div>
        </div>

        {{-- <div class="search-result-detailts">
            <!-- Sản phẩm 1 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
            
            <!-- Sản phẩm 2 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
            
            <!-- Sản phẩm 3 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
            
            <!-- Sản phẩm 4 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
            
            <!-- Sản phẩm 5 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
            
            <!-- Sản phẩm 6 -->
            <div class="product-item">
                <h3 class="product-name">Relaxed Fit Sweatshirt</h3>
                <p class="product-price">255 - 305</p>
            </div>
        </div> --}}
    </div>

    @include('components.footer')
</body>
</html>