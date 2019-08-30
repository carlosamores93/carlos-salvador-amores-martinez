<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    // php artisan make:controller SkillController --resource
    // Route::resource('skill', 'SkillController');

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
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
        $request['slug'] = str_slug($request->title);
        Skill::create($request->all());
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
        $skill = Skill::where('id', $id)->firstOrFail();
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
        $skill = Skill::where('id', $id)->firstOrFail();
        $skill->title = $request->title;
        $skill->slug = str_slug($request->title);
        $skill->status = $request->status;
        $skill->description = $request->description;
        $skill->save();
        return redirect()->route('skill.index')->with('primary', 'Skill updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::where('id', $id)->firstOrFail();
        $skill->delete();
        return redirect()->route('skill.index')->with('dark', 'Skill deleted successfully');
    }
}
