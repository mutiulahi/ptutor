<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $this->validate($loginUser, [
            "email"=>"required|email",
            "password"=>"required",
        ]);

        if(!auth()->attempt($loginUser->only('email','password'))) {
            return back()->with('error', 'Invalid Login Details');
        }
        return redirect('/');
    }
}
