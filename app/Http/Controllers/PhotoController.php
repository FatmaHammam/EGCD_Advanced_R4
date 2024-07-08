<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function photo()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $photo = new Photo;
        $photo->filename = $request->file('photo')->getClientOriginalName();
        // $photo->mime_type = $request->file('photo')->getClientMimeType();
        $photo->image_data = file_get_contents($request->file('photo')->getPathname());
        $photo->save();
        return redirect()->back()->with('success', 'Photo uploaded successfully!');  
    }
}
