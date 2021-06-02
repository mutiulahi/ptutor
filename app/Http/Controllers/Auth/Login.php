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
        $this->validate($loginUser, [
            "email"=>"required|email",
            "password"=>"required",
        ]);

        if(!auth()->attempt($loginUser->only('email','password'))) {
            return back()->with('error', 'Invalid Login Details');
        }
        else{
            return redirect()->route('/');
        }
    }
}
