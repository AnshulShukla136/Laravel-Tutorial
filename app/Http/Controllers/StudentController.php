<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent($id)
    {
        $students = [
            1 => ["name" => "Radha", "course" => "B.Tech", "city" => "Punjab"],
            2 => ["name" => "Shyam", "course" => "M.Tech", "city" => "UP"],
            3 => ["name" => "Raman", "course" => "Ph.D", "city" => "Bihar"]
        ];
        if (array_key_exists($id, $students)) {
            $student = $students[$id];
            return view('student', compact('student'));
        } else {
            return view('student')->with('error', 'Student not found');
        }
    }
}
