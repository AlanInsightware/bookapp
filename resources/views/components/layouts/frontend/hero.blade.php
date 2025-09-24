<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

        @if(isset($description))
            <meta name="description" content="{{ $description }}">
        @endif

        <!-- Favicon -->
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance

        <!-- Additional Head Content -->
        {{ $head ?? '' }}
    </head>
    <body class="bg-slate-50 text-slate-900 dark:text-slate-100 min-h-screen antialiased">
        <!-- Navigation -->
        <livewire:frontend.navigation />

        <!-- Hero/Landing Content -->
        <main class="flex items-center justify-center w-full p-6 lg:p-8 min-h-[calc(100vh-64px)] transition-opacity opacity-100 duration-750 starting:opacity-0">
            {{ $slot }}
        </main>

        <!-- Additional Scripts -->
        {{ $scripts ?? '' }}
    </body>
</html>
