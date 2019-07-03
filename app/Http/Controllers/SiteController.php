<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class SiteController extends Controller{


    public function home(){
    	return redirect(route('curriculum'));
    }

    public function curriculum(){
    	$works = Work::orderBy('start_date', 'ASC')->get();
    	return view('front.curriculum', compact('works'));
    }

    public function bautizo(){
    	return view('front.bautizo');
    }


}
