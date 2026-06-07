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
    function addUser(Request $req){

        $req->validate([
            'username' => 'required | min:3 | max:10',
            'useremail' => 'required | email' ,
            'usercity' => 'required | max:15',
            'upload' => 'required|file|mimes:pdf,png|max:5120'
        ]);
        return $req;
    }
    function login(Request $req){
        $req->session()->put('user', $req->input('user'));
        // echo session('user');
        return redirect('profile');
    }
}
