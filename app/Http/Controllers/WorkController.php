<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    // php artisan make:controller WorkController --resource
    // Route::resource('work', 'WorkController');

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
        $works = Work::orderBy('start_date', 'ASC')->get();
        return view('back.work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = str_slug($request->company);
        Work::create($request->all());
        $this->storeImgForProduct($request);
        return redirect()->route('work.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::where('id', $id)->firstOrFail();
        return view('back.work.edit', compact('work'));
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
        $work = Work::where('id', $id)->firstOrFail();
        $work->company = $request->company;
        $work->job = $request->job;
        $work->slug = str_slug($request->company);
        $work->status = $request->status;
        $work->description = $request->description;
        $work->start_date = $request->start_date;
        $work->end_date = $request->end_date;
        $work->save();
        $this->storeImgForProduct($request);
        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::where('id', $id)->firstOrFail();
        $work->delete();
        return redirect()->route('work.index');
    }

    private function storeImgForProduct(Request $request)
    {
        if($request->file('file')){
            $image_name = str_slug($request->company) .'.' . $request->file('file')->getClientOriginalExtension();
            if (env('APP_ENV') == 'local') {
                $request->file('file')->move(base_path() . '/public/img/', $image_name);
            }else{
                $request->file('file')->move(base_path() . '/public_html/img/', $image_name);
                //$request->file('file')->move(base_path() . '/public/img/', $image_name);
            }
        }
    }
}
