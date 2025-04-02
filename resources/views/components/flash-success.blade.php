@if(session()->has('success'))
    <div class="bg-[#50C878] rounded w-full h-12 mt-2 mb-2">
        <div class="text-white text-center pt-3">
            {{ session('success') }}
        </div>
    </div>
@endif
