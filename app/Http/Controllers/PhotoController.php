<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photoUpload() {

        return view('pages.PhotoUploadPage');
    }
}
