<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LearningController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index(){
        return view('index');
    }
    function add(){
        return view('create_question');
    }
    function created(Request $request){
        $text=$request->text;
        return redirect('index');
    }
}