<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Login extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('Auth.login');
    }

    public function login(Request $loginUser){
        // $this->validate($loginUser, [
        //     "email"=>"required|email",
        //     "password"=>"required",
        // ]);

        $email = $loginUser->email;
        $password = $loginUser->password;

        $credentials = $loginUser->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials) and auth()->user()->email_verify_status === '0') {

            Auth::logout();
            return back()->with('error_mail', 'Sorry you have to verify your email before you get access');  

        }elseif(Auth::attempt($credentials) and auth()->user()->email_verify_status === '1'){

            $loginUser->session()->regenerate();
            return redirect()->intended('/');          

        }else{
            return back()->with('error', 'The provided credentials do not match our records.');
        }

      
    }
}
