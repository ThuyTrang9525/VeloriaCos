<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        /* Giữ màu của nút Add to Wishlist ổn định */
        #add-to-wishlist-button {
            background-color: #e2e8f0;
            color: black;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-links a {
            padding: 10px;
            text-decoration: none;
            color: gray;
            font-weight: 600;
        }

        .tab-links a.active {
            color: #e11d48;
            border-bottom: 2px solid #e11d48;
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="container mx-auto ">
    <div class="flex gap-6 bg-white p-6 rounded-lg shadow-lg">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex gap-6 bg-white p-6 rounded-lg shadow-lg">
                <!-- Product Image -->
                <div class="w-1/2">
                    <!-- Ảnh chính nhỏ hơn -->
                    <img id="main-image" class="w-2/3 rounded-lg mx-auto" 
                        src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" 
                        alt="Product Image">
                    
                    <!-- Thumbnail -->
                    <div class="flex justify-center gap-2 mt-4">
                        <img class="w-1/5 rounded-lg cursor-pointer" 
                            src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdxk-lxieto5ezgkff8@resize_w900_nl.webp" 
                            alt="Thumbnail 1" onclick="changeImage(0)">
                        
                        <img class="w-1/5 rounded-lg cursor-pointer" 
                            src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdwl-lxietp3jiq4qb7.webp" 
                            alt="Thumbnail 2" onclick="changeImage(1)">
                        
                        <img class="w-1/5 rounded-lg cursor-pointer" 
                            src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" 
                            alt="Thumbnail 3" onclick="changeImage(2)">
                    </div>
                </div>
                <!-- Product Details -->
                <div class="w-1/2">
                    <!-- Navigation -->
                    <div class="flex justify-between text-gray-400 text-sm pt-6 mb-4">
                        <span id="prev-button" class="cursor-pointer" onclick="changeImage(currentImage - 1)">&lt; PREV</span>
                        <span id="next-button" class="cursor-pointer" onclick="changeImage(currentImage + 1)">NEXT &gt;</span>
                    </div>

                    <!-- Product Title & Description -->
                    <h1 class="text-4xl font-bold pt-6">Pullover Hoodie</h1>
                    <p class="text-gray-600 pt-4 text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit... ee er t t r  r e erg  tg
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit... ee er t t r  r e erg  tg
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit... ee er t t r  r e erg  tg
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit... ee er t t r  r e erg  tg
                        
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
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">2XL</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">3XL</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">L</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">M</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">S</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">XL</button>
                            <button class="border px-4 py-2 rounded" onclick="selectSize(this)">XS</button>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="pt-6">
                        <span class="text-red-500 text-2xl font-bold">$27.00</span>
                        <span class="text-gray-400 line-through ml-2">$34.00</span>
                    </div>

                    <div class="pt-6 pb-5 flex items-center gap-4">
                        <div class="flex items-center border rounded-lg overflow-hidden w-1/7">
                            <button class="px-4 py-2" onclick="this.parentElement.querySelector('input').stepDown()">-</button>
                            <input class="w-12 text-center" type="number" value="1" min="1" step="1">
                            <button class="px-4 py-2" onclick="this.parentElement.querySelector('input').stepUp()">+</button>
                        </div>

                        <!-- Nút Add to Cart (3/4 chiều rộng) -->
                        <button class="bg-pink-300 text-white px-6 py-3 rounded-lg w-5/6">
                            Add to Cart
                        </button>
                    </div>

                    <!-- Nút Add to Wishlist (di chuyển xuống phía dưới) -->
                    <button id="add-to-wishlist-button" class="pt-4 bg-gray-200 text-black px-6 py-3 rounded-lg w-full">
                        Add to Wishlist
                    </button>
                </div>

            </div>

            <!-- Navigation (Description, Reviews, etc.) -->
            <div class="mt-8">
                <div class="border-b border-gray-200">
                    <nav class="tab-links flex space-x-4">
                        <a href="#" class="py-2" onclick="showTab('description')" id="description-link">Description</a>
                        <a href="#" class="py-2" onclick="showTab('reviews')" id="reviews-link">Reviews (0)</a>
                        <a href="#" class="py-2" onclick="showTab('more-products')" id="more-products-link">More Products</a>
                    </nav>
                </div>
                <div class="mt-4 grid grid-cols-3 gap-4">
                    <!-- Description -->
                    <div id="description" class="p-4">
                        <h2 class="text-xl font-semibold">Product Description</h2>
                        <p class="text-gray-600 mt-2">Detailed product description here.</p>
                    </div>

                    <!-- Reviews -->
                    <div id="reviews" class="p-4 hidden">
                        <h2 class="text-xl font-semibold">Reviews</h2>
                        <p class="text-gray-600 mt-2">User reviews will be displayed here.</p>
                    </div>

                    <!-- More Products -->
                    <div id="more-products" class="p-4 hidden">
                        <h2 class="text-xl font-semibold">More Products</h2>
                        <p class="text-gray-600 mt-2">Related products will be displayed here.</p>
                    </div>
                </div>
            </div>

            <!-- You may also like section -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold">You may also like...</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Product 1" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Fit Round-neck T-shirt</h3>
                        <p class="text-gray-600">$24.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Product 2" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Adult Quantity Tee</h3>
                        <p class="text-gray-600">$26.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Product 1" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Fit Round-neck T-shirt</h3>
                        <p class="text-gray-600">$24.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Product 2" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Adult Quantity Tee</h3>
                        <p class="text-gray-600">$26.00</p>
                    </div>
                </div>
            </div>

<!-- Related Products Section -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold">Related Products</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Related Product 1" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Product Price by Options</h3>
                        <p class="text-gray-600">$24.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Related Product 2" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Toddler T-shirt</h3>
                        <p class="text-gray-600">$22.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Related Product 1" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Product Price by Options</h3>
                        <p class="text-gray-600">$24.00</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg relative text-center">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp" alt="Related Product 2" class="w-full rounded-lg">
                        <!-- Heart Icon in a white square -->
                        <i class="fa-regular fa-heart absolute top-2 right-2 text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                        <h3 class="text-lg font-semibold mt-2">Toddler T-shirt</h3>
                        <p class="text-gray-600">$22.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        let currentImage = 0;
        const images = [
            "https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp",
            "https://down-vn.img.susercontent.com/file/sg-11134201-7rdxk-lxieto5ezgkff8@resize_w900_nl.webp",
            "https://down-vn.img.susercontent.com/file/sg-11134201-7rdwl-lxietp3jiq4qb7.webp"
        ];

        function changeImage(index) {
            if (index >= 0 && index < images.length) {
                currentImage = index;
                document.getElementById("main-image").src = images[currentImage];
                updateNavigation();
            }
        }

        function updateNavigation() {
            document.getElementById("prev-button").classList.toggle("text-gray-400", currentImage === 0);
            document.getElementById("next-button").classList.toggle("text-gray-400", currentImage === images.length - 1);
        }

        function selectSize(button) {
            const buttons = document.querySelectorAll("button");
            buttons.forEach(btn => btn.classList.remove("bg-gray-200", "text-black", "border-black"));
            button.classList.add("bg-gray-200", "text-black", "border-black");
        }
        function showTab(tab) {
            // Ẩn tất cả các tab
            document.getElementById("description").classList.add("hidden");
            document.getElementById("reviews").classList.add("hidden");
            document.getElementById("more-products").classList.add("hidden");

            // Hiển thị tab đã chọn
            document.getElementById(tab).classList.remove("hidden");

            // Thay đổi kiểu dáng của các liên kết
            document.getElementById("description-link").classList.remove("border-b-2", "border-pink-500");
            document.getElementById("reviews-link").classList.remove("border-b-2", "border-pink-500");
            document.getElementById("more-products-link").classList.remove("border-b-2", "border-pink-500");

            // Đánh dấu liên kết đã chọn
            document.getElementById(tab + "-link").classList.add("border-b-2", "border-pink-500");
        }
        // Default tab to show
        showTab('description');
    </script>
</body>
</html>
