@extends('layouts.app')
@section('title')
Products
@endsection
@section('content')
    {{-- <section class="h-[500px] w-[900px] flex justify-start items-center flex-col rounded-md shadow-lg bg-slate-50"> --}}
        <ul class="w-full py-4 px-4 flex justify-start items-center flex-wrap gap-4">
        @foreach ($products as $product)
            @include('product', [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $product->category,
                'description' => $product->description,
                'price' => $product->price,
            ])
        @endforeach
        </ul>
    {{-- </section> --}}

@endsection