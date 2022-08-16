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
    <form method="post" action="{{ url('/products/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="desc">desc</label>
            <textarea name="desc" id="desc" cols="30" rows="10">{{ old('desc') }}</textarea>
        </div>
        <div>
            <label for="files">Pictures</label>
            <input type="file" name="files[]" accept='.png, .jpg, .jpeg, .pfd, .doc, .docx, .ppt' multiple>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="price" name="price" class="form-control" id="price" value="{{ old('price') }}">
        </div>
        <div>
        <label for="category">Choose a category:</label>
        <select name="category" id="category">
            @foreach($productCategories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
@endsection