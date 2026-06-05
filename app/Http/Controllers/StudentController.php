<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function users(){
        $users = DB::select('select * from users where id = 1') ;
        return view('users',['xyz'=>$users]);
    }
}
