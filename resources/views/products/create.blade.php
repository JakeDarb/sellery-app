@extends('layouts/app')

@section('content')
<h2>add product</h2>
@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif
    <form method="post" action="{{ url('/products/store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="desc">desc</label>
            <textarea name="desc" id="desc" cols="30" rows="10">{{ old('desc') }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="price" name="price" class="form-control" id="price" value="{{ old('price') }}">
        </div>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
@endsection