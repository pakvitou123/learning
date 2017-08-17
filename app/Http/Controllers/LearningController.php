<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class LearningController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('index');
    }

    public function createGroup(Request $request){

        if (Auth::check() == false) {
            redirect('auth/login');
        }

//        $this->validate($request, [
//            'title' => 'required|max:255|min:3',
//            'body' => 'required|min:5'
//        ]);
    //    dd($request->name);
        $group = new Group();
        $group->user_id = auth()->id();
        $group->title = $request->name;
        $group->description = $request->descript;
        $group->priority = $request->browser;
        $group->save();
        return redirect('home');
    }

    public function group(){
        return view('group/group');
    }

    public function showedit(){
        return view ('profile/profile');
    }
}