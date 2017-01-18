<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data = ['one', 'two', 'three'];
        return view('welcome', compact('data'));
    }
    public function about()
    {
        return view('about');
    }
}
