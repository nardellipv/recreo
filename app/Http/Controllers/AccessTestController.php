<?php

namespace recreo\Http\Controllers;

use Illuminate\Http\Request;
use recreo\AccessTest;

class AccessTestController extends Controller
{
    public function index()
    {
        return view('access.index');
    }

    public function permition(Request $request)
    {
        $access = AccessTest::where('email', $request['email'])
            ->first();

        if(!$access){
            return view('access.noDownload');
        }else{
            return view('access.download', compact('access'));
        }

    }
}
