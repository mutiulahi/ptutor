<?php

namespace App\Http\Controllers;
use App\Models\Place_Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class General extends Controller
{
    //
    public function index(Request $Detail, $id)
    {
        // $id = $Detail->input('id');
        // $p = $Detail->input('id');
        // dd($id);

        $Detail = DB::table('users')
            ->join('tutregisters', 'tutregisters.user_id', '=', 'users.id')
            ->select('users.*', 'tutregisters.*')
            ->where('tutregisters.user_id', $id)
            ->get();

        $review = DB::table('reviews')
            ->join('users', 'users.id', '=', 'reviews.user_id')
            ->select('*')
            ->where('tutor_id', $id)
            ->get();

            $ADD = $review->sum('rate');
            $COUNTS = $review->count('rate');
            $rate = $ADD/$COUNTS;
            return view('tutorDetail', ['Detail' => $Detail, 'review'=>$review], compact('rate'));
    }



    public function checkout(Request $Checkout)
    {
        $Checkout = DB::table('users')
            ->join('tutregisters', 'tutregisters.user_id', '=', 'users.id')
            ->select('users.*', 'tutregisters.*')
            ->get();
        return view('checkOut', ['Checkout' => $Checkout]);
    }

    public function order(Request $order_data)
    {
            $order = new Place_Request;
            $order->tutor_id=$order_data->tutor_id;
            $order->user_id=auth()->user()->id;
            $order->request_message=$order_data->message;
            $order->status='pending';
            $order->save();

            // $mail = $order_data->email;
            $data = ['name'=>"Tesleem", ];
            $users['to'] = $order_data->email;
            
            Mail::send('mail', $data, function ($message) use ($users) {
                $message->sender('john@johndoe.com', 'John Doe');
                $message->to($users['to']);
                $message->subject('Recieved Order');
            });

            return redirect()->back();
    }
    // public function getStatus(Request $order_data)
    // {
    //         // $order = new Place_Request;
    //         // $order->tutor_id=$order_data->tutor_id;
    //         // $order->user_id=auth()->user()->id;
    //         // $order->request_message=$order_data->message;
    //         // $order->save();
    //         return view('dashboard.recievedOrder');
    // }
}
