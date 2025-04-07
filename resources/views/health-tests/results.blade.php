<x-main-layout>
    <x-slot:title>Health Tests Results | {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl mb-8">Health Tests Results</h1>
    <div class="grid grid-cols-3">
        <table class="border border-[#4682A1]">
            <caption class="text-xl font-medium mb-4">Body Mass Index</caption>
            <tr>
                <th class="border border-[#4682A1] py-2 px-4">BMI</th>
                <th class="border border-[#4682A1] py-2 px-4">Result</th>
                <th class="border border-[#4682A1] py-2 px-4">Date</th>
            </tr>
            @foreach ($bmi as $record)
            <tr>
                <td class="border border-[#4682A1] py-1 text-center">{{ $record->index }}</td>
                <td class="border border-[#4682A1] py-1 text-center">{{ $record->result }}</td>
                <td class="border border-[#4682A1] py-1 text-center">{{ $record->created_at->format('M d, Y') }}</td>
            </tr>
            @endforeach
        </table>
        <table>
            <caption class="text-xl font-medium mb-4">Ruffier Test</caption>
            <tr>
                <th>Ruffier Index</th><th>Result</th>
            </tr>
        </table>
        <table>
            <caption class="text-xl font-medium mb-4">Breathing test</caption>
            <tr>
                <th>Score</th><th>Result</th>
            </tr>
        </table>
    </div>
</x-main-layout>
