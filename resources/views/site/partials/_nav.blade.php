<nav class="grid gap-y-1 transition">
    <div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/works*') ? 'true' : 'false' }}">
        <p class="cursor-pointer">
            <span :class="open ? 'font-bold' : ''" @click="open = ! open" class="{{ (request()->is(app()->getLocale() . '/works*')) ? 'font-bold' : '' }}">muvek</span>
        </p>
        <ul class="ml-4" x-show="open"
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
    <p>
        <a href="">valami</a>
    </p>
    <p>
        <a href="">valami</a>
    </p>
    <p>
        <a href="">valami</a>
    </p>
</nav>
