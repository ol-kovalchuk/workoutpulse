<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBmiRequest;
use App\Helpers\HealthTestsCalculations as TestCalc;
use App\Models\BodyMassIndex as Bmi;

class HealthTestsController extends Controller
{
    public function index()
    {
        return view('health-tests.index');
    }

    public function bmiForm()
    {
        return view('health-tests.bmi-form');
    }

    public function bmiStore(StoreBmiRequest $request)
    {
        $bmi = [];
        ['weight' => $weight, 'height' => $height] = $request->validated();;
        $bmi = TestCalc::getBmi($weight, $height);

        $bmi['weight'] = $weight;
        $bmi['height'] = $height;
        $bmi['user_id'] = auth()->id();

        Bmi::create($bmi);

        $message = 'Your body mass index is ' . $bmi['index'] . ', result - ' . $bmi['result'] . '.';

        return to_route('health.tests')->with('success', $message);
    }

    public function getResults()
    {
        $bmi = BodyMassIndex::all();

        return view('health-tests.results', compact('bmi'));
    }
}
