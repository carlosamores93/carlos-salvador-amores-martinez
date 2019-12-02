<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\MiniSkill;
use App\Skill;
use App\User;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller{


    public function home(){
    	//return redirect(route('curriculum'));
    	$imagen = 'curriculum/img/guayaquil.jpg';
    	//$imagen = 'curriculum/img/oriente.JPG';
    	return view('front.home', compact('imagen'));
    }

    public function bautizo(){
    	return view('front.bautizo');
    }

}
