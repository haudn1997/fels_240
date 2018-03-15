<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getShow ()
    {
    	return view('user.login');
    }
}
