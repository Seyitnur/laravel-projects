<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_user(LoginRequest $request) {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect()->route('News');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('News');
    }
}
