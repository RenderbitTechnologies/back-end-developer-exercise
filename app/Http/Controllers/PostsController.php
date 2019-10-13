<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\user;
use Illuminate\Support\Facades\Storage;


class PostsController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [ 'except' =>['singlepost']]);
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user_id =Auth()->user()->id;  
        $posts = Post::where('user_id', '=', $user_id)->orderBy('id', 'desc')->paginate(8);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'body' => 'required',
            'cover_img' => 'image|nullable|max:1999'
        ]);


        //handel image
              if($request->hasFile('cover_img')){
                  //FILE NAME WITH EXT
                  $fileNameWithExt = $request->file('cover_img')->getClientOriginalName();
                   //ONLY FILE NAME
                  $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                  //ONLY EXT
                  $extension = $request->file('cover_img')->getClientOriginalExtension();
                  //new file name create
                  $fileNameToStore = 'JBlog_'.time().'.'.$extension;
                  //store
                  $path = $request->file('cover_img')->storeAs('public/cover_img' , $fileNameToStore);

              } else{
                  $fileNameToStore = 'noimage.jpg';
              }

             // other data

                $post = new Post;
                $post->title = $request->input('title');
                $post->body = $request->input('body');
                $post->user_id = Auth()->user()->id;
                $post->cover_img = $fileNameToStore;
                $post->save();
                return redirect('/admin')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function singlepost($uname, $id)
    {
       //find user
       $finduser = User::where('u_name', '=', $uname)->first();

       if(!$finduser){
          return redirect('/')->with('error' , "Sorry We Can not find any user by this name");
       }else{
            //find post
          $post = Post::find($id);

          if(!$post){
            return redirect('/')->with('error' , "Sorry We Can not find any post by this id");
          }
          else{
            $post = Post::find($id);
            return view('posts.show')->with('post' , $post);
          }
           
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id == $post->user_id){
        return view('posts.edit')->with('post' , $post);
        }
        else
        return redirect('admin')->with('error' , "Be Carefull. You are trying to Edit a Post that's does not belongs to you");
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
        $this->validate($request, [

            'title' => 'required',
            'body' => 'required',
            'cover_img' => 'image|nullable|max:1999'
        ]);

             //handel image
             if($request->hasFile('cover_img')){
                //FILE NAME WITH EXT
                $fileNameWithExt = $request->file('cover_img')->getClientOriginalName();
                 //ONLY FILE NAME
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //ONLY EXT
                $extension = $request->file('cover_img')->getClientOriginalExtension();
                //new file name create
                $fileNameToStore = 'JBlog_'.time().'.'.$extension;
                //store
                $path = $request->file('cover_img')->storeAs('public/cover_img' , $fileNameToStore);

            }

                $post = Post::find($id);
                $post->title = $request->input('title');
                $post->body = $request->input('body');
                $post->user_id = Auth()->user()->id;

                if($request->hasFile('cover_img')){
                    if($post->cover_img != 'noimage.jpg'){
                        Storage::delete('public/cover_img/'.$post->cover_img);
                    }
                    $post->cover_img = $fileNameToStore;
                }
                $post->save();
                return redirect('/admin')->with('success', 'Post Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id == $post->user_id){
                
             //delete image
             if($post->cover_img != 'noimage.jpg'){
                 Storage::delete('public/cover_img/'.$post->cover_img);
             }
                $post->delete();
                return redirect('/admin')->with('success', 'Post Deleted');


            }else
              return redirect('admin')->with('error' , "Be Carefull. You are trying to Delete a Post that's does not belongs to you");
    }
}
