@if(session()->has('error'))
    <div class="bg-[#9B1313] rounded w-full h-12 mt-2 mb-2">
        <div class="text-white text-center pt-3">
            {!! session('error') !!}
        </div>
    </div>
@endif
