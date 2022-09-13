<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class UserController extends Controller
{
    public function browse(){
        return view('browse');
    }
    public function charts(){
        return view('charts');
    }
    public function artist(){
        return view('artist');
    }
}
