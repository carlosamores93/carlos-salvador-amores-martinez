<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Skills as SkillRepository;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SkillController extends Controller
{

    public $skillRepository;

    // php artisan make:controller SkillController --resource
    // Route::resource('skill', 'SkillController');

    public function __construct(SkillRepository $repository)
    {
        $this->middleware('auth');
        $this->skillRepository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$skills = Skill::all();
        $skills = $this->skillRepository->getSkills();
        return view('back.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = $this->skillRepository->storeSkill($request);
        //$request['slug'] = str_slug($request->title);
        //Skill::create($request->all());
        Cache::forget('skills.all');
        return redirect()->route('skill.index')->with('success', 'Skill created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = $this->skillRepository->getSkill($id);
        //$skill = Skill::where('id', $id)->firstOrFail();
        return view('back.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $skill = $this->skillRepository->updateSkill($request, $id);
        /*$skill = Skill::where('id', $id)->firstOrFail();
        $skill->title = $request->title;
        $skill->slug = str_slug($request->title);
        $skill->status = $request->status;
        $skill->description = $request->description;
        $skill->save();
        */
        Cache::forget('skills.all');
        return redirect()->route('skill.index')->with('primary', 'Skill with id:'.$skill->id.' updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$skill = Skill::where('id', $id)->firstOrFail();
        //$skill->delete();
        $skill = $this->skillRepository->destroySkill($id);
        Cache::forget('skills.all');
        return redirect()->route('skill.index')->with('dark', 'Skill '.$skill->title.' deleted successfully');
    }
}
