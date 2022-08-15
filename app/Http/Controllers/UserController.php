<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    /*public function create(){
        // SHOW FORM
        return view('users/create');
    }*/

    public function register(){
        return view('users/register');
    }

    public function store(Request $request){
        $user = new \App\Models\User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        echo "signup ok";
    }

    public function login(){
        return view('users/login');
    }

    public function handleLogin(Request $request){
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credential)){
            echo "logged in";
        }else{
            echo "logged in failed";
        }
    }

    /*
    public function store(Request $request){
        // VALIDATE INFO
        $validated = $request->validate([
            'name' => 'required',
            'mail' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        // INSERT IN DB
        $user = new \App\Models\User();
        $user->name = $request->input('name');
        $user->email = $request->input('mail');
        $user->password = $request->input('password');
        $user->save();
        return redirect('user/');
    }
    */
}
