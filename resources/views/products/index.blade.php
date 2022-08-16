@extends('layouts/app')

@section('content')
    @if($flash = session('message'))
        <p>{{ $flash }}</p>
    @endif
    <h1>products</h1>
    @livewire('product-search')

    <h2>Categories</h2>
    @foreach($categories as $category)
    <div>
        <a href="/products/category/{{ $category->id }}">{{ $category->name }}</a>
    </div>
    @endforeach
@endsection