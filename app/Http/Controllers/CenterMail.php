<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\mailVerification;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class CenterMail extends Controller
{
    //
    public function mailVarification(Request $userEmail)
    {
        $user = User::where('email', '=', $userEmail->email)->first();
        if ($user === null) {
            return redirect()->back()->with('error', 'The email you entered is not in our record!');
        }else {
            $user = User::where('email', '=', $userEmail->email)->get();
           foreach ($user as $value) {
            $verify_token =  $value->remember_token;
            $fullname =  $value->fullname;
           }
        } 
        $details = [
            'title' => 'Welcome to PTutor',
                'email' => $userEmail->email,
                'verify_token' => $verify_token,
                'name' => $fullname
        ]; 
        
        Mail::to($userEmail->email)->send(new mailVerification($details));
        return redirect()->back()->with('success', 'Please check your email to verify your account');
    }

    public function verify_mail(Request $userEmail)
    {
        $updated = User::where('remember_token', $userEmail->token)
            ->update(['email_verify_status' => 1, 'email_verified_at' => now()]); 
            if($updated) {
                return redirect()->route('login')->with('success', 'Your email has been verified');
            }
            else {
                return redirect()->route('login')->with('error', 'Email not verify please check your network!');
            }
            
      
    }
    
}
