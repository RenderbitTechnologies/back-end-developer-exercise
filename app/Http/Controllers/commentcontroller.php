<?php

namespace App\Http\Controllers;
use App\User;
use App\comment;
use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class commentcontroller extends Controller
{
    function add(Request $req){
        $userid = Auth::user()->id;     //userid
        $data = new comment;
        $data->comment = $req->comment;
        $data->user_id = $userid;
        $data->blog_id = $req->id;
        $data->save();
        return redirect('/homepage');
    }
    function select(){
        if(Auth::user()->role == "admin")
        {
            $data = comment::all();
            $commment = [];
            for($i = 0; $i < sizeof($data); $i++){
                array_push($commment,$data[$i]);
                $name = User::find($data[$i]['user_id']);
                $commment[$i]['name'] = $name->username;
            }
            return view('dashboard.dash_comments',["data"=>$commment]);
        }
        else{
            $data = comment::all();
            $commment = [];
            for($i = 0; $i < sizeof($data); $i++){
                array_push($commment,$data[$i]);
                $name = User::find($data[$i]['user_id']);
                $commment[$i]['name'] = $name->username;
            }
            $username = Auth::user()->name;
            $users = DB::table('blogs')->select('id')->where('name', '=', $username)->get();
            
            $newcomment = [];
            
            for($i = 0 ; $i<sizeof($users) ; $i++){
                for($j=0;$j<sizeof($commment);$j++){
                    if($users[$i]->id == $commment[$j]['blog_id']){
                        array_push($newcomment , $commment[$j]); 
                    }
                } 
            }
        }
        return view('dashboard.dash_comments',["data"=>$newcomment]);        
    }
    function delete($id){
        comment::find($id)->delete();
        return redirect('/comments');
    }
}