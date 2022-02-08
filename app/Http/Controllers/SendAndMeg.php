<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Message;


use Illuminate\Http\Request;

class SendAndMeg extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();


        // $order_message = DB::table('messages') 
        //                     ->join('users', 'messages.destination', '=', 'users.id')
        //                     ->select('users.*', 'messages.*')
        //                     // ->where('messages.destination',$id)
        //                     ->Where('messages.sender',$id)
        //                     ->get();

        $order_message = DB::table('messages')
                            ->join('users', 'messages.destination', '=', 'users.id') 
                            ->select('users.*', 'messages.*') 
                            ->get();
                            

        $status = DB::table('tutregisters')
                            ->select('user_id')
                            ->where('user_id', $id)
                            ->get()->count();
        return view('dashboard.message', ['message'=>$order_message], compact('status'));
    }


    public function Recievedindex()
    {
        $id = Auth::id();


        $order_message = DB::table('messages')
                            ->join('users', 'messages.sender', '=', 'users.id')
                            ->select('users.*', 'messages.*')
                            ->where('messages.destination',$id)
                            // ->Where('messages.sender',$id)
                            ->get();
        $status = DB::table('tutregisters')
                            ->select('user_id')
                            ->where('user_id', $id)
                            ->get()->count();

        return view('dashboard.recievedMessage', ['message'=>$order_message], compact('status'));
    }

    public function Show()
    {
        $id = Auth::id();
        $messageShow = DB::table('messages')
                            ->join('users', 'messages.sender', '=', 'users.id')
                            ->select('users.*', 'messages.*')
                            // ->where('messages.destination',$id)
                            ->Where('messages.sender',$id)
                            ->get();
        $order_message = DB::table('messages')
                                    ->join('users', 'messages.destination', '=', 'users.id')
                                    ->select('users.*', 'messages.*')
                                    // ->where('messages.destination',$id)
                                    ->Where('messages.sender',$id)
                                    ->get();

     $status = DB::table('tutregisters')
                            ->select('user_id')
                            ->where('user_id', $id)
                            ->get()->count();

        return view('dashboard.message', ['message'=>$order_message,'messageShow'=>$messageShow], compact('status'));
    }

    public function RecievedShow()
    {
        $id = Auth::id();
        $messageShow = DB::table('messages')
                            ->join('users', 'messages.destination', '=', 'users.id')
                            ->select('users.*', 'messages.*')
                            ->where('messages.destination',$id)
                            // ->Where('messages.sender',$id)
                            ->get();
        $order_message = DB::table('messages')
                                    ->join('users', 'messages.sender', '=', 'users.id')
                                    ->select('users.*', 'messages.*')
                                    ->where('messages.destination',$id)
                                    // ->Where('messages.sender',$id)
                                    ->get();

     $status = DB::table('tutregisters')
                            ->select('user_id')
                            ->where('user_id', $id)
                            ->get()->count();

        return view('dashboard.recievedMessage', ['message'=>$order_message,'messageShow'=>$messageShow], compact('status'));
    }



    public function sendMessage(Request $sendMsg)
    {
        $sendMessage = new Message;
        $sendMessage->sender=auth()->user()->id;
        $sendMessage->destination=$sendMsg->destination;
        $sendMessage->message=$sendMsg->message;
        $sendMessage->save();
        $id = Auth::id();

        $status = DB::table('tutregisters')
                            ->select('user_id')
                            ->where('user_id', $id)
                            ->get()->count();
        return redirect()->route('message');
    }
}
