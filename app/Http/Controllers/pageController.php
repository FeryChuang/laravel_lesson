<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function sd(Request $request)
    {
        $level = 51;
        $version = $request->input('version');

        return view('sd' , [
            'ver' => $version,
            'level' => $level
        ]);
    }
}
