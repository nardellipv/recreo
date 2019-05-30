<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use recreo\Student;
use recreo\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.admin', [
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->password == null) {
            $user->fill($request->except('password'))->save();
        } else {
            $user->name = $request['name'];
            $user->lastname = $request['lastname'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            $user->update();
        }

        Session::flash('message', 'Perfil editado correctamente');
        return Redirect::to('admin/admin');

    }


}
