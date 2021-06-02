<?php

namespace App\Http\Controllers;

use App\Models\Tutregister;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutoringRegistration extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('tutoringRegister');
    }

    public function storeGIG(Request $gigstore )
    {
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

        $createGIG = new Tutregister;
        $createGIG->subject=$gigstore->subject;
        $createGIG->categories=$gigstore->categories;
        $createGIG->user_id=auth()->user()->id;
        $createGIG->title_ads=$gigstore->title_ads;
        $createGIG->class_type=$gigstore->class_type;
        $createGIG->address=$gigstore->address;
        $createGIG->class_location=$gigstore->class_location;
        $createGIG->meeting_point=$gigstore->meeting_point;
        $createGIG->language=$gigstore->language;
        $createGIG->method=$gigstore->method;
        $createGIG->about_tutor=$gigstore->about_tutor;
        $createGIG->week=$gigstore->week;
        $createGIG->month=$gigstore->month;
        $createGIG->year=$gigstore->year;
        $createGIG->status='active';
        $createGIG->save();

        $id = auth()->user()->id;
        $createGIG = DB::table('users')
                ->where('id', $id)
                ->update(['status' => 'Tutor']);


        return redirect()->route('dashboard')->with('Account_Creation','Congratulation Your Lession has been created');
        // return back(); view('dashboard.index')

        // dd($gigstore->input());
    }
}
