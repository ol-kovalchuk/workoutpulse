<x-main-layout>
    <x-slot:title>Ruffier Test | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl mb-4">Ruffier Test</h1>
    <p class="indent-8">The <strong>Ruffier test</strong> (or Ruffier-Dickson test) is a method used to assess cardiovascular
        fitness or heart function, specifically in how the heart responds to physical exertion. It is often used in physical
        examinations to evaluate a person's heart health, particularly in terms of how the heart rate changes with exercise.</p>
    <p class="indent-8">The steps to perform Ruffier test:</p>
    <ol class="list-decimal">
        <li class="ml-16"><b>Resting Heart Rate Measurement: </b>First, you take a rest sitting or lying calmly
            for at least 5 minutes. Then, you check your heart rate (P1).</li>
        <li class="ml-16"><b>Exercise Phase: </b>Next, you perform 30 squats in 45 seconds.
            This increases your heart rate temporarily.</li>
        <li class="ml-16"><b>Post-Exercise Heart Rate Measurements: </b>After completing the squats, you immediately take your
             heart rate (P2), and then in a minute again (P3).</li>
        <li class="ml-16"><b>Assessment: </b>The Ruffier index is calculated using the following formula:</li>
        <p class="ml-20"><strong>Ruffier Index</strong> = (P1 + P2 + P3 - 200)) / 10, where: </p>
            <ul>
                <li class="ml-24"><b>P1</b> = the heart rate before the exercise</li>
                <li class="ml-24"><b>P2</b> = the heart rate immediately after exercise</li>
                <li class="ml-24"><b>P3</b> = the heart rate in a minute after P2</li>
            </ul>
    </ol>
    <h2 class="text-center text-xl m-2">Fill the form to calculate the Ruffier index:</h2>
    <form action="#" method="POST">
        @csrf
        <!-- Heart rate 1 -->
        <section class="grid grid-cols-3 border-1 border-[#4682A1] my-6 mx-64 p-2 rounded-xl">
            <label for="pulse_1" class="col-span-2">Enter heart rate after rest: </label>
            <input type="number" class="col-span-1 border-1 border-[#366899] bg-[#F2F2F2]" id="pulse_1" name="pulse_1">
            @error("pulse_1")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Heart rate 2 -->
        <section class="grid grid-cols-3 border-1 border-[#4682A1] my-6 mx-64 p-2 rounded-xl">
            <label for="pulse_2" class="col-span-2">Enter heart rate immediately after 30 squats: </label>
            <input type="number" class="col-span-1 border-1 border-[#366899] bg-[#F2F2F2]" id="pulse_2" name="pulse_2">
            @error("pulse_2")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <!-- Heart rate 3 -->
        <section class="grid grid-cols-3 border-1 border-[#4682A1] my-6 mx-64 p-2 rounded-xl">
            <label for="pulse_3" class="col-span-2">Enter heart rate (15 seconds) in a minute after 2nd heart rate: </label>
            <input type="number" class="col-span-1 border-1 border-[#366899] bg-[#F2F2F2]" id="pulse_3" name="pulse_3">
            @error("pulse_3")
            <p class="mt-1 text-red-700">{{ $message }}</p>
            @enderror
        </section>
        <input type="submit" value="Calculate Ruffier index" class="ml-[62%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
        border-[#2E6F40] hover:bg-[#2E6F40]">
    </form>
</x-main-layout>
