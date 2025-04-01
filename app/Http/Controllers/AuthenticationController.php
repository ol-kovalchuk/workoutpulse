<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function loginForm()
    {
        return view('authentication.login-form');
    }

    public function signupForm()
    {
        return view('authentication.signup-form');
    }

    public function signup(StoreUserRequest $request)
    {
        $fields = $request->validated();
        $fields['password'] = Hash::make($fields['password']);
        User::create($fields);

        return redirect()->route('home')->with('success','User ' . $fields['username'] . ' created successfully.');
    }
}
