<?php

namespace App\Http\Controllers;

use App\data;
use App\Group;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LearningController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
    /*
     * USERS FUNCTION
     */
    /*
     * HERE
     */
    public function data(Request $request){

        $uid = \auth()->id();
        $search = $request->text;
        $datas =data::all();
        //return($Articles);
        return view('data.index',compact('datas'));
    }
    public function search(Request $request)
    {

        $search = $request->title;
        $datas = data::search($search)->get();
            return view('data.index', compact('datas'));


        }

    public function create(){

        return view('data/create_question');
    }
    public function created(Request $request){

        $conn = new data();
        $requests= $request->text;
        $uid = \auth()->id();
        $conn->user_id = $uid;
        $conn->body = $requests;
        $conn->save();
        return redirect('data');
    }

}