<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\MiniSkill;
use App\Skill;
use App\User;
use App\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CurriculumVitaeController extends Controller
{



    public function index()
    {
        $works = $this->getAllWorks();
        $skills = $this->getAllSkills();
        $miniskills = $this->getAllMiniSkills();
        $user = $this->getUser();
        if (Cache::has('works.all')) {
            return view('front.curriculum-vitae', compact('works', 'skills', 'miniskills', 'user'));
        } elseif ($this->existsSkillsWorksUser($works, $skills, $miniskills, $user)) {
            $this->parseStartEndDateWorks($works);
            if (env('CACHE_DRIVER') === 'redis') {
                Cache::tags('works')->put('works.all', $works, 3600);
            } else {
                Cache::put('works.all', $works, 3600);
            }
            return view('front.curriculum-vitae', compact('works', 'skills', 'miniskills', 'user'));
        } else {
            Cache::flush();
            return view('front.curriculum');
        }
    }

    private function existsSkillsWorksUser($works, $skills, $miniskills, $user)
    {
        return isset($works) && ($works->count() > 0) && isset($skills) && ($skills->count() > 0) && isset($miniskills) && ($miniskills->count() > 0) && isset($user);
    }

    private function getAllWorks()
    {
        if (Cache::has('works.all')) {
            $works = Cache::get('works.all');
        } else {
            $works = Work::where('status', 1)->orderBy('start_date', 'ASC')->get();
        }
        return $works;
    }

    private function getAllSkills()
    {
        // Verifica automaitcamente si existe, sino lo actualiza
        $skills = Cache::remember('skills.all', 3600, function () {
            return Skill::where('status', 1)->inRandomOrder()->get();
        });

        return $skills;
    }

    private function getAllMiniSkills()
    {
        if (Cache::has('miniskills.all')) {
            $miniskills = Cache::get('miniskills.all');
        } else {
            $miniskills = MiniSkill::where('status', 1)->orderBy('progress', 'DESC')->get();
            Cache::put('miniskills.all', $miniskills, 3600);
        }
        return $miniskills;
    }

    private function getUser()
    {
        /*if (Cache::has('user')) {
            $user = Cache::get('user');
        }else{
            $user = User::where('id', 1)->first();
            Cache::put('user', $user, 3600);
        }*/
        $user = Cache::rememberForever('user', function () {
            return User::where('id', 1)->first();
        });

        return $user;
    }

    private function parseStartEndDateWorks(&$works)
    {
        foreach ($works as $w) {
            if (isset($w->start_date)) {
                $w->start_date = ucfirst(Carbon::createFromFormat('Y-m-d H:i:s', $w->start_date)->locale('es')->isoFormat('MMMM YYYY'));
            }
            if (isset($w->end_date)) {
                $w->end_date = ucfirst(Carbon::createFromFormat('Y-m-d H:i:s', $w->end_date)->locale('es')->isoFormat('MMMM YYYY'));
            } else {
                $w->end_date = 'Actualmente';
            }
        }
    }
}
