<?php

namespace App\Http\Controllers;

use App\MiniSkill;
use App\Skill;
use App\Work;
use Illuminate\Http\Request;

class SiteController extends Controller{


    public function home(){
    	return redirect(route('curriculum'));
    }

    public function curriculum(){
        $works = Work::where('status', 1)->orderBy('start_date', 'ASC')->get();
        $skills = Skill::where('status', 1)->inRandomOrder()->get();
    	$miniskills = MiniSkill::where('status', 1)->orderBy('progress', 'DESC')->get();
    	return view('front.curriculum', compact('works', 'skills', 'miniskills'));
    }

    public function bautizo(){
    	return view('front.bautizo');
    }


}
