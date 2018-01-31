<?php

namespace recreo\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use recreo\Http\Middleware\Profile;
use recreo\School;
use recreo\Student;
use recreo\Teacher;
use recreo\User;

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

        $this->middleware(Profile::class);
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

        $teachers = Teacher::where('school_id', '=', Auth::user()->school_id)->get();

        $school = School::where('id', '=', Auth::user()->school_id)->first();

        //contadores
        $teachersCount = Teacher::where('school_id', '=', Auth::user()->school_id)
            ->count();

        $studentsCount = Student::where('school_id', '=', Auth::user()->school_id)
            ->count();

        $studentsCountLevel1 = Student::where('school_id', '=', Auth::user()->school_id)
            ->where('level', '=', 1)
            ->count();

        $studentsCountLevel2 = Student::where('school_id', '=', Auth::user()->school_id)
            ->where('level', '=', 2)
            ->count();

        return view('home', [
            'students' => $students,
            'school' => $school,
            'teachers' => $teachers,
            'studentsCount' => $studentsCount,
            'teachersCount' => $teachersCount,
            'studentsCountLeve1' => $studentsCountLevel1,
            'studentsCountLeve2' => $studentsCountLevel2,
        ]);

    }

    public function faq()
    {
        return view('faq.faq');
    }

}
