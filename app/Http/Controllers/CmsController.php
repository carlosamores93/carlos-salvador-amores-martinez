<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('back.home');
    }

    public function profile()
    {
        return view('back.profile');
    }

    public function updateProfile(Request $request)
    {
        Auth::user()->update($request->all());
        $this->storeImgForProduct($request);
        return redirect()->back();
    }

    private function storeImgForProduct(Request $request)
    {
        if($request->file('file')){
            $image_name = str_slug($request->name) . '-'. str_slug($request->lastname) .'.' . $request->file('file')->getClientOriginalExtension();
            if (env('APP_ENV') == 'local') {
                $request->file('file')->move(base_path() . '/public/img/', $image_name);
            }else{
                $request->file('file')->move(base_path() . '/public_html/img/', $image_name);
                $request->file('file')->move(base_path() . '/public/img/', $image_name);
            }
        }
    }

}
