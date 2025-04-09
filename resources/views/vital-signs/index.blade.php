<x-main-layout>
    <x-slot:title>Vital Signs | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Vital Signs</h1>
    <h3>
        <a href="{{ route('vital-signs.measurements') }}" class="ml-[80%] mt-4 px-6 py-2 rounded-md bg-[#4682A1] text-white border-[#366899] hover:bg-[#366899]">
            Vital signs measurements
        </a>
    </h3>
    <form action="{{ route('vital-signs.store') }}" method="POST">
        @csrf
        <!-- Body temperature -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="temperature">Body temperature</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="temperature" name="temperature" step="0.1">
            @error("temperature")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Heart rate -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="pulse">Heart rate</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="pulse" name="pulse">
            @error("pulse")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Respiration rate -->
        <section class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label for="breathing">Respiration rate</label>
            <input type="number" class="border-1 border-[#366899] bg-[#F2F2F2]" id="breathing" name="breathing">
            @error("breathing")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Blood pressure -->
        <section class="grid grid-cols-4 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
            <label class="col-span-2">Blood pressure</label>
            <input type="number" class="col-span-1 pl-4 mr-2 border-1 border-[#366899] bg-[#F2F2F2]" id="systolic"
             name="systolic" placeholder="Systolic">
            @error("systolic")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
            <input type="number" class="col-span-1 pl-4 ml-2 border-1 border-[#366899] bg-[#F2F2F2]" id="diastolic"
             name="diastolic" placeholder="Diastolic">
            @error("diastolic")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <input type="submit" value="Save" class="ml-[70%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
        border-[#2E6F40] hover:bg-[#2E6F40]">
</x-main-layout>
