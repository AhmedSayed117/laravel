<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function shownews($id){
        return view('Front/home')->with('data',$id);
    }
}
