@extends('layouts/app')

@section('content')
<h1>products</h1>

@foreach($products as $product)
<a href="/products/{{ $product->id }}">{{ $product->name }}</a>
@endforeach
@endsection