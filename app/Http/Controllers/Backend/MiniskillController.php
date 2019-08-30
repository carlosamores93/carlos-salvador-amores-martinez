<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\MiniSkill;
use Illuminate\Http\Request;

class MiniskillController extends Controller
{
    // php artisan make:controller MiniskillController --resource
    // Route::resource('miniskill', 'MiniskillController');

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
        $miniskills = MiniSkill::all();
        return view('back.miniskill.index', compact('miniskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.miniskill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MiniSkill::create($request->all());
        return redirect()->route('miniskill.index')->with('success', 'MiniSkill created successfully');
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
        $miniskill = MiniSkill::where('id', $id)->firstOrFail();
        return view('back.miniskill.edit', compact('miniskill'));
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
        $miniskill = MiniSkill::where('id', $id)->firstOrFail();
        $miniskill->title = $request->title;
        $miniskill->progress = $request->progress;
        $miniskill->status = $request->status;
        $miniskill->save();
        return redirect()->route('miniskill.index')->with('primary', 'MiniSkill updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $miniskill = MiniSkill::where('id', $id)->firstOrFail();
        $miniskill->delete();
        return redirect()->route('miniskill.index')->with('dark', 'MiniSkill deleted successfully');
    }
}
