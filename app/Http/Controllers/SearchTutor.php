<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchTutor extends Controller
{
    //
    public function index(Request $searchDetail)
    {
        // dd($searchDetail->only('location','subject'));

        $searchGIG = DB::select('select * from tutregisters');
        return view('tutorSearch',['searchGIGs'=>$searchGIG]);
    }
}
