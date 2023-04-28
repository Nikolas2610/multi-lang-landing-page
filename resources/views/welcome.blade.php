<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Top Trader</title>
</head>

<body class="h-screen overflow-x-auto relative font-gilroy">
    <x-navbar lang="{{ $language }}"></x-navbar>
    <x-hero />
    <x-top-trader-platform />
    <x-meta-trader />
    <x-what-if />
    <x-footer />
    {{-- <h1 class="text-3xl font-bold underline bg-secondary h-full text-primary flex justify-center items-center">
        {{ $language }}
    </h1>
    <h1 class="text-3xl font-bold underline  h-full text-black flex justify-center items-center">
        Hello world 2
    </h1> --}}
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
