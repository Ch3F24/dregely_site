<header class="container flex">
    <div class="logo">
        <a href="{{ route('home') }}" class=" text-4xl font-bold">Drégely<br>Imre</a>
    </div>
    <div class="hidden lg:block">
        @include('site.partials._nav_lang_switcher')
    </div>
    <div x-data="{ open: false }" class="lg:hidden">
        <div x-on:click="open = true">
            <button type="button"
                    class="p-2 inline-flex rounded-md items-center justify-center text-white text-dgrey hover:bg-dgrey hover:text-white focus:outline-none focus:ring-0"
                    aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden z-20"
             style="display: none"
             x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-1">
            <div class="rounded-md shadow-md ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pb-6 px-5">
                    <div class="flex items-center justify-between border-b border-roman py-5">
                        <div class="-mr-2">
                            <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-roman hover:text-white hover:bg-roman focus:outline-none"
                                    x-on:click="open = false">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        @include('site.partials._nav')
                        <div class="mt-2">
                            @include('site.partials._nav_lang_switcher')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
