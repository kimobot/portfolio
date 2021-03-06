<!-- This example requires Tailwind CSS v1.4.0+ -->
<div x-data="{open: false}"  class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="lg:w-0 lg:flex-1">
                <a href="#" class="flex">
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click.prevent="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="#art" class="text-base leading-6 font-medium text-gray-800 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                    Art
                </a>
                <a href="#about" class="text-base leading-6 font-medium text-gray-800 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                    About
                </a>
                <a href="#contact" class="text-base leading-6 font-medium text-gray-800 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                    Contact
                </a>
            </nav>
            <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">

            </div>
        </div>
    </div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div x-show="open" @click.away="open = false" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5 space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button" @click="open = false" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="flex flex-col">
                        <a href="#art" class="p-3 text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                            Art
                        </a>
                        <a href="#about" class="p-3 text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                            About
                        </a>
                        <a href="#contact" class="p-3 text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                            Contact
                        </a>
                    </div>
                    <div class="space-y-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
