<?php 

namespace App\http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post; 
use Mail;
use Session;

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

	 public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('email.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@devmarketer.io');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}


}