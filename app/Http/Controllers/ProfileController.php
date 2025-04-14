<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\VitalSignsMetrics as Metrics;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $bmi = $user->latestBmi ?? null;
        $ruffierIndex = $user->latestRuffierIndex ?? null;
        $vitalSigns = $user->latestVitalSignsMeasurements ?? null;

        if ($vitalSigns) {
        $vitalSigns->temperatureResult = Metrics::checkTemperature($vitalSigns->temperature);
        $vitalSigns->pulseResult = Metrics::checkPulse($vitalSigns->pulse);
        $vitalSigns->breathingResult = Metrics::checkBreathing($vitalSigns->breathing);
        $vitalSigns->pressureResult = Metrics::checkPressure($vitalSigns->systolic, $vitalSigns->diastolic);
        $vitalSigns->pressure = $vitalSigns->systolic . '/' . $vitalSigns->diastolic;
        }
        return view('profile.index', compact('user', 'bmi', 'ruffierIndex', 'vitalSigns'));
    }
}
