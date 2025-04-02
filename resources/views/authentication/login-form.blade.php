<x-main-layout>
    <x-slot:title>Login | Workout Pulse</x-slot:title>
    <h1 class="text-center text-3xl my-3">Login to Workout Pulse:</h1>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <!-- Usename -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("username") }}>
        @error("username")
            <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <!-- Password -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="border-1 border-[#366899] bg-[#F2F2F2]">
        @error("password")
            <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <input type="submit" value="Login" class="ml-[70%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
       border-[#2E6F40] hover:bg-[#2E6F40]">
    </form>
    <p class="mt-5 text-center">New here?
      <a href="{{ route('signup.form') }}" class="text-[#B07C92] hover:text-[#6C284D] hover:underline">Sign Up</a> now!
    </p>
  </x-main-layout>
