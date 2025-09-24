<div class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo/Brand --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <div class="size-10 bg-primary rounded-lg flex items-center justify-center">
                        <flux:icon.book-open-text class="size-6 text-white" />
                    </div>
                    <span class="text-xl font-semibold text-slate-900 dark:text-white">BookStore</span>
                </a>
            </div>

            {{-- Main Navigation --}}
            <nav class="hidden md:flex items-center space-x-8">
                <flux:link href="{{ route('books.index') }}" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                    Books
                </flux:link>
                <flux:link href="#" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                    Categories
                </flux:link>
                <flux:link href="#" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                    Authors
                </flux:link>
                <flux:link href="#" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                    Best Sellers
                </flux:link>
                <flux:link href="#" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                    New Releases
                </flux:link>
            </nav>

            {{-- Right Side Actions --}}
            <div class="flex items-center space-x-4">
                {{-- Search Button --}}
                <flux:button variant="ghost" size="sm" class="hidden sm:flex">
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </flux:button>

                {{-- Dark Mode Toggle --}}
                <flux:button variant="ghost" size="sm">
                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </flux:button>

                {{-- Authentication Links --}}
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <flux:button variant="ghost" size="sm" x-on:click="open = !open">
                            <div class="flex items-center space-x-2">
                                <div class="size-6 bg-primary rounded-full flex items-center justify-center">
                                    <span class="text-xs text-white font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                </div>
                                <span class="hidden sm:block">{{ auth()->user()->name }}</span>
                            </div>
                        </flux:button>

                        <div x-show="open" 
                             x-on:click.away="open = false"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-800 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50">
                            <div class="py-1">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">
                                    <svg class="size-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>Profile
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">
                                    <svg class="size-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4l1-12z" />
                                    </svg>Orders
                                </a>
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">
                                    <svg class="size-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>Wishlist
                                </a>
                                <hr class="my-1 border-slate-200 dark:border-slate-600">
                                <a href="#" class="flex items-center px-4 py-2 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">
                                    <svg class="size-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>Logout
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <flux:link href="{{ route('login') }}" class="text-slate-700 hover:text-primary dark:text-slate-300 dark:hover:text-secondary transition-colors">
                        Sign In
                    </flux:link>
                    <flux:button href="{{ route('register') }}" variant="filled" size="sm">
                        Sign Up
                    </flux:button>
                @endauth

                {{-- Mobile Menu Button --}}
                <flux:button variant="ghost" size="sm" class="md:hidden" x-data x-on:click="$dispatch('toggle-mobile-menu')">
                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </flux:button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation Menu --}}
    <div x-data="{ open: false }" 
         x-on:toggle-mobile-menu.window="open = !open"
         x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="md:hidden bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-700">
        <div class="px-4 py-2 space-y-1">
            <flux:link href="{{ route('books.index') }}" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                Books
            </flux:link>
            <flux:link href="#" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                Categories  
            </flux:link>
            <flux:link href="#" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                Authors
            </flux:link>
            <flux:link href="#" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                Best Sellers
            </flux:link>
            <flux:link href="#" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                New Releases
            </flux:link>
            
            {{-- Mobile Auth Links --}}
            @guest
                <div class="border-t border-slate-200 dark:border-slate-700 pt-2 mt-2">
                    <flux:link href="{{ route('login') }}" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                        Sign In
                    </flux:link>
                    <flux:link href="{{ route('register') }}" class="block px-3 py-2 text-slate-700 hover:text-primary hover:bg-slate-50 dark:text-slate-300 dark:hover:text-secondary dark:hover:bg-slate-800 rounded-md transition-colors">
                        Sign Up
                    </flux:link>
                </div>
            @endguest
        </div>
    </div>
</div>
