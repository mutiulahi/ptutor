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
        $my_id = Auth::id();

        $fetch_connected_contact = DB::table('messages')
                            ->join('users', 'messages.user_id','=','users.id')
                            ->where('messages.sender_id',$my_id)
                            ->orWhere('messages.destination_id',$my_id)
                            ->get();
        foreach ($fetch_connected_contact as $value) {
            if($value->sender_id == $my_id) {
                $my_contacts_id[] = $value->destination_id;
            }else{
                $my_contacts_id[] = $value->sender_id;
            }
        }

        // remove duplicate fecth of users
        if (empty($my_contacts_id)) {
            $contacts_id_neet = [];
        }else{
            $contacts_id_neet = array_unique($my_contacts_id);
        }

        foreach ($contacts_id_neet as $contact_id) {
            $fetch_contact_list[] = DB::table('users')
                        ->select('*')
                        ->where('id',$contact_id)
                        ->get();
                    }
        if (empty($fetch_contact_list)) {
                $contact = [];
        }else{
            foreach ($fetch_contact_list as $value) {
                foreach ($value as  $value) {
                    $contact[] = $value;
                }
            }
        }


        return view('dashboard.message',  ['contact_list'=>$contact]);
    }

    public function Show(Request $get, $id)
    {
        //get contact start 
        $my_id = Auth::id();
        $fetch_connected_contact = DB::table('messages')
                    ->join('users', 'messages.user_id','=','users.id')
                    ->where('messages.sender_id',$my_id)
                    ->orWhere('messages.destination_id',$my_id)
                    ->get();
            
            foreach ($fetch_connected_contact as $value) {
                if($value->sender_id == $my_id) {
                    $my_contacts_id[] = $value->destination_id;
                }else{
                    $my_contacts_id[] = $value->sender_id;
                }
            }

            // remove duplicate fecth of users
            if (empty($my_contacts_id)) {
                $contacts_id_neet = [];
            }else{
                $contacts_id_neet = array_unique($my_contacts_id);
            }
            

            foreach ($contacts_id_neet as $contact_id) {
                $fetch_contact_list[] = DB::table('users')
                    ->select('*')
                    ->where('id',$contact_id)
                    ->get();
            }

            foreach ($fetch_contact_list as $value) {
                foreach ($value as  $value) {
                    $contact[] = $value;
                }
            } 
            $messages = DB::select('select * from messages where (sender_id = ? and destination_id = ?) or (sender_id = ? and destination_id = ?)', [$my_id,$id,$id,$my_id]);
            $patiner_details = DB::table('users')
                                ->select('*')
                                ->where('id',$id)
                                ->get();

        return view('dashboard.message', ['messages'=>$messages, 'contact_list'=>$contact, 'patiner_details'=>$patiner_details]);
    }

    public function replymessage(Request $sendMsg)
    {
        $sendMessage = new Message;
        $sendMessage->sender_id=auth()->user()->id;
        $sendMessage->user_id=auth()->user()->id;
        $sendMessage->destination_id=$sendMsg->destination_id;
        $sendMessage->mgs=$sendMsg->message;
        $sendMessage->status='0'; 
        $sendMessage->save();   

        return redirect()->route('show',$sendMsg->destination_id);
    }

    public function sendMessage(Request $sendMsg)
    {
        $sendMessage = new Message;
        $sendMessage->sender_id=auth()->user()->id;
        $sendMessage->user_id=auth()->user()->id;
        $sendMessage->destination_id=$sendMsg->destination;
        $sendMessage->mgs=$sendMsg->message;
        $sendMessage->status='0'; 
        $sendMessage->save();
        $id = Auth::id();
 
        if ($sendMessage) {
            return redirect()->route('message')->with('success','message sent successfully !');
        }else{
            return redirect()->route('message')->with('error','message not sent');
        }
       
    }
}
