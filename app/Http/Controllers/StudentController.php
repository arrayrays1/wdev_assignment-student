<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index($id)
    {
        // fetch the student by ID
        $student = Student::find($id);

        // return the view 'list' and pass the student data
        return view('list', ['student' => $student->toArray()]);
    }

    public function showAll()
    {
        // fetch all 150 students from the database
        $students = Student::all();

        // return a new view file named 'all_students'
        return view('all_students', ['students' => $students]);
    }

}