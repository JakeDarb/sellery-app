@extends('layouts/app')

@section('content')

    @foreach($favourites as $favourite)
    <div>
        <a href="/products/{{ $favourite->products->id }}">{{ $favourite->products->name }}</a>
    </div>
    @endforeach

@endsection