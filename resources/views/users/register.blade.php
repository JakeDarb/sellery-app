@extends('layouts/app')

@section('content')
    <form method="post" action="{{ url('/register') }}" enctype="multipart/form-data">
        @csrf
        <h2>register</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div>
            <label for="file">Picture</label>
            <input type="file" name="file" accept='.png, .jpg, .jpeg'>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
@endsection