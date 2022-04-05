<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\mailVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\str;
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
        // dd($requestUser->input());
        $this->validate($requestUser, [
            "fullname"=>"required",
            "username"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:8|confirmed",
        ]); 
            $verify_token = str::random(20); 
            $addtodo = new User;
            $addtodo->fullname=$requestUser->fullname;
            $addtodo->username=$requestUser->username;
            $addtodo->email=$requestUser->email;
            $addtodo->status='student';
            $addtodo->remember_token=$verify_token;
            $addtodo->password=Hash::make($requestUser->password);
            $addtodo->save();

            $details = [
                'title' => 'Welcome to PTutor',
                'email' => $requestUser->email,
                'verify_token' => $verify_token,
                'name' => $requestUser->fullname
            ]; 
            
            Mail::to($requestUser->email )->send(new mailVerification($details));
            
        
        return redirect('login')->with('success', 'Please check your email to verify your account');
        // $response = null;
        // $check = system("ping -c 1 google.com", $response);
        // if($response == 0)
        // {
        //     dd('connect');
        // }else{
        //     dd('not connect');
        // }
    }

}
