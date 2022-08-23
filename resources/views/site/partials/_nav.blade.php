<nav class="grid gap-y-1 transition">

    <p>
        <a href="{{ route('page.view','bio') }}" class="{{ (request()->is(app()->getLocale() . '/bio')) ? 'font-bold' : '' }}">Bio</a>
    </p>

    @include('site.partials._nav_dropdown',[
        'part' => 'work',
        'title' => __('Gellery'),
        'links' => $works
    ])

    @include('site.partials._nav_dropdown',[
        'part' => 'installation',
        'title' => __('Installations'),
        'links' => $installations
    ])

    @include('site.partials._nav_dropdown',[
        'part' => 'video',
        'title' => __('Video'),
        'links' => $videos
    ])

{{--    <div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/works*') ? 'true' : 'false' }}">--}}
{{--        <p>--}}
{{--            <span :class="open ? 'font-bold' : ''" @click="open = ! open" class="cursor-pointer hover:font-bold {{ (request()->is(app()->getLocale() . '/works*')) ? 'font-bold' : '' }}">{{ __('Gellery') }}</span>--}}
{{--        </p>--}}
{{--        @if(count($works))--}}
{{--            <ul class="pl-4 my-4 scrollbar scrollbar-thin scrollbar-thumb-dgrey scrollbar-thumb-rounded scrollbar-track-rounded" x-show="open"--}}
{{--                x-transition:enter="transition ease-out duration-1000"--}}
{{--                x-transition:enter-start="opacity-0 translate-y-1"--}}
{{--                x-transition:enter-end="opacity-100 translate-y-0"--}}
{{--                x-transition:leave="transition ease-in duration-150"--}}
{{--                x-transition:leave-start="opacity-100 translate-y-0"--}}
{{--                x-transition:leave-end="opacity-0 translate-y-1">--}}
{{--                @foreach($works as $work)--}}
{{--                    @if(count($work->child))--}}

{{--                    <li x-data="{ child: false }">--}}
{{--                        <p>--}}
{{--                            <span :class="child ? 'font-bold' : '' " @click="child = ! child" class="cursor-pointer hover:font-bold">{{$work->title}}</span>--}}
{{--                        </p>--}}
{{--                        <ul class="pl-4 my-4 scrollbar scrollbar-thin scrollbar-thumb-dgrey scrollbar-thumb-rounded scrollbar-track-rounded" x-show="child"--}}
{{--                            x-transition:enter="transition ease-out duration-1000"--}}
{{--                            x-transition:enter-start="opacity-0 translate-y-1"--}}
{{--                            x-transition:enter-end="opacity-100 translate-y-0"--}}
{{--                            x-transition:leave="transition ease-in duration-150"--}}
{{--                            x-transition:leave-start="opacity-100 translate-y-0"--}}
{{--                            x-transition:leave-end="opacity-0 translate-y-1">--}}
{{--                            @foreach($work->child as $child)--}}
{{--                                <li x-init="{{ request()->is(app()->getLocale() . '/works/' . $child->slug) ? 'child = true' : '' }} ">--}}
{{--                                    <a href="{{ route('work.view',$child->slug) }}" class="{{ (request()->is(app()->getLocale() . '/works/' . $child->slug)) ? 'font-bold' : '' }}" >{{$child->title}}</a>--}}
{{--    --}}{{--                                <a href="">child</a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    @else--}}
{{--                        <li><a href="{{ route('work.view',$work->slug) }}" class="{{ (request()->is(app()->getLocale() . '/works/' . $work->slug)) ? 'font-bold' : '' }}" >{{$work->title}}</a></li>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    @foreach($pages as $page)--}}
{{--        <p>--}}
{{--            <a href="#" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">{{ $page->title }}</a>--}}
{{--        </p>--}}
{{--    @endforeach--}}
    @include('site.partials._nav_dropdown',[
        'part' => 'exhibition',
        'title' => __('Exhibition'),
        'links' => $exhibitions
    ])
{{--    <div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/exhibitions*') ? 'true' : 'false' }}">--}}
{{--        <p>--}}
{{--            <span :class="open ? 'font-bold' : ''" @click="open = ! open" class="cursor-pointer hover:font-bold {{ (request()->is(app()->getLocale() . '/exhibitions*')) ? 'font-bold' : '' }}">{{ __('Exhibitions') }}</span>--}}
{{--        </p>--}}
{{--        @if(count($exhibitions))--}}
{{--            <ul class="pl-4 my-4 scrollbar  scrollbar-thin  scrollbar-thumb-dgrey scrollbar-track-gray-100 scrollbar-thumb-rounded scrollbar-track-rounded" x-show="open"--}}
{{--                x-transition:enter="transition ease-out duration-1000"--}}
{{--                x-transition:enter-start="opacity-0 translate-y-1"--}}
{{--                x-transition:enter-end="opacity-100 translate-y-0"--}}
{{--                x-transition:leave="transition ease-in duration-150"--}}
{{--                x-transition:leave-start="opacity-100 translate-y-0"--}}
{{--                x-transition:leave-end="opacity-0 translate-y-1">--}}
{{--                @foreach($exhibitions as $exhibition)--}}
{{--                    <li><a href="{{ route('exhibition.view',$exhibition->slug) }}" class="{{ (request()->is(app()->getLocale() . '/exhibitions/' . $exhibition->slug )) ? 'font-bold' : '' }}" >{{ $exhibition->title }}</a></li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
{{--    </div>--}}

    <p>
        <a href="{{ route('article.index') }}" class="{{ (request()->is(app()->getLocale() . '/articles')) ? 'font-bold' : '' }}">{{ __('Articles') }}</a>
    </p>
    <p>
        <a href="{{ route('publication.index') }}" class="{{ (request()->is(app()->getLocale() . '/publications')) ? 'font-bold' : '' }}">{{ __('Publications') }}</a>
    </p>
    <p>
        <a href="{{ route('page.lexicon') }}" class="{{ (request()->is(app()->getLocale() . '/lexicon')) ? 'font-bold' : '' }}">{{ __('Lexicon') }}</a>
    </p>
    <p>
        <a href="{{ route('page.contact') }}" class="{{ (request()->is(app()->getLocale() . '/contact')) ? 'font-bold' : '' }}">{{ __('Contact') }}</a>
    </p>

</nav>
