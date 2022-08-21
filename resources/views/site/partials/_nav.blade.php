<nav class="grid gap-y-1 transition">

    <div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/works*') ? 'true' : 'false' }}">
        <p>
            <span :class="open ? 'font-bold' : ''" @click="open = ! open" class="cursor-pointer hover:font-bold {{ (request()->is(app()->getLocale() . '/works*')) ? 'font-bold' : '' }}">Galéria</span>
        </p>
        <ul class="pl-4 my-4 scrollbar  scrollbar-thin  scrollbar-thumb-dgrey scrollbar-track-gray-100 scrollbar-thumb-rounded scrollbar-track-rounded" x-show="open"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1">
            @foreach($works as $work)
                <li><a href="{{ route('work.view',$work->slug) }}" class="{{ (request()->is(app()->getLocale() . '/works/' . $work->slug)) ? 'font-bold' : '' }}" >{{$work->title}}</a></li>
            @endforeach
        </ul>
    </div>
{{--    @foreach($pages as $page)--}}
{{--        <p>--}}
{{--            <a href="#" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">{{ $page->title }}</a>--}}
{{--        </p>--}}
{{--    @endforeach--}}
    <div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/exhibitions*') ? 'true' : 'false' }}">
        <p>
            <span :class="open ? 'font-bold' : ''" @click="open = ! open" class="cursor-pointer hover:font-bold {{ (request()->is(app()->getLocale() . '/exhibitions*')) ? 'font-bold' : '' }}">Kiállítások</span>
        </p>
        <ul class="pl-4 my-4 scrollbar  scrollbar-thin  scrollbar-thumb-dgrey scrollbar-track-gray-100 scrollbar-thumb-rounded scrollbar-track-rounded" x-show="open"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1">
            @foreach($exhibitions as $exhibition)
                <li><a href="{{ route('exhibition.view',$exhibition->slug) }}" class="{{ (request()->is(app()->getLocale() . '/exhibitions/' . $exhibition->slug)) ? 'font-bold' : '' }}" >{{$exhibition->title}}</a></li>
            @endforeach
        </ul>
    </div>

{{--    <p>--}}
{{--        <a href="#" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">Kiállítások</a>--}}
{{--    </p>--}}
    <p>
        <a href="{{ route('page.contact') }}" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">Életrajz</a>
    </p>
    <p>
        <a href="{{ route('article.index') }}" class="{{ (request()->is(app()->getLocale() . '/articles')) ? 'font-bold' : '' }}">Cikkek</a>
    </p>
    <p>
        <a href="{{ route('publication.index') }}" class="{{ (request()->is(app()->getLocale() . '/publications')) ? 'font-bold' : '' }}">Publikációk</a>
    </p>
    <p>
        <a href="{{ route('page.contact') }}" class="{{ (request()->is(app()->getLocale() . '/lexicon')) ? 'font-bold' : '' }}">Lexikon</a>
    </p>
    <p>
        <a href="{{ route('page.contact') }}" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">Kapcsolat</a>
    </p>

</nav>
