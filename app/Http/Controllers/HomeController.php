<?php

namespace recreo\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use recreo\School;
use recreo\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('school_id', '=', Auth::user()->school_id)
            ->paginate(10);

        $school = School::where('id', '=', Auth::user()->school_id)->first();

        return view('home', [
            'students' => $students,
            'school' => $school,
        ]);
    }
}
