@extends('layouts.app')
@section('title')
Edit Product
@endsection
@section('content')
<section class="h-screen w-screen flex items-center justify-center">
        <div class="w-[440px] px-8 py-6 flex items-center justify-center gap-4 flex-col bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all">
                <h1 class="text-3xl font-bold text-blue-700">Edit Product</h1>
                <form class="w-full" action="/update/{{ $product->id }}" method="POST">
                        @csrf
                        <div class="mb-6">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                          <input type="text" name="name" value="{{ $product->name }}" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g Footbal" required>
                        </div>
                        <div class="mb-6">
                          <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                          <textarea type="text" name="description" id="desc" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product description...." required>{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-6">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                                <select name="category" id="category" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @php
                                                $categories = [
                                                        "electronics",
                                                        "clothing",
                                                        "food",
                                                        "toys",
                                                        "books",
                                                        "furniture",
                                                        "sports",
                                                        "tools",
                                                        "outdoors",
                                                        "automotive",
                                                        "beauty",
                                                        "health",
                                                        "home",
                                                        "garden",
                                                        "office",
                                                        "pets",
                                                        "baby",
                                                        "luggage",
                                                        "jewelry",
                                                        "shoes",
                                                        "music",
                                                        "movies",
                                                        "games",
                                                        "industrial",
                                                        "other",
                                                ];
                                        @endphp
                                        {{-- <option value="{{ $category }}" selected> {{ $category }} </option> --}}
                                        @foreach ($categories as $category)
                                                <option value="{{ $category }}" selected={{ $product->category == $category }}>{{ $category }}</option>
                                        @endforeach
                                </select>
                        </div>
                        <div class="mb-6">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                          <input type="number" name="price" value="{{ $product->price }}" id="price" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g 1000" required>
                        </div>
                        <div class="mb-6">
                          <label for="qte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Quantity</label>
                          <input type="number" name="quantity" value="{{ $product->quantity }}" id="qte" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Product</button>
                </form>      
        </div>
</section>
@endsection