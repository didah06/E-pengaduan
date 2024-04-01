<?php

namespace App\Http\Controllers;

use App\Http\Middleware\cekLogin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
}
