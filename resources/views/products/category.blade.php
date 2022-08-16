@extends('layouts/app')

@section('content')
    <h1>{{ $category->name }}</h1>

    @foreach($products as $product)
    <div>
        <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
    </div>
    @endforeach

@endsection