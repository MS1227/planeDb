<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function home()
    {
        Session::flash('status','hello there');
        return view('welcome');
    }

}
