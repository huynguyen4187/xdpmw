<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin()
    {
    	if (Auth::check())
		{
		   return redirect()->route('dashbroad');
		}
    	return view('admin.login');
    }

    
}
