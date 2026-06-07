<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class ApiController extends Controller
{
    function list(){
        return Student::all();
    }
    function addStudent(){
        return "add student";
    }
}
