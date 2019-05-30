<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use recreo\Student;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('admin.studentlist', compact('students'));
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('admin.editstudent', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fill($request->all())->save();

        Session::flash('message', 'Perfil editado correctamente');
        return back();
    }
}
