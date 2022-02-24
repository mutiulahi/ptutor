<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutregister;
use Illuminate\Support\Facades\DB;
class SearchTutor extends Controller
{
    //
    public function index(Request $searchDetail)
    {
        // dd($searchDetail->input('age'));
        // dd($searchDetail->only('location','subject'));
        $location= $searchDetail->input('location');
        $subject= $searchDetail->input('subject');
        // dd($subject);

        $searchGIG = Tutregister::where('subject', 'like', "%$subject%")
        ->join('users', 'users.id','=','tutregisters.user_id')
        ->orwhere('meeting_point', 'like', "%$location%")->get();


        return view('tutorSearch',['searchGIGs'=>$searchGIG]);

    }
}

