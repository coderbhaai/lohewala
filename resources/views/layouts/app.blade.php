<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="http://lohewala.test{{ $meta['url'] }}">
        <link rel="alternate" href="http://lohewala.test{{ $meta['url'] }}" hreflang="x-default">
        <link rel="alternate" hreflang="en" href="http://lohewala.test{{ $meta['url'] }}">
        <link rel="preconnect" href="http://lohewala.test{{ $meta['url'] }}">
        <link rel="dns-prefetch" href="http://lohewala.test{{ $meta['url'] }}">
        <meta name="allow-search" content="yes">        
        <meta property="article:published_time" content="{{  \Carbon\Carbon::now()->format('Y-m-d') }}T14:30:00+00:00">
        <meta property="article:modified_time" content="{{  \Carbon\Carbon::now()->format('Y-m-d') }}T00:15:10+00:00">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $meta['title'] }}">
        <meta property="og:description" content="{{ $meta['description'] }}">
        <meta property="og:url" content="http://lohewala.test{{ $meta['url'] }}">
        <meta property="og:site_name" content="{{ config('amitkk.brand') }}">
        <meta property="og:image" content="http://lohewala.test{{ $meta['image'] }}">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="671">
        <meta property="og:image:type" content="image/png">

        <meta name="twitter:title" content="{{ $meta['title'] }}">
        <meta name="twitter:description" content="{{ $meta['description'] }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@AmitdoubleK">
        <meta name="twitter:site" content="@AmitdoubleK">
        <meta name="twitter:label1" content="Written by">
        <meta name="twitter:data1" content="{{ config('amitkk.owner') }}">
        <meta name="twitter:label2" content="Est. reading time">
        <meta name="twitter:data2" content="10 minutes">
        <meta name="twitter:url" content="http://lohewala.test{{ $meta['url'] }}">
        <meta name="twitter:image" content="http://lohewala.test{{ $meta['image'] }}">
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
