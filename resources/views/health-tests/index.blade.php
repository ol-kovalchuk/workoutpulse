<x-main-layout>
    <x-slot:title>Health Tests | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">Health Tests</h1>
    <section class="flex flex-row justify-center mt-6 space-x-32">
        <span class="bg-[#0275d8] text-white p-3 rounded-md hover:bg-[#034680] hover:text-orange-300"><a href="{{ route('health_tests.bmi') }}">Body Mass Index</a></span>
        <span class="bg-[#5cb85c] text-white p-3 rounded-md hover:bg-[#0c570c] hover:text-orange-300"><a href="{{ route('health_tests.ruffier') }}">Ruffier Test</a></span>
        {{-- <span class="bg-[#6E708F] text-white p-3 rounded-md hover:bg-[#484A6E] hover:text-orange-300"><a href="#">Breathing Test</a></span> --}}
        <span class="bg-[#20B2AA] text-white p-3 rounded-md hover:bg-[#1C746F] hover:text-orange-300"><a href="{{ route('health_tests.results') }}">Tests Results</a></span>
        </section>
    </section>
</x-main-layout>
