<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

public function boot(){
 return view('bootstrap');
}

public function Studentget(){
    return view('studentViewData');
}





    // public function getResult(Request $request)
    // {
    //     // Input Validation
    //     $request->validate([
    //         'name' => 'required|string',
    //         'mobile' => 'required|digits:10',
    //         'captcha' => 'required'
    //     ]);

    //     // Session captcha check
    //     if ($request->captcha !== session('captcha_code')) {
    //         return response()->json(['error' => 'Captcha incorrect! Try again.']);
    //     }

    //     // Database match
    //     $student = Scholarship::where('name', $request->name)
    //                           ->where('mobile', $request->mobile)
    //                           ->first();

    //     if ($student) {
    //         return response()->json(['success' => true, 'redirect' => route('result.view', ['id' => $student->id])]);
    //     } else {
    //         return response()->json(['error' => 'Name or Mobile Number is incorrect!']);
    //     }
    // }

    // public function showResult($id)
    // {
    //     $student = Scholarship::findOrFail($id);
    //     return view('studentViewData', compact('student'));
    // }

    public function generateCaptcha()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $captcha = substr(str_shuffle($characters), 0, 6);
        Session::put('captcha_code', $captcha);
        return response()->json(['captcha' => $captcha]);
    }

    // Result Check Karega
    public function getResult(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|digits:10',
            'captcha' => 'required'
        ]);

        // Session se Captcha Check Karein
        if ($request->captcha !== Session::get('captcha_code')) {
            return response()->json(['error' => 'Captcha incorrect! Try again.']);
        }

        // Database check karein
        $student = Scholarship::where('name', $request->name)
                              ->where('mobile', $request->mobile)
                              ->first();

        if ($student) {
            return response()->json(['success' => true, 'redirect' => route('result.view', ['id' => $student->id])]);
        } else {
            return response()->json(['error' => 'Name or Mobile Number is incorrect!']);
        }
    }

    // Result Show Karega
    public function showResult($id)
    {
        $student = Scholarship::findOrFail($id);
        return view('result', compact('student'));
    }

}


