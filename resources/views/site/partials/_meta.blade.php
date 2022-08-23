<title>{{ config('app.name', 'Laravel')  }} {{ isset($title) ? ' - ' . $title : '' }} {{ isset($meta->title) ? ' - ' . $meta->title : ''}}</title>
{{--<title>{{ config('app.name', 'Laravel') . isset($meta->title) ? ' - ' . $meta->title : ''}}</title>--}}
<meta data-n-head="ssr" data-hid="description" name="description" content="{{ isset($meta->meta_description) ? $meta->meta_description : $site_description ?? '' }}">
<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
<meta data-hid="charset" charset="utf-8">
<meta data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes">
<meta data-hid="apple-mobile-web-app-title" name="apple-mobile-web-app-title" content="{{ config('app.name', 'Laravel') }}">
{{--<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">--}}
{{--<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">--}}
{{--<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">--}}


<meta data-hid="og:type" property="og:type" content="{{ isset($meta->title) ? 'art' : 'website' }}">

<meta property="og:url" content="{{url()->current()}}"/>
<meta property="og:title" content="{{ isset($meta->title) ? $meta->title : config('app.name', 'Laravel') }}"/>
<meta property="og:description" content="{{ isset($meta->meta_description) ? $meta->meta_description : $site_description ?? '' }}"/>
{{--<meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />--}}

{{--<meta data-hid="twitter:card" name="twitter:card" content="summary">--}}
{{--<meta data-hid="twitter:site" name="twitter:site" content="@telexhu">--}}
<meta name="twitter:title" content="Twitter leiras">
<meta name="twitter:description" content="{{ isset($meta->meta_description) ? $meta->meta_description : $site_description ?? '' }}">

@if(isset($meta->title) && count($meta->tags))
    @foreach($meta->tags as $tag)
        <meta name="art:tag" content="{{ $tag->name }}">
    @endforeach

    <meta name="keywords" content="{{ $site_keywords }},{{ implode(',',$meta->tags->pluck('name')->toArray()) }}">
@else
    <meta name="keywords" content="{{ $site_keywords }}">
@endif
