<x-main-layout>
    <x-slot:title>Workout Results | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Workout results</h1>
    <table class="border border-[#4682A1] m-auto mt-4">
        <thead>
            <tr class="border border-[#4682A1]">
                <th class="border border-[#4682A1] p-4">Date</th>
                <th class="border border-[#4682A1] p-4">Time</th>
                <th class="border border-[#4682A1] p-4">Push-ups</th>
                <th class="border border-[#4682A1] p-4">Sit-ups</th>
                <th class="border border-[#4682A1] p-4">Squats</th>
                <th class="border border-[#4682A1] p-4">Dips</th>
                <th class="border border-[#4682A1] p-4">Pull-ups</th>
            </tr>
        </thead>
        @foreach ($workoutSessions as $workout)
        @php
            $workoutDate = $workout['created_at']->format('m/d/y');
            $workoutTime = $workout['created_at']->format('H:i:s');
        @endphp
        <tbody>
            <tr class="border border-[#4682A1]">
                <td class="border border-[#4682A1] px-4 text-center">{{ $workoutDate }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workoutTime }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workout->pushups }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workout->situps }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workout->squats }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workout->dips }}</td>
                <td class="border border-[#4682A1] px-4 text-center">{{ $workout->pullups }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</x-main-layout>
