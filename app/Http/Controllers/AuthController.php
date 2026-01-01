<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function showRegister()
    {
        return view('auth.register');
    }


public function register(Request $request)
{
 $request->validate([
 'name' => 'required|string|max:255',
 'email' => 'required|string|email|max:255|unique:users',
 'password' => 'required|string|confirmed|min:8',
 ]);
 $user = User::create([
 'name' => $request->name,
 'email' => $request->email,
 'password' => Hash::make($request->password),
 ]);
 // Send email verification
 event(new Registered($user));
 Auth::login($user);
 return redirect()->route('verification.notice');
}

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
