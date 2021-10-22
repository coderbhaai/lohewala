<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$meta->title}}</title>
        <meta name="description" content="{{$meta->description}}"/>
        <meta property="og:url" content="https://www.lohewala.com{{$meta->url}}"/>
        <meta property="og:title" content="{{$meta->title}}"/>
        <meta property="og:description" content="{{$meta->description}}"/>
        <meta property="og:image" content="https://www.lohewala.com{{$meta->image}}"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:url" content="https://www.lohewala.com{{$meta->url}}"/>
        <meta name="twitter:title" content="{{$meta->title}}"/>
        <meta name="twitter:description" content="{{$meta->description}}"/>
        <meta name="twitter:image" content="https://www.lohewala.com{{$meta->image}}"/>
        <link rel="canonical" href="https://www.lohewala.com{{$meta->url}}"/>
        <link rel="alternate" href="https://www.lohewala.com{{$meta->url}}" hreflang="x-default" />
        <link rel="alternate" hreflang="en" href="https://www.lohewala.com{{$meta->url}}">
        <link rel="preconnect" href="https://www.lohewala.com{{$meta->url}}" />
        <link rel="dns-prefetch" href="https://www.lohewala.com{{$meta->url}}" />
        <link rel="preload" as="image" href="https://www.lohewala.com{{$meta->image}}"/>
        <meta name="allow-search" content="yes"/>
        <meta property="og:locale" content="en_US"/>
        <meta property="og:type" content="website"/>
        <meta property="og:site_name" content="Amitkk"/>
        <meta property="article:modified_time" content="2021-08-23T17:49:25+00:00"/>
        <meta property="fb:app_id" content="154761472308630"/>
        <link rel="icon" type="image/x-icon" href="/images/icons/favicon.png">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
    </head>
    <body class="antialiased">
        <x-jet-banner/>
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <main>{{ $slot }}</main>
        </div>
        @livewire('parts.footer')
        @if( Request::route()->getName()!= 'addblog' && Request::route()->getName()!= 'updateblog' && Request::route()->getName()!= 'addproduct' && Request::route()->getName()!= 'updateproduct')
            <script src="/js/jquery-3.1.0.js"></script>
        @endif
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('modals')
        @livewireScripts
    </body>
</html>
