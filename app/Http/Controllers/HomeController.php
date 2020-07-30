<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function update(Request $req){
        $data = User::find($req->id);
        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->username = $req->input('username');
        $data->save();
        return redirect('profile');
    }
}
