<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.layouts.login');
    }

    public function login(Request $request)
    {
        $valid = Validator::make($request->all(),[
            'email' => 'required|email|string',
            'password' => 'required|string|min:1'
        ]);

        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'User Logged');
        }
        return redirect()->back()->with('error','Invalid Credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
