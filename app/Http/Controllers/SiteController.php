<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{


    public function home(){
    	return redirect(route('curriculum'));
    }

    public function curriculum(){
    	return view('front.curriculum');
    }

    public function bautizo(){
    	return view('front.bautizo');
    }


}
