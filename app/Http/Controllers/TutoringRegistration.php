<?php

namespace App\Http\Controllers;

use App\Models\Tutregister;
use App\Models\User;
use App\Models\state_lga;
use Database\Seeders\state_location;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

// Http

class TutoringRegistration extends Controller
{
    // https://locus.fkkas.com/api/states 
    //https://locus.fkkas.com/api/regions/lagos  LOCATION API


    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }



    public function index() 
    {

        // $response_state = Http::get('https://locus.fkkas.com/api/states');
        // $raw_state =  json_decode($response_state, true);
        // foreach ($raw_state['data'] as $state) {
        //     // print_r ($state['name']);
        //     $response_LGA = Http::get("https://locus.fkkas.com/api/regions/".$state['alias']);
        //     $raw_LGA = json_decode($response_LGA, true);
        //     foreach ($raw_LGA['data'] as $lga) {
        //         $location[] = $state['name'].' '.$lga['name'];
        //     }
        // }

        $state_lga = DB::table('state_lgas')->select('*')->get();
        
        return view('tutoringRegister', ['state_lga' => $state_lga]);
        
    }

    public function autocomplete(Request $request)
    {  
        return state_lga::select('location')
            ->where('location', 'like', "%{$request->term}%")
            ->pluck('location'); 
    } 

    public function storeGIG(Request $gigstore )
    {
        $this->validate($gigstore, [
            "subject"=>"required|max:255",
            "categories"=>"required|max:255",
            "title_ads"=>"required|max:80",
            "class_type"=>"required",
            "address"=>"required",
            "location"=>"required",
            "class_location"=>"required",
            "language"=>"required",
            "method"=>"required|min:200",
            "about_tutor"=>"required|min:200",
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
        $createGIG->meeting_point=$gigstore->location;
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
