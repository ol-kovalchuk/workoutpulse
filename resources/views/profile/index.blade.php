@php
$user = auth()->user();
$bmi = json_decode($user->bmi) ?? null;
$ruffierIndex = json_decode($user->ruffierIndex) ?? null;
@endphp
<x-main-layout>
    <x-slot:title>{{ auth()->user()->first_name }} Profile</x-slot:title>
    <h1 class="text-center text-3xl">{{ $user->username }} details</h1>
    <ul>
        <li><b>Full name: </b>{{ $user->first_name }} {{ $user->last_name }}</li>
        <li><b>Age: </b>{{ $user->age }} years</li>

        @if($bmi)
        <li><b>Body Mass Index: </b>{{ $bmi[0]->index }} ({{ $bmi[0]->result }})</li>
        @else
        <li>
        {!! '<a href="' .  route('health-tests.bmi') . '"class="bg-[#0275d8] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#034680] hover:text-orange-300">
                Take body mass index test
            </a>' !!}
        </li>
        @endif

        @if($ruffierIndex)
        <li><b>Ruffier index: </b>{{ $ruffierIndex[0]->index }} ({{ $ruffierIndex[0]->result }})</li>
        @else
        <li>
        {!! '<a href="' .  route('health-tests.ruffier') . '"class="bg-[#5cb85c] text-white p-1 inline-block mt-2 rounded-md hover:bg-[#0c570c] hover:text-orange-300">
            Take Ruffier test
        </a>' !!}
        </li>
        @endif
    </ul>
</x-main-layout>
