@extends('layouts/app')

@section('content')
    @if($flash = session('message'))
        <p>{{ $flash }}</p>
    @endif
    <h1>{{$product -> name}}</h1>

    <h2>Product information</h2>
    <h3>Price</h3>
    <p>{{$product -> price}}</p>
    <h3>Description</h3>
    <p>{{$product -> description}}</p>
    <h3>Category</h3>
    <p>{{$product -> productCategory-> name}}</p>


    <h2>Seller information</h2>
    <h3>Name</h3>
    <p>{{$product -> user -> name}}</p>
    <h3>Email</h3>
    <p>{{$product -> user -> email}}</p>

    <form method="post" action="/products/destroy/{{ $product -> id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="delete product">
    </form>
@endsection