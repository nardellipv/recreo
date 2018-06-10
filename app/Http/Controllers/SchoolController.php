<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use recreo\Http\Requests\SchoolRequest;
use recreo\Location;
use recreo\School;


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
                'schools.type', 'schools.director1', 'schools.director2', 'schools.email', 'schools.first_time', 'schools.sede',
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

    public function show($id)
    {
        $school = School::findOrFail($id);

        return view('school', [
            'school' => $school,
        ]);
    }


    public function update(SchoolRequest $request, $id)
    {
        $school = School::find($id);
        $school->active = 'SI';
        $school->fill($request->all())->save();

        Session::flash('message', 'Perfil editado correctamente');
        return Redirect::to('school');
    }

    public function showUploadFile()
    {
        return view('students.exam.upload');
    }

    public function UploadFile(Request $request)
    {
        $school = School::where('id', Auth::user()->id)
            ->first();
        $extension = $request->file->getClientOriginalExtension();

        if ($request->hasFile('file') && $extension == 'pdf') {
            //crear link simbolico en cpanel
            //ln -s /home/pablon/mikant/storage /home/pablon/public_html/storage

            request()->file->storeAs('exam/'.$school->name, request()->file->getClientOriginalName());
//            $cookie = Cookie::make('fileupdate', 'yes');
        } else {
            Session::flash('error', 'El formato aceptado solo es PDF.');
            return back();
        }

        Session::flash('message', 'Exámen subido correctamente');
        return back();
    }

}
