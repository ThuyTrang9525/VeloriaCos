@extends('master')
@section('content')
<div class="container mt-[120px]">
    <div class="row ml-[120px]" >
        <div class="col-md-3">
        <ul class="list-group">
        @foreach ($sidebar as $sb)
            <li class="list-group-item">
                <a href="{{ route('category_products', ['category_id' => $sb->id]) }}"
                   class="{{ request()->is('product_list/'.$sb->id) ? 'active' : '' }}">
                    {{ $sb->name }}
                </a>
            </li>
        @endforeach
    </ul>
        </div>

        <div class="col-md-8">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded-lg relative text-center">
                <img src="{{ $product->primaryImage ? asset($product->primaryImage->image_url) : asset('images/default.jpg') }}" 
                     alt="{{ $product->name }}" 
                     class="w-full h-80 object-cover rounded-lg">
                <div class="absolute top-2 right-2 flex gap-2">
                    <i class="fa-solid fa-cart-plus text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"onclick="addToCart({{ $product->id }})"></i>
                    <i class="fa-regular fa-heart text-pink-500 bg-white p-2 rounded-full border-2 border-pink-500 cursor-pointer"></i>
                </div>
                <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-600">${{ number_format($product->price, 2) }}</p>
            </div>
        @endforeach
    </div>

    <!-- Hiển thị phân trang -->
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>


    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>

@endsection
