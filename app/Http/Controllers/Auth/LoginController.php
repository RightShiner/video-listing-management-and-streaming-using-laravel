<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DB;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function showLoginForm()
    {
        session(['link'=>url()->previous()]);
        return view('auth.login');
        
    }
     public function authenticated(Request $request)
    {
        
        return redirect(session('link'));
        
    }



    public function userLogin(Request $request)
    {
        if ( Auth::attempt(['email'=>$request['email'],'password'=>$request['password'] ])) {

              //return redirect();
             return redirect()->back ();

            } else {

                // validation not successful, send back to form
                return redirect()->route('login');
                //return redirect('/home');

            }
        
    }
}
