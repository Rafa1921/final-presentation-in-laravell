<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function settings()
    {
        return view('auth.settings');
    }
}
