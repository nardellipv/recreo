<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use recreo\Http\Middleware\Profile;
use recreo\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(Profile::class);
    }
    public function index()
    {
        $students = Student::where('school_id', '=', Auth::user()->school_id)
            ->get();

        return view('lists.students.student', [
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \recreo\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $id)
    {
        $student = Student::findOrFail($id);

        return view('students.profilestudent', [
            'student' => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \recreo\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* $student = Student::find($id);

    return view('students', [
    'student' => $student,
    ]); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \recreo\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        if ($request->first_time == 'SI') {
            $student->fill($request->all())->save();
        } else {
            $student->first_time = 'NO';
            $student->fill($request->all())->save();
        }

        Session::flash('message', 'Perfil editado correctamente');
        return Redirect::to('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \recreo\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        Session::flash('message', 'Alumno <b>' . $student->name . ' ' . $student->lastname . '</b> eliminado correctamente');
        return Redirect::to('students');
    }
}
