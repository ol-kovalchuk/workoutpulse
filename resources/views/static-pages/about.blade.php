<x-main-layout>
    <x-slot:title>About {{ env('APP_NAME') }}</x-slot:title>
    <h1 class="text-center text-3xl">About {{ env('APP_NAME') }}</h1>
    <p class="indent-8"><strong>{{ env('APP_NAME')}}</strong> is the place, where you can manage your workout routine - track your workout exercises,
        check your health with medical formulas, monitor vital signs and train with very effective program - convict conditioning,
        that can make you very strong without any special equipment. If you are interested -
        <a href="{{ route('signup.form') }}" class="text-[#005F84] hover:text-[#005F84] hover:underline">
            join our community!
        </a>
    </p>
</x-main-layout>
