<x-main-layout>
    <x-slot:title>{{ auth()->user()->username }} Profile</x-slot:title>
    <h1 class="text-center text-3xl">{{ $user->username }} details</h1>
    <ul>
        <!-- Basic user information -->
        <h2 class="text-xl mb-1">Basic information</h2>
        <li><b>Full name: </b>{{ $user->first_name }} {{ $user->last_name }}</li>
        <li><b>Age: </b>{{ $user->age }} years</li>
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
        <li><b>Temperature: </b>{{ $vitalSigns->temperature }} &deg;C</li>
        <li><b>Heart rate: </b>{{ $vitalSigns->pulse }} bpm</li>
        <li><b>Respiration rate: </b>{{ $vitalSigns->breathing }} rpm</li>
        <li><b>Blood pressure: </b>{{ $vitalSigns->systolic }}/{{ $vitalSigns->diastolic }} mmHg</li>
        @else
        <li>
        {!! '<a href="' .  route('vital-signs') . '"class="bg-[#20B2AA] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#1C746F] hover:text-orange-300">
            Fill vital signs
        </a>' !!}
        </li>
        @endif
    </ul>
</x-main-layout>
