@extends('layouts/app')

@section('content')
<h1>create user</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form method="post" action="{{ url('user/store') }}">
    @csrf
    <div>
        <label for="name">name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="mail">email</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">signup</button>
</form>
@endsection