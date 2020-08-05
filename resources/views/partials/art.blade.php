<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full bg-gray-100" x-data="{open: false, modalSrc: '', modalTitle: '', modalDesc: ''}">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 md:gap-5 px-4 sm:px-6 lg:px-8 sm:py-8 lg:px-16">
        @foreach($artworks as $artwork)
        <div @click.prevent="open = true, modalSrc='{{ asset('storage/' . $artwork->image) }}', modalTitle='{{ $artwork->title }}', modalDesc='{{ $artwork->description }}'" class="rounded overflow-hidden shadow-lg">
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
    <div x-show.transition.opacity="open" class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50">
        <div x-show.transition="open" @click.away="open = false" class="container max-w-3xl max-h-full bg-white rounded-xl shadow-lg overflow-auto">
            <img class="w-full" :src="modalSrc" alt="">
            <h2 x-text='modalTitle'></h2>
            <p x-text='modalDesc'></p>
        </div>
    </div>
</div>