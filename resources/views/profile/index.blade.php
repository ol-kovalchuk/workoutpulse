<x-main-layout>
    <x-slot:title>{{ auth()->user()->username }} Profile</x-slot:title>
    <h1 class="text-center text-3xl">{{ $user->username }} details</h1>
    <ul>
        <!-- Basic user information -->
        <h2 class="text-xl mb-1">Basic information</h2>
        <li><b>Full name: </b>{{ $user->first_name }} {{ $user->last_name }}</li>
        <li><b>Age: </b>{{ $user->age }} years</li>
        <li><b>Email: </b>{{ $user->email }}</li>
        <hr class="my-2">
        <!-- Tests results and physical measurements -->
        <h2 class="text-xl mb-1">Tests results and physical measurements</h2>
        @if($bmi)
        <li><b>Body Mass Index: </b>{{ $bmi->index }} ({{ $bmi->result }})</li>
        <li><b>Height: </b>{{ $bmi->height }} m</li>
        <li><b>Weight: </b>{{ $bmi->weight }} kg</li>
        @else
        <li>
        {!! '<a href="' .  route('health-tests.bmi') . '"class="bg-[#0275d8] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#034680] hover:text-orange-300">
                Take body mass index test
            </a>' !!}
        </li>
        @endif

        @if($ruffierIndex)
        <li><b>Ruffier index: </b>{{ $ruffierIndex->index }} ({{ $ruffierIndex->result }})</li>
        @else
        <li>
        {!! '<a href="' .  route('health-tests.ruffier') . '"class="bg-[#5cb85c] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#0c570c] hover:text-orange-300">
            Take Ruffier test
        </a>' !!}
        </li>
        @endif
        <hr class="my-2">
        <!-- Vital signs -->
        <h2 class="text-xl mb-1">Vital signs</h2>
        @if ($vitalSigns)
        <!-- Temperature -->
        <li class="grid grid-cols-12">
            <span class="col-span-2"><b>Temperature: </b></span>
            <span class="col-span-1">
                <meter value="{{ $vitalSigns->temperature }}" min="35" max="42" low="36" high="38" optimum="36.6"></meter>
            </span>
            <span class="col-span-9">{{ $vitalSigns->temperature }} &deg;C ({{ $vitalSigns->temperatureResult }})</span>
        </li>
        <!-- Heart rate -->
        <li class="grid grid-cols-12">
            <span class="col-span-2"><b>Heart rate: </b></span>
            <span class="col-span-1">
                <meter value="{{ $vitalSigns->pulse }}" min="40" max="200" low="60" high="120" optimum="70"></meter>
            </span>
            <span class="col-span-9">{{ $vitalSigns->pulse }} bpm ({{ $vitalSigns->pulseResult }})</span>
        </li>
        <!-- Respiration rate -->
        <li class="grid grid-cols-12">
            <span class="col-span-2"><b>Respiration rate: </b></span>
            <span class="col-span-1">
                <meter value="{{ $vitalSigns->breathing }}" min="5" max="40" low="10" high="20" optimum="15"></meter>
            </span>
            <span class="col-span-9">{{ $vitalSigns->breathing }} rpm ({{ $vitalSigns->breathingResult }})</span>
        </li>
        <!-- Blood Pressure -->
        <li class="grid grid-cols-12">
            <span class="col-span-2"><b>Blood pressure: </b></span>
            <span class="col-span-1">
                <meter value="{{ $vitalSigns->systolic }}" min="90" max="180" low="100" high="140" optimum="120"></meter>
            </span>
            <span class="col-span-9">{{ $vitalSigns->pressure }} mmHg ({{ $vitalSigns->pressureResult }})</span>
        </li>
        @else
        <li>
        {!! '<a href="' .  route('vital-signs') . '"class="bg-[#20B2AA] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#1C746F] hover:text-orange-300">
            Fill vital signs
        </a>' !!}
        </li>
        @endif
    </ul>
</x-main-layout>
