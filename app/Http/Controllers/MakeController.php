<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeController extends Controller
{
    public function index()
    {
        $users = DB::table('test2')->get();

        return view('userform', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|regex:/^[A-Za-z\s]+$/|min:3|max:20',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
        ], [
            'name.regex' => 'Name should contain only alphabets and spaces.',
            'phone.digits' => 'Phone number must be exactly 10 digits.',
        ]);
        DB::table('test2')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/userform');
    }

    public function delete($id)
    {
        DB::table('test2')
            ->where('id', $id)
            ->delete();

        return redirect('/userform');
    }
}
