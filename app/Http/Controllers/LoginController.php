<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function create()
    {
        return view('auth.login');
    }

    function store()
    {
        dd('Login user');
    }

    function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
