<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\blog;
use App\comment;
use Illuminate\Support\Facades\DB;

class blogcontroller extends Controller
{
    function add(Request $req){
        
        $data = new blog;
        if($req->hasFile('image')){
            $fileName = $req->image->getClientOriginalName();
            if($req->image->move(public_path('images'),$fileName)){
                $data->image=$fileName;
                $data->name = Auth::user()->name;
                $data->title=$req->input('title');
                $data->email=Auth::user()->email;
                $data->content=$req->input('content');
                $data->save();
                return "<script>alert('Your Blog is sent for review');document.location='homepage'</script>";
            }
            else{
                 // here put code that will tell user that some error in uloading file is present and no need to carry on further tasks, exxit here
                return "<script>alert('Your Blog was Not Uploaded. PLease try again!');document.location='homepage'</script>";
            }
        }else{
            echo "not found.";
        }                
    }
    function select(){
        $data=blog::all();
        return view('dashboard.dash_blog',["data"=>$data]);
    }
    function home_select(){
        $data = blog::orderBy('created_at', 'DESC')->paginate(8);
        for($j = 0 ; $j<sizeof($data) ; $j++){
            $comments = [];
            $commentt = blog::find($data[$j]['id'])->comments;           

            for($i=0;$i<sizeof($commentt);$i++){                 
                array_push($comments, $commentt[$i]);
            }
            $data[$j]['comments'] = $comments;
        }
        return view('/homepage',["data"=>$data]);
    }
    function update($id){
        $data=blog::find($id);
        $data->status='Accepted';
        $data->save();
        return redirect('blog');
    }
    function delete($id){
        blog::find($id)->delete();
        
        return redirect('/blog');
    }
}