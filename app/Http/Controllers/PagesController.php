<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    //index page
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(8);
        return view('pages.index')->with('posts', $posts);

    }
    //about page
    public function about()
    {
        return view('pages.about');
    }

    //user page
    public function urname($uname)
    {
        //find user
         $finduser = User::where('u_name', '=', $uname)->first();
         if(!$finduser){
            return redirect('/')->with('error' , "Sorry We Can not find any user by this name");
         }else{

             $posts = Post::where('user_id', '=', $finduser->id)->orderBy('id', 'desc')->paginate(8);
             return view('pages.profile')->with(compact('posts', 'finduser'));
             
         }
    }

    
    
}
