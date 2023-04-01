<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(){
       $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/')->with('success', 'Welcome Back!');
        }

        // throw ValidationException::withMessages(['email' => 'Your Provided credentials could not be verified']); 
        return back()
        ->withInput()
        ->withErrors(['email' => 'Your Provided credentials could not be verified']);
    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
