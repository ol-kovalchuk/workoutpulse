<x-main-layout>
    <x-slot:title>Workout Pulse</x-slot:title>
    <h1 class="text-center text-3xl">Welcome to {{ env('APP_NAME') }}!</h1>
    <div id="app">
        <example-component></example-component>
    </div>
</x-main-layout>
