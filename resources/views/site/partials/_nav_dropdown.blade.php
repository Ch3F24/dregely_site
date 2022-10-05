<div x-data="{ open: false }" x-init="open = {{ request()->is(app()->getLocale() . '/' . $part . '*') ? 'true' : 'false' }}">
    @if(isset($gallery))
        <a href="{{ route( 'work.index') }}">
            <span :class="open ? 'font-medium' : ''" @click="open = ! open" class="cursor-pointer hover:font-medium {{ (request()->is(app()->getLocale() . '/' . $part . '*')) ? 'font-medium' : '' }}">{{ $title }}</span>
        </a>
    @else
        <p>
            <span :class="open ? 'font-medium' : ''" @click="open = ! open" class="cursor-pointer hover:font-medium {{ (request()->is(app()->getLocale() . '/' . $part . '*')) ? 'font-medium' : '' }}">{{ $title }}</span>
        </p>
    @endif
    @if(count($links))
        <ul class="pl-4 my-2 scrollbar overflow-x-hidden scrollbar-thin scrollbar-thumb-dgrey scrollbar-thumb-rounded scrollbar-track-rounded"
            @if(isset($gallery)) id="gallery-list" @endif
            x-show="open" style="display: none"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1">
            @foreach($links as $link)
                @if($link->child && count($link->child))
                    <li x-data="{ child: false }" x-init="child = {{ request()->is(app()->getLocale() . '/' . $part . '/parent/*') ? 'true' : 'false' }}">
                        @if(isset($gallery))
                            <a href="{{ route( 'work.parent',$link->slug) }}">
{{--                            <p class="gallery-parent" data-link="{{ route('api.work.parent',$link->slug) }}">--}}
                                <span :class="child ? 'font-medium' : ''" @click="child = ! child" class="cursor-pointer hover:font-medium {{ (request()->is(app()->getLocale() . '/' . $part .  '/parent/*')) ? 'font-medium active' : '' }}">{{ $link->title }}</span>
                            </p>
                        @else
                            <p>
                                <span :class="child ? 'font-medium' : '' " @click="child = ! child" class="cursor-pointer hover:font-medium">{{ $link->title }}</span>
                            </p>
                        @endif
                        <ul class="pl-4 my-4 scrollbar overflow-x-hidden scrollbar-thin scrollbar-thumb-dgrey scrollbar-thumb-rounded scrollbar-track-rounded" x-show="child"
                            x-transition:enter="transition ease-out duration-1000"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1">
                            @foreach($link->child as $child)
                                <li x-init="{{ request()->is(app()->getLocale() . '/'. $part .'/' . $child->slug) ? 'child = true' : '' }} ">
                                    <a href="{{ route($part . '.view',$child->slug) }}" class="{{ (request()->is(app()->getLocale() . '/' . $part . '/' . $child->slug)) ? 'font-medium' : '' }}" >{{$child->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route($part . '.view',$link->slug) }}" class="{{ (request()->is(app()->getLocale() . '/' . $part . '/' . $link->slug)) ? 'font-medium' : '' }}" >{{ $link->title }}</a></li>
                @endif
            @endforeach
        </ul>
    @endif
</div>
