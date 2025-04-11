<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $bmi = json_decode($user->bmi)[0] ?? null;
        $ruffierIndex = json_decode($user->ruffierIndex)[0] ?? null;
        $vitalSigns = json_decode($user->vitalSignsMeasurements)[0] ?? null;

        return view('profile.index', compact('user', 'bmi', 'ruffierIndex', 'vitalSigns'));
    }
}
