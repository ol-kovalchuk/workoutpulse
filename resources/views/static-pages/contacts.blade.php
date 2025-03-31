<x-main-layout>
    <x-slot:title>Contacts | Workout Pulse</x-slot:title>
    <h1 class="text-center text-3xl mt-3">Contact</h1>
    <p>If you have any questions, you can contact me:</p>
    <ul>
      <li><b>Email: </b><i>{{ env('ADMIN_EMAIL') }}</i></li>
      <li><b>Telegram: </b><i>{{ env('ADMIN_MESSENGER') }}</i></li>
    </ul>
</x-main-layout>
