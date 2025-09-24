<x-layouts.frontend.hero 
    title="BookStore - Your Literary Journey Starts Here"
    description="Discover amazing books across all genres. From bestsellers to hidden gems, find your next great read."
>
    <div class="w-full">
        {{-- Hero Section --}}
        <section id="hero" class="min-h-screen flex items-center justify-center pb-16 md:pt-16 md:pb-16 bg-primary-dark">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl sm:text-5xl font-bold leading-tight text-secondary-light">
                            Discover Your Next Great Literary Adventure
                        </h1>
                        <p class="text-xl text-secondary mt-6 mb-8">
                            From timeless classics to contemporary masterpieces, find books that inspire, educate, and entertain.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <flux:button href="{{ route('books.index') }}" 
                                        class="!bg-secondary !text-primary-dark hover:!bg-secondary-light !px-8 !py-4 !text-lg">
                                Browse Books
                            </flux:button>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="relative w-80 h-96 bg-secondary/20 rounded-lg flex items-center justify-center">
                            <flux:icon.book-open-text class="size-32 text-secondary" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured Product Section --}}
        <section class="relative p-7" id="product">
            <div class="bg-white flex flex-col md:flex-row hover:shadow-md rounded-md">
                {{-- Left side with book cover --}}
                <div class="w-full md:w-1/2 bg-primary-dark md:rounded-l-md rounded-t-md flex justify-center items-center py-12 transition delay-150 duration-300 ease-in-out hover:scale-110">
                    <div class="relative w-64 shadow-xl">
                        <div class="aspect-[3/4] bg-gradient-to-br from-secondary/30 to-secondary/50 rounded-lg flex items-center justify-center">
                            <flux:icon.book-open-text class="size-24 text-white" />
                        </div>
                    </div>
                </div>

                {{-- Right side with book info --}}
                <div class="w-full md:w-1/2 justify-center p-7">
                    <div class="text-primary text-lg font-medium mb-4">NOW AVAILABLE</div>
                    
                    <h2 class="text-5xl font-bold text-primary mb-6">Featured Book</h2>
                    
                    <h3 class="text-2xl font-medium text-primary-dark mb-4">A Journey Through Time</h3>
                    
                    <div class="text-primary-dark mb-8">
                        <p>Discover our carefully curated selection of books that have captivated readers worldwide. This month's featured selection offers an extraordinary journey through compelling narratives and unforgettable characters.</p>
                    </div>

                    <div class="flex space-x-4">
                        <flux:button href="{{ route('books.index') }}"
                                    class="!bg-primary-dark !text-white hover:!bg-secondary">
                            Read More
                        </flux:button>
                        <flux:button variant="outline"
                                    class="!border-primary !text-primary hover:!bg-primary hover:!text-white">
                            $24.99 - Add to Cart
                        </flux:button>
                    </div>
                </div>
            </div>
        </section>

        {{-- About Section --}}
        <section class="relative p-7" id="about">
            <div class="flex flex-col md:flex-row bg-white hover:shadow-md rounded-lg">
                <div class="w-full md:w-3/4 justify-center p-7">
                    <div class="text-slate-600 dark:text-slate-300 text-lg font-medium mb-4">ABOUT US</div>
                    <h2 class="text-5xl font-bold text-slate-800 mb-6 dark:text-secondary">Your Trusted Book Companion</h2>
                    <h3 class="text-2xl font-medium text-primary mb-4">Connecting Readers with Great Stories Since 2020</h3>
                    <div class="text-slate-700 mb-8">
                        <p>At BookStore, we believe that every book has the power to transport, transform, and inspire. Our mission is to connect passionate readers with exceptional literature, from contemporary bestsellers to timeless classics.</p>
                        <p class="mt-4">With over 50,000 titles in our collection and a community of book lovers spanning the globe, we're more than just a bookstore – we're your literary companion on every reading adventure.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/4 flex justify-center items-center py-12 bg-primary-dark rounded-b-lg md:rounded-none md:rounded-r-lg order-first md:order-last">
                    <div class="relative w-64 shadow-xl">
                        <div class="aspect-square bg-gradient-to-br from-secondary/30 to-secondary/50 rounded-lg flex items-center justify-center">
                            <div class="text-center text-white">
                                <flux:icon.book-open-text class="size-16 mx-auto mb-4" />
                                <h4 class="text-xl font-semibold">50K+</h4>
                                <p class="text-sm">Books Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact Section --}}
        <section class="relative p-7" id="contact">
            <div class="flex flex-col md:flex-row gap-x-4 bg-white rounded-md hover:shadow-xs">
                {{-- Contact Form --}}
                <div class="md:w-3/5 p-8 border border-primary bg-primary rounded-l-lg">
                    <h2 class="text-white text-3xl font-bold mb-8">Contact Us</h2>

                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            {{-- First Name --}}
                            <div>
                                <input type="text" id="firstName" name="firstName" placeholder="First Name"
                                       class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary">
                            </div>

                            {{-- Last Name --}}
                            <div>
                                <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                                       class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            {{-- Email Address --}}
                            <div>
                                <input type="email" id="email" name="email" placeholder="Email Address"
                                       class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary">
                            </div>

                            {{-- Organization --}}
                            <div>
                                <input type="text" id="organization" name="organization" placeholder="Name Of Your Organization"
                                       class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary">
                            </div>
                        </div>

                        {{-- Interest Type Dropdown --}}
                        <div>
                            <select id="interestType" name="interestType"
                                    class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary appearance-none">
                                <option value="">I am Interested In</option>
                                <option value="General Enquiry">General Enquiry</option>
                                <option value="Book Recommendations">Book Recommendations</option>
                                <option value="Bulk Orders">Bulk Orders</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        {{-- Message --}}
                        <div>
                            <textarea id="message" name="message" placeholder="Message" rows="6"
                                      class="w-full px-4 py-3 rounded-sm bg-white border-0 focus:ring-2 focus:ring-secondary"></textarea>
                        </div>

                        {{-- Submit --}}
                        <div class="flex justify-end">
                            <flux:button type="submit"
                                        class="!bg-secondary hover:!bg-secondary-light !text-primary-dark !py-3 !px-8 !font-bold !uppercase">
                                Send Message
                            </flux:button>
                        </div>
                    </form>
                </div>

                {{-- Contact Info Section --}}
                <div class="w-full md:w-2/5 p-5">
                    <div class="bg-secondary p-8 mb-4 hover:bg-primary transition delay-150 duration-300 ease-in-out rounded-md hover:-translate-y-1">
                        <h3 class="text-white text-xl font-semibold mb-4">Get in Touch</h3>
                        <div class="space-y-3 text-white">
                            <p>
                                <strong>Email:</strong><br>
                                <a href="mailto:hello@bookstore.com" class="hover:underline">
                                    hello@bookstore.com
                                </a>
                            </p>
                            <p>
                                <strong>Phone:</strong><br>
                                <a href="tel:+1234567890" class="hover:underline">
                                    +1 (234) 567-8900
                                </a>
                            </p>
                            <p>
                                <strong>Address:</strong><br>
                                123 Literary Lane<br>
                                Book City, BC 12345
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-tertiary p-8 hover:bg-primary transition delay-150 duration-300 ease-in-out rounded-md hover:-translate-y-1">
                        <h3 class="text-white text-xl font-semibold mb-4">Store Hours</h3>
                        <div class="space-y-2 text-white text-sm">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>9:00 AM - 8:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>10:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>12:00 PM - 5:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.frontend.hero>
