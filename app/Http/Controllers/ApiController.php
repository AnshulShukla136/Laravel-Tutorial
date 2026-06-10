<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class ApiController extends Controller
{
    function list(){
        $users = Student::all();
        return view('students', ['users' => $users]);
    }
    function addStudent(){
        return "add student";
    }
}
