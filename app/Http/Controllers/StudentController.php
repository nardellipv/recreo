<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Jenssegers\Date\Date;
use recreo\Http\Middleware\Enable;
use recreo\Http\Middleware\Profile;
use recreo\Http\Requests\StudentRequest;
use recreo\Student;

class StudentController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

        $this->middleware(Profile::class);

        $this->middleware(Enable::class, ['only' => ['listApprove']]);

        Date::setLocale('es');
    }
    public function index()
    {
        $students = Student::where('school_id', '=', Auth::user()->school_id)
            ->get();

        return view('students.lists.student', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('students.addstudent.student');
    }


    public function store(StudentRequest $request)
    {

        $student = new Student;
        $student->school_id = Auth::user()->school_id;
        $student->fill($request->all())->save();

        Session::flash('message', 'Alumno <b>' . $student->name . ' ' . $student->lastname . '</b> agregado correctamente');
        return Redirect::to('addstudent/students');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.addstudent.edit', compact('student'));
    }
    
     public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        if ($student->level == 1) {
            $total = $request->first_note;
            $student->total_note = $total;
        }

        //si manda solo la primera nota
        if ($student->first_note) {
            $total = $student->first_note + $request->second_note;
            $student->total_note = $total;
        }

        //si manda solo la segunda nota
        if ($student->second_note) {
            $total = $student->second_note + $request->first_note;
            $student->total_note = $total;
        }

        //si manda las 2 notas al mismo tiempo
        if ($request->first_note and $request->second_note) {
            $total = $request->second_note + $request->first_note;
            $student->total_note = $total;
        }

        if ($request->first_time == 'SI') {
            $student->fill($request->all())->save();
        } else {
            $student->first_time = 'NO';
            $student->fill($request->all())->save();
        }

        Session::flash('message', 'Perfil <b>' . $student->name . ' ' . $student->lastname . '</b> editado correctamente');
        return Redirect::to('students');
    }

    public function listApprove()
    {

        $students = Student::where('school_id', '=', Auth::user()->school_id)
            ->where('total_note', '>=', 60)
            ->get();

        return view('students.lists.approve', [
            'students' => $students,
        ]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        Session::flash('message', 'Alumno <b>' . $student->name . ' ' . $student->lastname . '</b> eliminado correctamente');
        return Redirect::to('students');
    }
}
