@extends('master')
@section('content')
<div class="container bg-white mx-auto p-[120px]">
    <div class="flex gap-6  p-6 rounded-lg ">
        <div class=" p-6 rounded-lg ">
            <div class="flex gap-6  p-6 rounded-lg ">
                <!-- Product Image -->
                
                <div class="w-1/2">
                    <!-- Thumbnail -->
                    <div class="flex justify-between text-gray-400 text-sm pt-6 mb-2 mr-[110px]">
                        <span id="prev-button" class="cursor-pointer" onclick="changeImage(currentImage - 1)">&lt; PREV</span>
                        <span id="next-button" class="cursor-pointer" onclick="changeImage(currentImage + 1)">NEXT &gt;</span>
                    </div>
                    <div id="product" data-images="{{ json_encode($product->images->pluck('image_url')) }}" data-id="{{ $product->id }}">
                        <!-- Ảnh chính -->
                        <img class="w-[450px] h-[450px] object-cover" id="main-image" src="{{ $product->images->first() ? $product->images->first()->image_url : asset('path_to_default_image.jpg') }}" alt="Product Image">
                    
                        <!-- Thumbnails -->
                        <div class="flex justify-center gap-4 mt-4 mr-[100px]">
                            @foreach ($product->images as $index => $image)
                                <img class="w-1/4 rounded-lg cursor-pointer thumbnail" 
                                     src="{{ $image->image_url }}" 
                                     alt="Thumbnail {{ $index+1 }}" 
                                     data-index="{{ $index }}">
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Product Details -->
                <div class="w-1/2">
                    <!-- Navigation -->
                    

                    <!-- Product Title & Description -->
                    <h1 class="text-4xl font-bold pt-6">{{ $product->name }}</h1>
                    <p class="text-gray-600 pt-4 text-lg leading-relaxed">
                        {{ $product->description }}
                    </p>

                    <!-- Share Buttons -->
                    <div class="pt-6 flex gap-4 items-center">
                        <span class="font-semibold">Share:</span>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fa-brands fa-pinterest"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fa-solid fa-envelope"></i></a>
                    </div>

                    <!-- Size Selection -->
                    <div class="pt-6">
                        <span class="text-gray-700 font-semibold">Size :</span>
                        <div class="flex gap-2 mt-2">
                            @foreach (['2XL', '3XL', 'L', 'M', 'S', 'XL', 'XS'] as $size)
                                <button class="border px-4 py-2 rounded">{{ $size }}</button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="pt-6">
                        <span class="text-red-500 text-2xl font-bold">${{ number_format($product->price, 2) }}</span>
                    </div>

                    <div class="pt-6 pb-5 flex items-center gap-4">
                        <div class="flex items-center border rounded-lg overflow-hidden w-1/7">
                            <button class="px-4 py-2" onclick="this.parentElement.querySelector('input').stepDown()">-</button>
                            <input class="w-12 text-center" type="number" value="1" min="1" step="1">
                            <button class="px-4 py-2" onclick="this.parentElement.querySelector('input').stepUp()">+</button>
                        </div>

                        <!-- Add to Cart Button -->
                        <button class="bg-pink-300 text-white px-6 py-3 rounded-lg w-5/6">
                            Add to Cart
                        </button>
                    </div>

                    <!-- Add to Wishlist Button -->
                    <button id="add-to-wishlist-button" class="pt-4 bg-gray-200 text-black px-6 py-3 rounded-lg w-full">
                        Add to Wishlist
                    </button>
                </div>
            </div>
            <div class="mt-8">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="tab-links flex space-x-4 gap-[400px]">
                        <a href="#" class="py-2 font-semibold text-black border-b-2 border-black" onclick="showTab('description')" id="description-link">Description</a>
                        <a href="#" class="py-2 text-gray-500" onclick="showTab('reviews')" id="reviews-link">Reviews ({{ $product->reviews->count() }})</a>
                        <a href="#" class="py-2 text-gray-500" onclick="showTab('more-products')" id="more-products-link">More Products</a>
                    </nav>
                </div>
            
                <!-- Content Sections -->
                
                    <!-- Description -->
                    <div id="description" class="p-4">
                        <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                    </div>
            
                    <!-- Reviews -->
                    <div id="reviews" class="p-4 hidden">
                        @if ($product->reviews->isEmpty())
                            <p class="text-gray-600 mt-2">No reviews yet.</p>
                        @else
                            <ul class="mt-2">
                                @foreach ($product->reviews as $review)
                                    <li class="border-b py-2">⭐ {{ $review->rating }} - {{ $review->comment }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
            
                    <!-- More Products -->
                    <div id="more-products" class="p-4 hidden">
                        <ul class="mt-2 flex space-x-4">
                            @foreach ($relatedProducts->take(5) as $product)
                                <li class="py-2">
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <img src="{{ $product->images->first()->image_url }}" alt="Product Image" alt="Product Image" class="w-full h-80 object-cover rounded-lg">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold">You may also like...</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-4">
                    @foreach ($youMayAlsoLikeProducts->take(4) as $product) <!-- Lấy tối đa 4 sản phẩm -->
                        <div class="bg-white p-4 rounded-lg  relative text-center">
                            <!-- Đường dẫn tới chi tiết sản phẩm -->
                            <a href="{{ route('product.show', $product->id) }}">
                                <img src="{{ $product->images->first()->image_url }}" alt="Product Image" class="w-full h-80 object-cover rounded-lg">
                            </a>
                            <!-- Icons: Giỏ hàng và Tim -->
                            <div class="absolute top-2 right-2 flex gap-2">
                                <!-- Icon giỏ hàng -->
                                <i class="fa-solid fa-cart-plus text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                                <!-- Icon yêu thích -->
                                <i class="fa-regular fa-heart text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                            </div>
                            <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                            <p class="text-gray-600">{{ $product->price }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Related Products Section -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold">Related Products</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-4">
                    @foreach ($relatedProducts->take(4) as $product) <!-- Lấy tối đa 4 sản phẩm -->
                        <div class="bg-white p-4 rounded-lg  relative text-center">
                            <!-- Đường dẫn tới chi tiết sản phẩm -->
                            <a href="{{ route('product.show', $product->id) }}">
                                <img src="{{ $product->images->first()->image_url }}" alt="Product Image" class="w-full h-80 object-cover rounded-lg">
                            </a>
                            <!-- Icons: Giỏ hàng và Tim -->
                            <div class="absolute top-2 right-2 flex gap-2">
                                <!-- Icon giỏ hàng -->
                                <i class="fa-solid fa-cart-plus text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                                <!-- Icon yêu thích -->
                                <i class="fa-regular fa-heart text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                            </div>
                            <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                            <p class="text-gray-600">{{ $product->price }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>

<script src="{{ asset('assets/js/product_detail.js') }}"></script>
@endsection