<x-main-layout>
    <x-slot:title>Workout Tracker | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Workout Tracker</h1>
    <h3>
        <a href="{{ route('workout.results') }}" class="ml-[80%] mt-4 px-6 py-2 rounded-md bg-[#4682A1] text-white border-[#366899] hover:bg-[#366899]">
            Results
        </a>
    </h3>
    <form action="{{ route('workout.store') }}" method="POST">
        @csrf
        <!-- Push-ups -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="pushups">Push-ups</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="pushups" name="pushups">
            @error("pushups")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Sit-ups -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="situps">Sit-ups</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="situps" name="situps">
        </section>
        <!-- Squats -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="squats">Squats</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="squats" name="squats">
        </section>
        <!-- Dips -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="dips">Dips</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="dips" name="dips">
        </section>
        <!-- Pull-ups -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="pullups">Pull-ups</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="pullups" name="pullups">
        </section>
        <input type="submit" value="Save workout" class="ml-[65%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
        border-[#2E6F40] hover:bg-[#2E6F40]">
    </form>
</x-main-layout>
