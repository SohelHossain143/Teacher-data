<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function viewteacheradd()
    {
        return view('teacheradd');
    }


    public function storeteacher(Request $request)
    {
        Teacher::create([
            "name" => $request->name,
            "department" => $request->department,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);

        return redirect()->back();

    }







}
