<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        {
            $students = Student::all();
            return view('profile', ['students' => $students]);
        }
    } 

    public function activities()
    {
        return view('activities');
    }
}
