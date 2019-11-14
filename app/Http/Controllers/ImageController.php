<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('profile_image')) {
            //get filename with extension
            $filenamewithextension = $request->file('profile_image')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
             $extension = $request->file('profile_image')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            //Upload File
            $request->file('profile_image')->storeAs('public/profile_images', $filenametostore);
            if (!file_exists(public_path('storage/profile_images/crop'))) {
                mkdir(public_path('storage/profile_images/crop'), 0755);
            }
            // crop image
            $img = Image::make(public_path('storage/profile_images/'.$filenametostore));
            $croppath = public_path('storage/profile_images/crop/'.$filenametostore);
            $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
            $img->save($croppath);
            // you can save crop image path below in database
            $path = asset('storage/profile_images/crop/'.$filenametostore);
            return redirect('image')->with(['success' => "Image cropped successfully.", 'path' => $path]);
        }
    }
}
