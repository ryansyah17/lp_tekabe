<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard');
    }

    public function about(Request $request)
    {
        return view('about');
    }

    public function portfolio(Request $request)
    {
        return view('portfolio');
    }
    public function services(Request $request)
    {
        return view('services');
    }
}
