<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function create()
    {
        return view('upload');
    }
    public function upload(Request $request)
    {
        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images';
        $request->photo->move($path, $file_name);
        echo $file_name."<br>";
        return 'Uploaded';
    }
}
