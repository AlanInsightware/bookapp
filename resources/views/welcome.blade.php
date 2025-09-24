<x-layouts.frontend.hero
    title="BookStore - Your Literary Journey Starts Here"
    description="Discover amazing books across all genres. From bestsellers to hidden gems, find your next great read."
>
    {{-- Hero Section --}}
    <div class="w-full max-w-7xl">
        <section class="bg-gradient-to-r from-primary to-primary-dark text-white rounded-2xl p-8 lg:p-16 mb-16">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                        Find Your Next
                        <span class="text-secondary">Great Read</span>
                    </h1>
                    <p class="text-xl lg:text-2xl mb-8 text-slate-100">
                        Discover thousands of books across all genres. From bestselling novels to academic texts, we have something for every reader.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <flux:button href="{{ route('books.index') }}" class="!bg-secondary !text-primary-dark hover:!bg-secondary-light !px-8 !py-4 !text-lg">
                            Browse Books
                        </flux:button>
                        <flux:button variant="outline" class="!border-white !text-white hover:!bg-white hover:!text-primary !px-8 !py-4 !text-lg">
                            Best Sellers
                        </flux:button>
                    </div>
                </div>
                <div class="flex-1 relative">
                    <div class="relative w-full max-w-md mx-auto">
                        <div class="absolute inset-0 bg-secondary opacity-20 rounded-2xl transform rotate-6"></div>
                        <div class="relative bg-white rounded-2xl p-8 shadow-2xl">
                            <div class="flex items-center justify-center h-64 bg-gradient-to-br from-slate-100 to-slate-200 rounded-lg mb-4">
                                <flux:icon.book-open-text class="size-20 text-primary" />
                            </div>
                            <h3 class="text-xl font-semibold text-primary mb-2">Featured Book</h3>
                            <p class="text-slate-600">Discover our book of the month and join thousands of readers worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured Books Section --}}
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white mb-4">
                    Featured Books
                </h2>
                <p class="text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Handpicked selections from our curators, featuring the latest releases and timeless classics.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @for($i = 1; $i <= 4; $i++)
                    <div class="group bg-white dark:bg-slate-800 rounded-xl p-6 shadow-sm hover:shadow-xl transition-shadow">
                        <div class="aspect-[3/4] bg-gradient-to-br from-primary/10 to-secondary/20 rounded-lg mb-4 flex items-center justify-center relative overflow-hidden">
                            <flux:icon.book-open-text class="size-16 text-primary opacity-40" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white mb-2 group-hover:text-primary transition-colors">
                            The Great Adventure {{ $i }}
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-2">by Author Name</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-primary">$24.99</span>
                            <flux:button size="sm" class="!bg-primary hover:!bg-primary-dark !text-white">
                                Add to Cart
                            </flux:button>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-8">
                <flux:button href="{{ route('books.index') }}" variant="outline" class="!border-primary !text-primary hover:!bg-primary hover:!text-white">
                    View All Books
                </flux:button>
            </div>
        </section>

        {{-- Categories Section --}}
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white mb-4">
                    Browse by Category
                </h2>
                <p class="text-xl text-slate-600 dark:text-slate-400">
                    Find books in your favorite genres
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $categories = [
                        ['name' => 'Fiction', 'count' => '1,240', 'color' => 'from-blue-500 to-blue-600'],
                        ['name' => 'Non-Fiction', 'count' => '890', 'color' => 'from-green-500 to-green-600'],
                        ['name' => 'Biography', 'count' => '456', 'color' => 'from-purple-500 to-purple-600'],
                        ['name' => 'Science', 'count' => '623', 'color' => 'from-red-500 to-red-600'],
                        ['name' => 'History', 'count' => '745', 'color' => 'from-yellow-500 to-yellow-600'],
                        ['name' => 'Romance', 'count' => '934', 'color' => 'from-pink-500 to-pink-600'],
                        ['name' => 'Mystery', 'count' => '567', 'color' => 'from-indigo-500 to-indigo-600'],
                        ['name' => 'Fantasy', 'count' => '823', 'color' => 'from-emerald-500 to-emerald-600'],
                    ]
                @endphp

                @foreach($categories as $category)
                    <a href="#" class="block group">
                        <div class="bg-gradient-to-br {{ $category['color'] }} rounded-xl p-6 text-white text-center group-hover:scale-105 transition-transform">
                            <h3 class="text-lg font-semibold mb-2">{{ $category['name'] }}</h3>
                            <p class="text-sm opacity-90">{{ $category['count'] }} books</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

        {{-- About Section --}}
        <section class="mb-16">
            <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl p-8 lg:p-16">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="flex-1">
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white mb-6">
                            Why Choose BookStore?
                        </h2>
                        <div class="space-y-4 text-lg text-slate-600 dark:text-slate-400">
                            <div class="flex items-start gap-3">
                                <div class="size-6 bg-primary rounded-full flex items-center justify-center mt-1 shrink-0">
                                    <svg class="size-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p><strong class="text-slate-900 dark:text-white">Curated Selection:</strong> Every book is carefully selected by our team of literary experts.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="size-6 bg-primary rounded-full flex items-center justify-center mt-1 shrink-0">
                                    <svg class="size-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p><strong class="text-slate-900 dark:text-white">Fast Delivery:</strong> Free shipping on orders over $35, delivered within 2-3 business days.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="size-6 bg-primary rounded-full flex items-center justify-center mt-1 shrink-0">
                                    <svg class="size-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <p><strong class="text-slate-900 dark:text-white">Community:</strong> Join our book club with over 50,000 active readers worldwide.</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <flux:button href="#" variant="filled" class="!bg-primary hover:!bg-primary-dark !text-white">
                                Learn More About Us
                            </flux:button>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="relative">
                            <div class="bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl p-8 h-80 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="size-24 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                        <flux:icon.book-open-text class="size-12 text-white" />
                                    </div>
                                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">50K+ Books</h3>
                                    <p class="text-slate-600 dark:text-slate-400">In our collection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Newsletter Section --}}
        <section class="mb-16">
            <div class="bg-primary rounded-2xl p-8 lg:p-16 text-center text-white">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    Stay Updated
                </h2>
                <p class="text-xl text-slate-100 mb-8 max-w-2xl mx-auto">
                    Subscribe to our newsletter and be the first to know about new releases, special offers, and book recommendations.
                </p>
                <div class="max-w-md mx-auto">
                    <div class="flex gap-4">
                        <input type="email"
                               placeholder="Enter your email"
                               class="flex-1 px-4 py-3 rounded-lg text-slate-900 border-none focus:ring-2 focus:ring-secondary">
                        <flux:button class="!bg-secondary !text-primary-dark hover:!bg-secondary-light !px-6">
                            Subscribe
                        </flux:button>
                    </div>
                    <p class="text-sm text-slate-200 mt-4">
                        We respect your privacy. Unsubscribe at any time.
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-layouts.frontend.hero>
