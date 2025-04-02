<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutTrackerController extends Controller
{
    public function index()
    {
        return view('workout-tracker.index');
    }
}
