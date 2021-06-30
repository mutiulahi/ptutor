<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class AddReview extends Controller
{
    //
    public function Review(Request $addreview)
    {
      $id =   auth()->user()->id;
        
        $Savereview = new Review;
        $Savereview->user_id=auth()->user()->id;
        $Savereview->tutor_id=$addreview->tutor_id;
        $Savereview->rate=$addreview->rating;
        $Savereview->comment=$addreview->comment;
        $Savereview->save();

        return redirect()->route('sendOrder')->with('review','Review was sent successfullly');
        
    }
}
