<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function register_user(RegisterRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('News');
    }
}
