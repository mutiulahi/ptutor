<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state_lga;

class Index extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function autocomplete(Request $location)
    {
        $datas = state_lga::select("location")
            ->where('location',"LIKE","%{$location->location}")
            ->get();
            
    $response = array();
    foreach ($datas as $data) {
        $response[] = $data->location;
    }
    return response()->json($response);
    } 
}
