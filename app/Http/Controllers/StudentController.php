<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json(Student::all());
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:15|unique:students,phone',
    ]);

    $student = Student::create($request->all());
    return response()->json(['message' => 'Student added successfully','Student'=>$student]);
}


public function show($id)
{
    $student = Student::find($id);

    if (!$student) {
        return response()->json(['message' => 'Student not found'], 404);
    }

    return response()->json($student);
}

public function getData(){
return view('getData');
}

}
