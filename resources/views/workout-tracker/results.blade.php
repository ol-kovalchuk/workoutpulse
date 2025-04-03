<x-main-layout>
    <x-slot:title>Workout Results | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Workout results</h1>
    @foreach ($workoutCollection as $workout)
        @php
            $workoutDate = $workout['created_at']->format('M d, Y');
            $workoutTime = $workout['created_at']->format('H:i:s');
        @endphp
        <section class="w-1/3 border border-[#4682A1] m-4 p-2 rounded-2xl">
            <h2 class="text-[1.2em] font-medium">Training made on {{ $workoutDate }} at {{ $workoutTime }} </h2>
            <ul>
                <li>Push-ups: {{ $workout->pushups }}</li>
                <li>Sit-ups: {{ $workout->situps }}</li>
                <li>Squats: {{ $workout->squats }}</li>
                <li>Dips: {{ $workout->dips }}</li>
                <li>Pull-ups: {{ $workout->pullups }}</li>
            </ul>
        </section>
@endforeach

</x-main-layout>
