<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.css'])
</head>
<body class="text-[#3D52A0] bg-[#FBE9D0]">
    <header>
        <x-navbar />
        <x-flash-success />
        <x-flash-error />
    </header>
    <main class="mb-[4em] mx-6 my-3">
        {{ $slot }}
    </main>
    <footer class="fixed bottom-0 bg-[#3B945E] w-full">
        <p class=" ml-[45%] text-white h-12 pt-3">&copyWorkout Pulse {{ date('Y') }}</p>
    </footer>
</body>
</html>
