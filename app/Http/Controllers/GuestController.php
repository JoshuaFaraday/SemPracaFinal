<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function Welcome()
    {
        return view('user.welcome');
    }


/*    public function index()
    {
        return view('home');
    }*/
}
