<?php

namespace App\Http\Controllers;

use App\data;
use App\Group;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
//use Intervention\Image\Facades\Image;


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
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function data(Request $request){

        $uid = \auth()->id();
        $search = $request->text;
        $datas =data::all();
        //return($Articles);
        return view('data.index',compact('datas'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $search = $request->title;
        $datas = data::search('like'."%".$search."%")->get();
            return view('data.index', compact('datas'));
//        $datas =Request::get('text');
//        $results = data::where('body', 'like', "$datas%");
//
//        return view("data.index")->with("datas", $results);

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
//    public function avatar_profile (){
//
//        return view('data/profile', array('user'=>Auth::user()));
//    }
//    public function update_avatar(Request $request){
//        if ($request->hasFile('avatar')){
//            $avatar = $request->file('avatar');
//            $filename = time().'.'.$avatar->getClientOriginalExtension();
//            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/'.$filename));
//            $user = Auth::user();
//            $user->picture = $filename;
//            $user->save();
//
//        }
//
//        return view('data/profile',array('user',Auth::user()));
//
//    }

}