<?php


namespace App\http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
	public function getIndex(){
			$posts = Post::orderBy('id','desc')->paginate(8);

			return view('blog.index')->withPosts($posts);
	}

	public function getSingle($id) {
    	// fetch from the DB based on id
    	$post = Post::find($id);
        return view('blog/single')->withPost($post);
    }

    public function getSingleSlug($slug){
    	// fetch from the DB based on slug
    	$post = Post::where('slug','=',$slug)->first();
    	return view('blog/single')->withPost($post);
    }
}