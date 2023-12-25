<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function adminLogin(Request $request)
    {

        $val = Validator::make($request->all(), [
            'email' => 'email|required|exists:users,email',
            'password' => 'required|string|min:4'
        ])->validate();


        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
}
