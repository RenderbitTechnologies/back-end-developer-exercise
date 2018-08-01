<?php


namespace App\http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
	public function getIndex(){
			$posts = Post::paginate(8);

			return view('blog.index')->withPosts($posts);
	}
}