<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/LOGO.png') }}" type="image/icon type">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Victor+Mono:wght@400;700&display=swap" rel="stylesheet">

    {{-- css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="/dist/output.css" rel="stylesheet">
    <script src="{{asset('js')}}"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>

<body class="relative h-full">

    @include('layouts.loading')
    @include('layouts.side-menu')
    @include('layouts.nav')
    {{ $slot }}
    @include('layouts.footer')
    @livewireScripts
</body>

</html>
