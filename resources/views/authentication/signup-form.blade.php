<x-main-layout>
    <x-slot:title>Sign Up | Workout Pulse</x-slot:title>
    <h1 class="text-center text-3xl my-3">Join Workout Pulse:</h1>
    <form action="#" method="POST">
      @csrf
      <!-- First Name -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("first_name") }}>
        @error("first_name")
        <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <!-- Last Name -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("last_name") }}>
        @error("last_name")
        <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <!-- Age -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("age") }}>
        @error("age")
        <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <!-- Usename -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("username") }}>
        @error("username")
        <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <!-- Email -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="border-1 border-[#366899] bg-[#F2F2F2]" value={{ old("email") }}>
        @error("email")
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
      <!-- Password confirmation -->
      <div class="grid grid-cols-2 border-1 border-[#4682A1] my-6 mx-72 p-2 rounded-xl">
        <label for="password_confirmation">Password confirmation:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="border-1 border-[#366899] bg-[#F2F2F2]">
        @error("password_confirmation")
        <p class="mt-1 text-red-700">{{ $message }}</p>
        @enderror
      </div>
      <input type="submit" value="Sign up" class="ml-[70%] mt-4 px-6 py-2 rounded-md bg-[#68BA7F] text-white
       border-[#2E6F40] hover:bg-[#2E6F40]">
    </form>
  </x-main-layout>
