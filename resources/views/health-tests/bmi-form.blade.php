<x-main-layout>
    <x-slot:title>Body Mass Index | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Body Mass Index</h1>
    <p class="indent-8"><strong>Body Mass Index (BMI)</strong> is a measure used to assess whether a person has a healthy body
        weight for a given height. It is calculated using the following formula:</p>
    <p class="text-center"><strong>BMI = height(m)<sup>2</sup> / weight(kg)</strong>​</p>
    <form action="{{ route('health-tests.bmi.store') }}" method="POST">
        @csrf
        <!-- Weight -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="weight">Weight (kg): </label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="weight" name="weight" step="0.1">
            @error("weight")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Height -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="height">Height (m): </label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="height" name="height" step="0.01">
            @error("height")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <input type="submit" value="Calculate BMI" class="ml-[65%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
        border-[#2E6F40] hover:bg-[#2E6F40]">
    </form>
</x-main-layout>
