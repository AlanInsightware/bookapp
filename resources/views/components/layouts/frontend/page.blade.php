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
    <body class="bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-100 min-h-screen antialiased">
        <!-- Navigation -->
        <livewire:frontend.navigation />
        
        <!-- Page Content -->
        <div class="py-8">
            <!-- Breadcrumbs (Optional) -->
            @if(isset($breadcrumbs))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
                    {{ $breadcrumbs }}
                </div>
            @endif

            <!-- Page Header -->
            @if(isset($pageHeader))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
                    {{ $pageHeader }}
                </div>
            @endif

            <!-- Main Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-white dark:bg-slate-800 border-t border-slate-200 dark:border-slate-700 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                @if(isset($footer))
                    {{ $footer }}
                @else
                    {{-- Default Footer Content --}}
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="size-8 bg-primary rounded-lg flex items-center justify-center">
                                    <flux:icon.book-open-text class="size-5 text-white" />
                                </div>
                                <span class="text-lg font-semibold text-slate-900 dark:text-white">BookStore</span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 text-sm">
                                Your trusted source for books, knowledge, and literary adventures.
                            </p>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-slate-900 dark:text-white mb-4">Shop</h3>
                            <ul class="space-y-2 text-sm">
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">All Books</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Best Sellers</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">New Releases</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Categories</flux:link></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-slate-900 dark:text-white mb-4">Support</h3>
                            <ul class="space-y-2 text-sm">
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Contact Us</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Help Center</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Shipping</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Returns</flux:link></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-slate-900 dark:text-white mb-4">Company</h3>
                            <ul class="space-y-2 text-sm">
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">About Us</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Careers</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Privacy</flux:link></li>
                                <li><flux:link href="#" class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Terms</flux:link></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-slate-200 dark:border-slate-700 mt-8 pt-8 text-center">
                        <p class="text-slate-600 dark:text-slate-400 text-sm">
                            © {{ date('Y') }} BookStore. All rights reserved.
                        </p>
                    </div>
                @endif
            </div>
        </footer>

        <!-- Additional Scripts -->
        {{ $scripts ?? '' }}
    </body>
</html>
