<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser($name){
        return view('viewPage', ['name'=>$name]);
    }
    function aboutUser(){
        return "this is about of anshul shukla";
    }

}
