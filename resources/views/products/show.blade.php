@extends('layouts/app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>

<h2>Seller information</h2>
<p>Name: {{ $product->user->name }}</p>
<p>Email: {{ $product->user->email }}</p>
@endsection