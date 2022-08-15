@extends('layouts/app')

@section('content')
    @if($flash = session('message'))
        <p>{{ $flash }}</p>
    @endif
    {{$product -> name}}
    {{$product -> user -> name}}

    <form method="post" action="/products/destroy/{{ $product -> id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="delete product">
    </form>
@endsection