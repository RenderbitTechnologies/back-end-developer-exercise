<?php 

namespace App\http\Controllers;
use App\Post; 

class PagesController extends Controller {

	 public function getIndex(){
	 	$posts = Post::orderBy('created_at','desc')->limit(4)->get();
	 	return view('pages/Welcome')->withPosts($posts);
	 }

	 public function getAbout(){
	 	return view('pages/About');
	}

	 public function getContact(){
	 			return view('pages/Contact');
	 }


}