<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function createStudentProfile(Request $request)
    {
        $val = Validator::make($request->all(), [
            'matric_no' => 'required|string|min|5',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:4'
        ])->validate();

        Student::create([
            'matric_no' => $request->matric_no,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'Student profilehas been created successfuly');
    }
}
