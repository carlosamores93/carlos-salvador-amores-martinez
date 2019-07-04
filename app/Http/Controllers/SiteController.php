<?php

namespace App\Http\Controllers;

use App\MiniSkill;
use App\Skill;
use App\User;
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
    	$user = User::where('id', 1)->first();
        if ($this->existsSkillsWorksUser($works, $skills, $miniskills, $user)) {
           return view('front.curriculum-vitae', compact('works', 'skills', 'miniskills', 'user'));
        }else{
    	   return view('front.curriculum');
        }
    }

    public function bautizo(){
    	return view('front.bautizo');
    }

    private function existsSkillsWorksUser($works, $skills, $miniskills, $user){
        return isset($works) && ($works->count() > 0) && isset($skills) && ($skills->count() > 0) && isset($miniskills) && ($miniskills->count() > 0) && isset($user);
    }


}
