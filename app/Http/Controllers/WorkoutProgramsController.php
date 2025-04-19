<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutProgramsController extends Controller
{
    public function getPushupsProgram()
    {
        return view('workout-programs.pushups');
    }

    public function getPullupsProgram()
    {
        return view('workout-programs.pullups');
    }

    public function getSquatsProgram()
    {
        return view('workout-programs.squats');
    }

    public function getAbsProgram()
    {
        return view('workout-programs.abs');
    }
}
