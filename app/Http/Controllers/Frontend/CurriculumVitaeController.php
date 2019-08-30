<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\MiniSkill;
use App\Skill;
use App\User;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CurriculumVitaeController extends Controller{



    public function index(){
        $works = Work::where('status', 1)->orderBy('start_date', 'ASC')->get();
        $skills = Skill::where('status', 1)->inRandomOrder()->get();
        $miniskills = MiniSkill::where('status', 1)->orderBy('progress', 'DESC')->get();
    	$user = User::where('id', 1)->first();
        if ($this->existsSkillsWorksUser($works, $skills, $miniskills, $user)) {
            foreach ($works as $w) {
                if(isset($w->start_date)) {
                    $w->start_date = ucfirst(Carbon::createFromFormat('Y-m-d H:i:s', $w->start_date)->locale('es')->isoFormat('MMMM YYYY'));
                }
                if(isset($w->end_date)) {
                    $w->end_date = ucfirst(Carbon::createFromFormat('Y-m-d H:i:s', $w->end_date)->locale('es')->isoFormat('MMMM YYYY'));
                }else{
                    $w->end_date = 'Actualmente';
                }
            }
            return view('front.curriculum-vitae', compact('works', 'skills', 'miniskills', 'user'));
        }else{
    	   return view('front.curriculum');
        }
    }

    private function existsSkillsWorksUser($works, $skills, $miniskills, $user){
        return isset($works) && ($works->count() > 0) && isset($skills) && ($skills->count() > 0) && isset($miniskills) && ($miniskills->count() > 0) && isset($user);
    }


}
