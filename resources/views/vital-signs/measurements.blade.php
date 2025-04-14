<x-main-layout>
    <x-slot:title>Vital SIgns Measurements | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Vital signs measurements</h1>
    <table class="border border-[#4682A1] m-auto mt-4">
        <thead>
            <tr class="border border-[#4682A1]">
                <th class="border border-[#4682A1] p-4">Date</th>
                <th class="border border-[#4682A1] p-4">Time</th>
                <th class="border border-[#4682A1] p-4">Temperature</th>
                <th class="border border-[#4682A1] p-4">Heart Rate</th>
                <th class="border border-[#4682A1] p-4">Respiration rate</th>
                <th class="border border-[#4682A1] p-4">Blood pressure</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($measurements as $measurement)
            <tr class="border border-[#4682A1]">
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->created_at->format('m/d/Y') }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->created_at->format('H:i:s') }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->temperature }} &deg;C</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->pulse }} bpm</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->breathing }} rpm</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $measurement->systolic }}/{{ $measurement->diastolic }} mmHg</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-main-layout>
