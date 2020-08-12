<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\user;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($service)
    {
        if($service == 'twitter'){

            $socialuser = Socialite::driver($service)->user();
            
        } else{
            
            $socialuser = Socialite::driver($service)->stateless()->user();

        }


        //find user
        $finduser = User::where('email', $socialuser->email)->first();

        if($finduser){

            Auth::login($finduser);

        }
        else{
            
            $user = new User;
            $user->name = $socialuser->name;
            $user->u_name = $socialuser->name.$socialuser->id;
            $user->email = $socialuser->email;
            $user->password = bcrypt(123456789);
            $user->save();
            Auth::login($user);

        }

    }



}
