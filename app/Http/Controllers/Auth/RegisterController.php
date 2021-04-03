<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Auth\Input;
class RegisterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('Auth.register');
    }
    public function register(Request $requestUser) {
        // dd($requestUser->email);
        // dd($requestUser->only('email','password'));
        $this->validate($requestUser, [
            "firstname"=>"required|max:255",
            "lastname"=>"required|max:255",
            "username"=>"required|max:255",
            "email"=>"required|email|max:255",
            "password"=>"required|min:8|confirmed",
        ]);

        $userAttempt  = User::where('email', $requestUser->input('email'))->first();
        if($userAttempt){
            // if exist and redirect back
            return back()->with('error', 'Thsi email has been use by another person');
        }else{
            // create account for new user's 
            $addtodo = new User;
            $addtodo->firstname=$requestUser->firstname;
            $addtodo->lastname=$requestUser->lastname;
            $addtodo->username=$requestUser->username;
            $addtodo->email=$requestUser->email;
            $addtodo->password=Hash::make($requestUser->password);
            $addtodo->save();
        }

        // User::create([
        //     'firstname'=> $requestUser->firstname,
        //     'lastname'=> $requestUser->lastname,
        //     'username'=> $requestUser->username,
        //     'email'=> $requestUser->email,
        //     'password'=> Hash::make($requestUser->password),   
        // ]);

        auth()->attempt($requestUser->only('email','password'));
        return redirect('/');
    }

}
