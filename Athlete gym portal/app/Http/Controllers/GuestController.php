<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        return view('guest.home');
    }

    public function about()
    {
        return view('guest.about');
    }


    public function blog()
    {
        return view('guest.blogs');
    }

    public function services()
    {
        return view('guest.services');
    }

    public function contacts()
    {
        return view('guest.contacts');
    }

    public function join()
    {
        return view('guest.join');
    }
}
