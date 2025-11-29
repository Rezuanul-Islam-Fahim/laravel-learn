<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function create()
    {
        return view('auth.register');
    }

    function store()
    {
        dd('creating new user');
    }
}
