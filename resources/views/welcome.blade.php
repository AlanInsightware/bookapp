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
                        <h1 class="text-4xl sm:text-5xl font-bold leading-tight text-secondary-light">Embark on a Journey of Silence</h1>
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

                    <h2 class="text-5xl font-bold text-primary mb-6">Silent Energy</h2>

                    <h3 class="text-2xl font-medium text-primary-dark mb-4">A Journey of Silence</h3>

                    <div class="text-primary-dark mb-8">
                        <p>This profound book, Silent Energy, talks to your unconscious mind even though you may consciously resist its Truth. It shares insights into how you can move from a state of dis-space-ment to one that is aligned to the frequency of the Silent Energy in which you thrive in your rightful space in harmony with the natural ordered system, living in the now with Love and Compassion in the simultaneous movement of life and death.</p>
                    </div>

                    <div class="flex space-x-4">
                        <flux:button href="{{ route('books.index') }}"
                                    class="!bg-primary-dark !text-white hover:!bg-secondary">
                            Read More
                        </flux:button>
                        <flux:button
                            class="!bg-primary-dark !text-white hover:!bg-secondary">
                            Buy Now
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
                    <h2 class="text-5xl font-bold text-slate-800 mb-6 dark:text-secondary">CMervin Govender</h2>
{{--                    <h3 class="text-2xl font-medium text-primary mb-4">Connecting Readers with Great Stories Since 2020</h3>--}}
                    <div class="text-slate-700 mb-8">
                        <p>My life and work center on what I call the Silent Energy, and are underpinned by my belief that I Am All Humanity and All Humanity is Me.
                            My work is inspired by a profound life-changing experience which I had at about 49 years of age. It was not really an experience but an immersion with the Silent Energy. </p>
                        <p class="mt-4">This Silent Energy is a No-thing-ness because it is everything. It is formless, nameless, timeless, infinite, pure, uncontaminated Energy. This Energy is the source of everything in the natural system.</p>
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
