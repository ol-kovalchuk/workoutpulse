<nav class="bg-[#3B945E] mb-3">
    <ul class="flex justify-between ml-4 mr-8 text-white">
        <img src="{{ Vite::asset('resources/images/calisthenics.png') }}" alt="Calisthenics" class="h-20">
        <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('home') }}">Home</a></li>
        <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('about') }}">About</a></li>
        <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('contacts') }}">Contacts</a></li>
        @auth
            <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('workout_tracker') }}">Workout Tracker</a></li>
            <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('health_tests') }}">Health Tests</a></li>
            <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('vital_signs') }}">Vital Signs</a></li>
            {{-- <li class="mt-7 hover:text-orange-400 hover:underline"><a href="#">Convict Conditioning</a></li> --}}
            <li class="mt-7 hover:text-orange-400 hover:underline">
                <a href="{{ route('profile') }}">
                    Profile ({{ auth()->user()->username }})
                </a></li>
            <li class="mt-7">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout" class="hover:text-orange-400 hover:underline cursor-pointer">
            </form>
            </li>
        @else
            <li class="mt-7 hover:text-orange-400 hover:underline"><a href="{{ route('login.form') }}">Login / Sign Up</a></li>
        @endauth
    </ul>
</nav>
