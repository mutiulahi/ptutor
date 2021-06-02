<?php

namespace App\Http\Controllers\Userall;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class Dashboard extends Controller
{

    public function index(Request $status) {

        $user_id = Auth::id();
        // dd($user_id);
        $status = DB::table('tutregisters')
            ->select('user_id')
            ->where('user_id', $user_id)
            ->get()->count();
            return view('dashboard.index', compact("status"));
    }

    public function recieve(Request $order_message)
    {
        $id = Auth::id();

        $order_message = DB::table('place__requests')
                            ->join('users', 'place__requests.user_id', '=', 'users.id')
                            ->join('tutregisters', 'place__requests.tutor_id', '=', 'tutregisters.user_id')
                            ->select('users.*', 'place__requests.*')
                            ->where('place__requests.tutor_id',$id)
                            ->get();

        $status = DB::table('tutregisters')
            ->select('user_id')
            ->where('user_id', $id)
            ->get()->count();
            return view('dashboard.recievedOrder', ['order_message' => $order_message],  compact("status"));
        // dd($order_message);
    }

    public function sendOrder(Request $order_message)
    {
        $id = Auth::id();
        // dd($id);
        $order_message = DB::table('place__requests')
                        ->join('users', 'place__requests.tutor_id', '=', 'users.id')
                        ->select('users.*', 'place__requests.*')
                        ->where('user_id', $id)
                        ->get();


        $status = DB::table('tutregisters')
                        ->select('user_id')
                        ->where('user_id', $id)
                        ->get()->count();
            return view('dashboard.sentOrder', ['order_message' => $order_message],  compact("status"));
        // dd($order_message);
    }

    public function acceptOrder(Request $status, $id) {

        $order = DB::table('place__requests')
              ->where('id', $id)
              ->update(['status' => 'accept']);

            //   return view('dashboard.recievedOrder',  compact("status"));
              return redirect()->route('recieved');
            // print_r($order);
    }
    public function rejectOrder(Request $status, $id) {

        $order = DB::table('place__requests')
              ->where('id', $id)
              ->update(['status' => 'not']);

            //   return view('dashboard.recievedOrder',  compact("status"));
              return redirect()->route('recieved');
            // print_r($order);
    }

    public function setting(Request $setting) {

        $id = Auth::id();
        $setting = DB::table('users')
            ->select('*')
            ->where('users.id', $id)
            ->get();

        $status = DB::table('tutregisters')
            ->select('user_id')
            ->where('user_id', $id)
            ->get()->count();

        return view('dashboard.setting', ["setting"=> $setting], compact("status"));
    }

    public function settingUpdate(Request $update) {

        $id = Auth::id();
        $this->validate($update, [
            "fullname"=>"required|max:255",
            "username"=>"required|max:255",
            "phone"=>"required|max:15|min:11",
            "fileName"=>"required|mimes:png,jpg,jfif"
        ]);
        $fname = $update->input('fullname');
        $username = $update->input('username');
            $phone = $update->input('phone');
            $email = $update->input('email');
            $file = $update->file('fileName');

            $passName = $update->file('fileName')->getClientOriginalName();
            $pssID = $email."_".$passName;

            $file->move('images/passport', $pssID);

            $update = DB::table('users')
                ->where('id', $id)
                ->update(['fullname' => $fname, 'username' => $username, 'phone'=> $phone, 'passport'=>$pssID ]);



                return redirect()->route('setting');
    }

    public function adsView()
    {
        $id = Auth::id();
        $status = DB::table('tutregisters')
            ->select('user_id')
            ->where('user_id', $id)
            ->get()->count();

        $ads = DB::table('tutregisters')
            ->select('*')
            ->where('user_id', $id)
            ->get();

        return view('dashboard.ads', ['ads'=> $ads], compact('status'));
    }

    public function adsEdit(Request $getid)

    {
        $ads_id = $getid->input('ads_id');
        // $_SESSION['gig'] = $getid->input('ads_id');
        // dd($ads_id);
        $id = Auth::id();

        $ads = DB::table('tutregisters')
        ->select('*')
        ->where('user_id', $id)
        ->where( 'id', $ads_id)
        ->get();

        return view('tutoringRegister', ['ads'=> $ads], compact('id'));

    }
    public function adsDelet(Request $getid)

    {
        $ads_id = $getid->input('ads_id');
        // $_SESSION['gig'] = $getid->input('ads_id');
        // dd($ads_id);
        $id = Auth::id();

        $ads = DB::table('tutregisters')
        ->select('*')
        ->where('user_id', $id)
        ->where( 'id', $ads_id)
        ->delete();

        return redirect()->route('ads');

    }
    public function adsUpdate(Request $gigstore)
    {
        $id = Auth::id();
        $hid = $gigstore->input('hid');
        // dd($hid);


        $this->validate($gigstore, [
            "subject"=>"required|max:255",
            "categories"=>"required|max:255",
            "title_ads"=>"required",
            "class_type"=>"required",
            "address"=>"required",
            "class_location"=>"required",
            "meeting_point"=>"required",
            "language"=>"required",
            "method"=>"required",
            "about_tutor"=>"required",
            "week"=>"required",
            "month"=>"required",
            "year"=>"required",
        ]);

        $ads = DB::table('tutregisters')
        ->where('user_id', $id)
        ->where('id', $hid)
        ->update(['subject' => $gigstore->subject, 'categories' => $gigstore->categories, 'title_ads'=>$gigstore->title_ads, 'class_type'=>$gigstore->class_type, 'address'=>$gigstore->address,
                            'class_location'=>$gigstore->class_location, 'meeting_point'=>$gigstore->meeting_point, 'language'=>$gigstore->language,  'method'=>$gigstore->method, 'about_tutor'=>$gigstore->about_tutor,
                            'week'=>$gigstore->week, 'month'=>$gigstore->month, 'year'=>$gigstore->year]);

        return redirect()->route('ads');

    }

}
