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

    public function vitalSignsStore(StoreVitalSignsRequest $request)
    {
        $fields = $request->validated();
        $fields['user_id'] = auth()->id();

        VitalSign::create($fields);

        return to_route('vital-signs')->with('success', 'Your vital signs measurements were saved.');
    }

    public function measurements()
    {
        $measurements = auth()->user()->vitalSignsMeasurements;

        return view('vital-signs.measurements', compact('measurements'));
    }
}
