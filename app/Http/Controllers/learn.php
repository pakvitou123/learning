<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learn extends Controller
{
    function index()
    {
        return view('index');
    }
    function test()
    {
        return view('test');
    }
}
