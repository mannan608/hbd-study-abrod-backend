<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();
        $user->can('student.list') || abort(403);


        $user = $request->user();

        $user->can('student.list') || abort(403);

        $students = Student::with('user:id,name,email,phone,avatar,status')
            ->latest()
            ->paginate(10);

        // return $students;
        return view('backend.pages.students.index', compact('students'));
    }

   public function show(string $role, Request $request, Student $student)
{
    $user = $request->user();

    $user->can('student.view') || abort(403);

    $student->load('user');

    return view('backend.pages.students.show', compact('student'));
}
}
