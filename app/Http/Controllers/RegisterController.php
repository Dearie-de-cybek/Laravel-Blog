<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller 
{
    //
    public function create(){
        return view('register.create');
    }

    public function store(){
        //Create the user 
       $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

       $user = User::create($attributes);

       auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created successfully.');
    }
}
