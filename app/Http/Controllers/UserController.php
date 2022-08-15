<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        // SHOW FORM
        return view('users/create');
    }

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
}
