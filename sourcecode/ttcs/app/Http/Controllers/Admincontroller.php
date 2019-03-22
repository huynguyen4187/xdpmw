<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Datatables;
use Illuminate\Support\Facades\Crypt;

class Admincontroller extends Controller
{
    public function getList()
    {
    	return view('admin.author.list');
    }

    
}
