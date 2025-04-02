<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function loginForm()
    {
        return view('authentication.login-form');
    }

    public function login(LoginRequest $request)
    {
        $fields = $request->validated();
        if (auth()->attempt($fields)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success',  'Welcome back, ' . $fields['username'] . '!');
        } else {
            return redirect()->route('home')->with('error', 'Log in data is incorrect');
        }
    }

    public function signupForm()
    {
        return view('authentication.signup-form');
    }

    public function signup(StoreUserRequest $request)
    {
        $fields = $request->validated();
        $fields['password'] = Hash::make($fields['password']);
        $user = User::create($fields);
        auth()->login($user);

        return redirect()->route('home')->with('success','User ' . $fields['username'] . ' created successfully.');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home')->with('success','You are logged out.');
    }
}
