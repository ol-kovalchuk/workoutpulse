<?php

namespace App\Http\Controllers;

use App\Models\BodyMassIndex;
use App\Models\RuffierIndex;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBmiRequest;
use App\Http\Requests\StoreRuffierIndexRequest;
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

    public function ruffierTestForm()
    {
        return view('health-tests.ruffier-test');
    }

    public function ruffierTestStore(StoreRuffierIndexRequest $request)
    {
        $ruffierTest = [];
        ['pulse_1' => $pulse1, 'pulse_2' => $pulse2, 'pulse_3' => $pulse3] = $request->validated();
        $ruffierTest = TestCalc::getRuffierIndex($pulse1, $pulse2, $pulse3);

        $ruffierTest['pulse_1'] = $pulse1;
        $ruffierTest['pulse_2'] = $pulse2;
        $ruffierTest['pulse_3'] = $pulse3;
        $ruffierTest['user_id'] = auth()->id();

        RuffierIndex::create($ruffierTest);

        $message = 'Your Ruffier index is ' . $ruffierTest['index'] . ', result - ' . $ruffierTest['result'] . '.';
        return to_route('health.tests')->with('success', $message);

    }

    public function getResults()
    {
        $bmi = auth()->user()->bmi;
        $ruffierTest = auth()->user()->ruffierIndex;

        return view('health-tests.results', compact('bmi', 'ruffierTest'));
    }
}
