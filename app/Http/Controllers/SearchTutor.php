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

        $searchGIG = Tutregister::where('tutregisters.subject', 'like', "%$subject%")
        ->join('users', 'users.id','=','tutregisters.user_id')
        ->orWhere('tutregisters.meeting_point', 'like', "%$location%")->get();

        // dd($searchGIG);

        return view('tutorSearch',['searchGIGs'=>$searchGIG, 'location'=>$location, 'subject'=>$subject])->with('search', 'sorry tutor not found');

    }
}

