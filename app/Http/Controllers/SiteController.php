<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{


    public function curriculum_vitae(){
    	return view('frontend.layouts.curriculum_vitae');
    }
}
