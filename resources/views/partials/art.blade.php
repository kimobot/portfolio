<div class="w-full bg-gray-200" x-data="{open: false, modalSrc: '', modalTitle: '', modalDesc: ''}">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 md:gap-5 px-4 sm:px-6 lg:px-8 sm:py-8 lg:px-16">
        @foreach($artworks as $artwork)
        <div @click.prevent="open = true, modalSrc='{{ asset('storage/' . $artwork->image) }}', modalTitle='{{ $artwork->title }}', modalDesc='{{ $artwork->description }}'" class="rounded overflow-hidden shadow-lg h-56">
            <img class="w-full object-cover h-56" src="{{ asset('storage/' . $artwork->thumbnail) }}" alt="">
            {{-- <div class="px-6 py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
            </div> --}}
        </div>
        @endforeach
    </div>
    <div x-show.transition.opacity="open" class="p-6 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50">
        <div x-show.transition="open" class="relative flex flex-col justify-center max-w-xl h-full overflow-hidden">
            <img class="max-h-3/4 w-auto object-cover" :src="modalSrc" alt="" @click.away="open = false">
            <div class="w-full bottom-0 bg-black bg-opacity-25 p-6">
                <h2 class="text-white" x-text='modalTitle'></h2>
                <p class="text-white" x-text='modalDesc'></p>
            </div>
        </div>
    </div>
</div>
