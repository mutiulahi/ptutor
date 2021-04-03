<?php

namespace App\Http\Controllers;

use App\Models\Tutregister;
use Illuminate\Http\Request;

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
      
        //     Tutregister::create([
        //     'categories' => $gigstore->categories,
        //     'user_id' =>auth()->id(),
        //     'other_skill' => $gigstore->other_skill,
        //     'class_type' => $gigstore->class_type,
        //     'title_ads' => $gigstore->title_ads,
        //     'background' => $gigstore->background,
        //     'teaching_mathod' => $gigstore->teaching_mathod,
        //     'cv' => $gigstore->cv,
        //     'address' => $gigstore->address,
        //     'meeting_point' => $gigstore->meeting_point,
        //     'language' => $gigstore->language,
        //     'parhrs' => $gigstore->parhrs,
        //     'parfivehrs' => $gigstore->parfivehrs,
        //     'morefivehrs' => $gigstore->morefivehrs,
        // ]);

        $createGIG = new Tutregister;
        $createGIG->categories=$gigstore->categories;
        $createGIG->other_skill=$gigstore->other_skill;
        $createGIG->user_id=auth()->user()->id;
        $createGIG->class_type=$gigstore->class_type;
        $createGIG->title_ads=$gigstore->title_ads;
        $createGIG->background=$gigstore->background;
        $createGIG->teaching_mathod=$gigstore->teaching_mathod;
        // $createGIG->cv=$gigstore->cv;
        $createGIG->address=$gigstore->address;
        $createGIG->meeting_point=$gigstore->meeting_point;
        $createGIG->language=$gigstore->language;
        $createGIG->parhrs=$gigstore->parhrs;
        $createGIG->parfivehrs=$gigstore->parfivehrs;
        $createGIG->morefivehrs=$gigstore->morefivehrs;
        $createGIG->save();

        return back();

        // dd($gigstore->input());
    }
}
