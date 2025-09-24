<x-layouts.frontend.page 
    title="All Books"
    description="Browse our complete collection of books across all genres and categories."
>
    {{-- Breadcrumbs --}}
    <x-slot name="breadcrumbs">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-slate-700 hover:text-primary dark:text-slate-400 dark:hover:text-secondary">
                        <svg class="size-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="size-3 text-slate-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1 text-sm font-medium text-slate-500 md:ml-2 dark:text-slate-400">Books</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    {{-- Page Header --}}
    <x-slot name="pageHeader">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white">All Books</h1>
                <p class="mt-2 text-slate-600 dark:text-slate-400">
                    Discover your next great read from our extensive collection
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <flux:button variant="outline" size="sm">
                    <svg class="size-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filters
                </flux:button>
                <flux:button variant="outline" size="sm">
                    <svg class="size-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Search
                </flux:button>
            </div>
        </div>
    </x-slot>

    {{-- Main Content --}}
    <div class="space-y-8">
        {{-- Filters Bar --}}
        <div class="flex items-center justify-between bg-white dark:bg-slate-800 rounded-lg p-4 shadow-sm">
            <div class="flex items-center space-x-4">
                <flux:select placeholder="Category">
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-Fiction</option>
                    <option value="biography">Biography</option>
                    <option value="science">Science</option>
                </flux:select>
                
                <flux:select placeholder="Sort by">
                    <option value="title">Title</option>
                    <option value="author">Author</option>
                    <option value="price">Price</option>
                    <option value="newest">Newest</option>
                </flux:select>
            </div>
            
            <div class="text-sm text-slate-600 dark:text-slate-400">
                Showing 1-12 of 156 books
            </div>
        </div>

        {{-- Books Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @for($i = 1; $i <= 8; $i++)
                <flux:card class="group hover:shadow-lg transition-shadow">
                    <div class="aspect-[3/4] bg-gradient-to-br from-slate-200 to-slate-300 dark:from-slate-600 dark:to-slate-700 rounded-lg mb-4 flex items-center justify-center">
                        <flux:icon.book-open-text class="size-12 text-slate-400 dark:text-slate-500" />
                    </div>
                    
                    <div class="space-y-2">
                        <h3 class="font-semibold text-slate-900 dark:text-white group-hover:text-primary dark:group-hover:text-secondary transition-colors">
                            Sample Book Title {{ $i }}
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            by Author Name {{ $i }}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-primary dark:text-secondary">
                                ${{ rand(15, 45) }}.99
                            </span>
                            <flux:button size="sm" variant="filled" class="!bg-primary hover:!bg-primary-dark !text-white">
                                Add to Cart
                            </flux:button>
                        </div>
                    </div>
                </flux:card>
            @endfor
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center">
            <nav class="flex items-center justify-between border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-4 py-3 rounded-lg shadow-sm">
                <div class="flex justify-between flex-1 sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-md hover:bg-slate-50">Previous</a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-md hover:bg-slate-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-slate-700 dark:text-slate-300">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">12</span> of <span class="font-medium">97</span> results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm font-medium text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-600">
                                <span class="sr-only">Previous</span>
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-600">1</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-600 bg-primary text-white text-sm font-medium">2</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-600">3</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-600">4</a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-sm font-medium text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-600">
                                <span class="sr-only">Next</span>
                                <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</x-layouts.frontend.page>
