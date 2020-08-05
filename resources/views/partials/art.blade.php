<div class="w-full bg-gray-100">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 md:gap-5 px-4 sm:px-6 lg:px-8 sm:py-8 lg:px-16">
        @foreach($artworks as $artwork)
        <div class="rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ asset('storage/' . $artwork->image) }}" alt="">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $artwork->title }}</div>
                <p class="text-gray-700 text-base">
                    {{ $artwork->description }}
                </p>
            </div>
            {{-- <div class="px-6 py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
            </div> --}}
        </div>
        @endforeach
    </div>
</div>