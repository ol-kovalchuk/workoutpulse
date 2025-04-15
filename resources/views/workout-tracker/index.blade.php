<x-main-layout>
    <x-slot:title>Workout Tracker | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Workout Tracker</h1>
    <ul class="flex justify-end gap-4">
        <li>
            <a href="{{ route('workout.results') }}" class="mt-4 px-6 py-2 rounded-md bg-[#4682A1] text-white border-[#366899] hover:bg-[#366899]">
                Results
            </a>
        </li>
        <li>
            <a href="{{ route('general_workout') }}" class="mt-4 px-6 py-2 rounded-md bg-[#927869] text-white border-[#366899] hover:bg-[#6F574E]">
                General workout
            </a>
        </li>
    </ul>
    <div id="workout-list">
        <workout-programs></workout-programs>
    </div>
</x-main-layout>
