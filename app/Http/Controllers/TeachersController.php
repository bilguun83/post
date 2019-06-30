<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function export()
    {
        return view('teachers.create');
    }
}
