<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use recreo\Http\Middleware\Profile;
use recreo\Teacher;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(Profile::class);
    }
    public function index()
    {
        $teachers = Teacher::where('school_id', '=', Auth::user()->school_id)
            ->get();

        return view('lists.teachers.teacher', [
            'teachers' => $teachers,
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
     * @param  \recreo\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teachers.profileteacher');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \recreo\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \recreo\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $teacher = Teacher::findOrFail($id);
        if ($request->first_time == 'SI') {
            $teacher->fill($request->all())->save();
        } else {
            $teacher->first_time = 'NO';
            $teacher->fill($request->all())->save();
        }

        Session::flash('message', 'Perfil editado correctamente');
        return Redirect::to('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \recreo\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        Session::flash('message', 'Alumno <b>' . $teacher->name . ' ' . $teacher->lastname . '</b> eliminado correctamente');
        return Redirect::to('teachers');
    }
}
