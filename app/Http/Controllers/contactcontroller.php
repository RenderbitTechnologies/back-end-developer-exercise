<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\User;
use Auth;

class contactcontroller extends Controller
{
    public function insert(Request $req){
        $data = new contact;
        $data->name=Auth::user()->name;
        $data->email=Auth::user()->email;
        $data->subject=$req->input('subject');
        $data->message=$req->input('message');
        $data->save();
        return "<script>alert('Your message has been sent to the admin!');document.location='home'</script>";
    }
    function select(){
        $data=contact::all();
        return view('dashboard.dash_contactus',["data"=>$data]);
    }
    function delete($id){
        contact::find($id)->delete();
        \Session::flash('status','Message deleted successfully!');
        return redirect('home');
    }
}
