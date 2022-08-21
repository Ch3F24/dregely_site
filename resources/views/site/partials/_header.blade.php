<header class="container flex">
    <div class="logo">
        <a href="/" class=" text-4xl font-bold">Drégely<br>Imre</a>
    </div>
    <div>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if(LaravelLocalization::getCurrentLocale() !== $localeCode)
                <a
                    rel="alternate"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    {{ strtoupper($localeCode) }}
                </a>
            @endif
        @endforeach
    </div>
</header>
