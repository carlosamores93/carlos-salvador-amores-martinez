<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{


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
        $notices = Notice::all();
        return view('back.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Notice::create($request->all());
        return redirect()->route('notice.index')->with('success', 'Notice created successfully');
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
        $notice = Notice::where('id', $id)->firstOrFail();
        return view('back.notice.edit', compact('notice'));
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
        $notice = Notice::where('id', $id)->firstOrFail();
        $notice->name = $request->name;
        $notice->subject = $request->subject;
        $notice->message = $request->message;
        $notice->status = $request->status;
        $notice->repeat = $request->repeat;
        $notice->date = $request->date;
        $notice->save();
        return redirect()->route('notice.index')->with('primary', 'Notice updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::where('id', $id)->firstOrFail();
        $notice->delete();
        return redirect()->route('notice.index')->with('dark', 'Notice deleted successfully');
    }
}
