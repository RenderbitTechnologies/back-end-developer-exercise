<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Quotation;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class UserController extends Controller
{	
	public function __construct(){
        $this->middleware('auth');
    }
    public function getUser(){
    	
         $posts = DB::table('posts')->where('user_id', auth()->id())->paginate(8);
	 	return view('pages/Welcome')->withPosts($posts);
    }
}
