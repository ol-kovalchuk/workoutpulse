<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreWorkoutRequest;
use App\Models\WorkoutTracker;

class WorkoutTrackerController extends Controller
{
    public function index()
    {
        return view('workout-tracker.index');
    }

    public function getGeneralWorkout()
    {
        return view('workout-tracker.general-workout');
    }

    public function storeGeneralWorkout(StoreWorkoutRequest $request)
    {
        $fields = $request->validated();
        $fields['user_id'] = auth()->id();
        WorkoutTracker::create($fields);

        return to_route('workout_tracker')->with('success','Workout session was successfully saved.');
    }

    public function show()
    {
        $workoutSessions = auth()->user()->workoutSessions;
        return view('workout-tracker.results', compact('workoutSessions'));
    }
}
