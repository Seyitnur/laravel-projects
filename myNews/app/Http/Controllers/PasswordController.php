<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordController extends Controller
{
    public function password() {
        return view('password');
    }

    public function change_password(PasswordRequest $request) {
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('account');
    }
}
