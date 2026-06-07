<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $req){
        //echo "upload function called";
        $path = $req->file('file')->store('public');
        echo "file Uploaded Successfully";
    }
}
