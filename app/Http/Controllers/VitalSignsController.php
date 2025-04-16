<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreVitalSignsRequest;
use App\Models\VitalSign;

class VitalSignsController extends Controller
{
    public function index()
    {
        return view('vital-signs.index');
    }

    public function storeVitalSigns(StoreVitalSignsRequest $request)
    {
        $fields = $request->validated();
        $fields['user_id'] = auth()->id();

        VitalSign::create($fields);

        return to_route('vital_signs')->with('success', 'Your vital signs measurements were saved.');
    }

    public function getMeasurements()
    {
        $measurements = auth()->user()->vitalSignsMeasurements;

        return view('vital-signs.measurements', compact('measurements'));
    }
}
