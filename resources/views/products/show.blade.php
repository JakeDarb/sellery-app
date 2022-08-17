@extends('layouts/app')

@section('content')
    @if($flash = session('message'))
        <p>{{ $flash }}</p>
    @endif
    <h1>{{$product -> name}}</h1>
    @if($product -> productAttachements)
        @foreach($product -> productAttachements as $attachement)
        <img src="/attachements/{{ $attachement->source }}" alt="product pic">
        @endforeach
    @endif
    <h2>Product information</h2>
    <h3>Price</h3>
    <p>{{$product -> price}}</p>
    <h3>Description</h3>
    <p>{{$product -> description}}</p>
    <h3>Category</h3>
    <p>{{$product -> productCategory-> name}}</p>


    <h2>Seller information</h2>
    @if(!empty($product -> user -> picture_source))
        <img src="/attachements/users/{{ $product -> user -> picture_source }}" alt="">
    @endif
    <h3>Name</h3>
    <p>{{$product -> user -> name}}</p>
    <h3>Email</h3>
    <p>{{$product -> user -> email}}</p>

    @livewire('favourites', ['product_id' => $product->id])

    <form method="post" action="/products/destroy/{{ $product -> id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="delete product">
    </form>
@endsection