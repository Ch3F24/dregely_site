<nav class="grid gap-y-1 transition">
    <div x-data="{ open: false }">
        <p>
            <a href="javascript:void(0);" @click="open = ! open">muvek</a>
        </p>
        <ul class="ml-4" x-show="open"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1">
            <li><a href="#">egyes</a></li>
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
