@extends('master')

@section('content')

    <div class="container mx-auto p-[120px] ">
                <!-- Nút quay lại trang chủ -->
                <a href="{{ route('homepage') }}" class="flex items-center text-blue-500 hover:text-blue-700 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5l-7 7 7 7"></path>
                    </svg>
                    <span class="text-lg">Back to Home</span>
                </a>
        <h2 class="text-2xl font-bold">{{ $category->name }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-4">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-lg text-center">
                    <img src="{{ $product->images->first()->image_url }}" alt="Product Image" class="w-full h-80 object-cover rounded-lg">
                    <h3 class="text-lg font-semibold mt-2">{{ $product->name }}</h3>
                    <p class="text-gray-600">{{ $product->price }}</p>
                    <a href="{{ route('product.show', $product->id) }}" class="text-blue-500">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
