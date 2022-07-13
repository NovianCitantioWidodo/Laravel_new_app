<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }
    
    public function store(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|max:255|unique:users',
            'name' => 'required|max:100',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        // dd($validateData);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration successfull !');
    }
}