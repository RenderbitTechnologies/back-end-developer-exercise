<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Welcome to Laravel';
        // return view('pages.index',compact('title'));
        $posts =  Post::orderBy('created_at','desc')->paginate(8);


        // $posts =  Post::orderBy('title','asc')->get();
        return view('pages.index')->with('posts',$posts);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title' => 'Services are great',
            'services' => ['web','app','seo']
        );
        return view('pages.services')->with($data);
    }
}
