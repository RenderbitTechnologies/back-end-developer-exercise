<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //create a database and store all the blog posts in it from database  
        $posts = Post::orderBy('id','desc')->paginate(8);


        //return a view and pass the above variable
        return view ('posts/index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data 
            $this-> validate($request,array(
                'title' => 'required|max:255',
                //'slug' =>'required|alpha_dash|min:5|max:255',
                'body'  => 'required',

            ));
        //store in database 
            $post = new Post;
            $post->title = $request->title;
            //$post->slug = $request->slug;
            $post->body =   $request->body;
            $post->save();

            Session::flash('success','successfully saced ! ') ;
        //redirect to another page
            return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::find($id);
        return view('posts/show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find post in database and save as a var
            $post = Post::find($id); 
        //return the view and pass in tha var 
            return view('posts.edit')->withPost($post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $this-> validate($request,array(
                'title' => 'required|max:255',
                'body'  => 'required'
            ));

        //save the data to the database
            $post = Post::find($id);

            $post->title= $request ->input ('title');
            $post->body= $request->input('body');

            $post->save();

        //set flash data with success method
            Session::flash('success','This post is successfully saved');


        //redirect with flash data to posts.show
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);

        $post->delete();
        Session::flash('success','Post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
