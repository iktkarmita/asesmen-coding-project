<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
