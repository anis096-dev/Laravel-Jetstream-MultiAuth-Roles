<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function index()
    {
        return view('Patient.lessons.index');
    }

}
