<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use recreo\Http\Requests\SchoolRequest;
use recreo\Location;
use recreo\School;
use recreo\User;

class SchoolController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        $school = School::where('schools.id', '=', Auth::user()->school_id)
            ->select('schools.id as schoolId', 'schools.name as nameSchool', 'schools.address', 'schools.postal_code', 'schools.phone',
                'schools.type', 'schools.director1', 'schools.director2', 'schools.email', 'schools.first_time',
                'schools.city_id', 'schools.location_id', 'cities.id', 'cities.name as nameCity')
            ->join('cities', 'schools.city_id', '=', 'cities.id')
            ->first();

        $locations = Location::select('locations.name as nameLocations', 'locations.id')
            ->join('schools', 'schools.city_id', '=', 'locations.province_id')
            ->join('users', 'users.school_id', '=', 'schools.id')
            ->where('schools.id', '=', Auth::user()->school_id)
            ->orderBy('nameLocations')
            ->get();

        $locationsUser = Location::where('id', '=', $school->location_id)
            ->first();

        return view('profile.school', [
            'school' => $school,
            'locations' => $locations,
            'locationsUser' => $locationsUser,
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
     * @param  \recreo\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::findOrFail($id);

        return view('school', [
            'school' => $school,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \recreo\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* $school = School::find($id);

    return view('school', [
    'school' => $school,
    ]); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \recreo\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolRequest $request, $id)
    {
        $school = School::find($id);
        $school->active = 1;
        $school->fill($request->all())->save();

        Session::flash('message', 'Perfil editado correctamente');
        return Redirect::to('school');

        /* return redirect()->URL('school', $school->schoolId)
    ->with('message', 'Perfil editado correctamente'); */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \recreo\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
