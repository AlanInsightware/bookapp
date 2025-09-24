<x-layouts.frontend.hero 
    title="Welcome to BookStore"
    description="Your trusted source for books, knowledge, and literary adventures."
>
    <section class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
        {{-- Content Panel --}}
        <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-slate-800 dark:text-slate-100 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
            <h1 class="mb-1 font-medium text-slate-900 dark:text-slate-100">Welcome to BookStore</h1>
            <p class="mb-2 text-slate-600 dark:text-slate-400">Discover your next great read from our curated collection. <br>Start exploring with these popular sections.</p>
            
            <ul class="flex flex-col mb-4 lg:mb-6">
                <li class="flex items-center gap-4 py-2 relative before:border-l before:border-slate-200 dark:before:border-slate-600 before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                    <span class="relative py-1 bg-white dark:bg-slate-800">
                        <span class="flex items-center justify-center rounded-full bg-slate-50 dark:bg-slate-800 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-slate-600 border-slate-200">
                            <span class="rounded-full bg-slate-300 dark:bg-slate-600 w-1.5 h-1.5"></span>
                        </span>
                    </span>
                    <span class="text-slate-700 dark:text-slate-300">
                        Browse our
                        <flux:link href="#" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-primary dark:text-secondary ms-1">
                            <span>Featured Collection</span>
                            <svg
                                width="10"
                                height="11"
                                viewBox="0 0 10 11"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-2.5 h-2.5"
                            >
                                <path
                                    d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                    stroke="currentColor"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </flux:link>
                    </span>
                </li>
                <li class="flex items-center gap-4 py-2 relative before:border-l before:border-slate-200 dark:before:border-slate-600 before:bottom-1/2 before:top-0 before:start-[0.4rem] before:absolute">
                    <span class="relative py-1 bg-white dark:bg-slate-800">
                        <span class="flex items-center justify-center rounded-full bg-slate-50 dark:bg-slate-800 shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-slate-600 border-slate-200">
                            <span class="rounded-full bg-slate-300 dark:bg-slate-600 w-1.5 h-1.5"></span>
                        </span>
                    </span>
                    <span class="text-slate-700 dark:text-slate-300">
                        Discover
                        <flux:link href="#" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-primary dark:text-secondary ms-1">
                            <span>Best Sellers</span>
                            <svg
                                width="10"
                                height="11"
                                viewBox="0 0 10 11"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-2.5 h-2.5"
                            >
                                <path
                                    d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                    stroke="currentColor"
                                    stroke-linecap="square"
                                />
                            </svg>
                        </flux:link>
                    </span>
                </li>
            </ul>
            
            <div class="flex gap-3 text-sm leading-normal">
                <flux:button href="#" variant="filled" size="sm" class="!bg-primary hover:!bg-primary-dark !text-white">
                    Start Shopping
                </flux:button>
            </div>
        </div>

        {{-- Visual Panel --}}
        <div class="bg-gradient-to-br from-secondary/20 to-primary/10 dark:from-secondary/10 dark:to-primary/20 relative lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden flex items-center justify-center">
            {{-- Book Store Visual --}}
            <div class="text-center space-y-6 p-8">
                <div class="mx-auto size-32 bg-primary rounded-2xl flex items-center justify-center shadow-lg">
                    <flux:icon.book-open-text class="size-16 text-white" />
                </div>
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold text-primary dark:text-secondary">BookStore</h2>
                    <p class="text-slate-600 dark:text-slate-400">Your Literary Journey Begins Here</p>
                </div>
                <div class="flex justify-center space-x-4 opacity-60">
                    <div class="size-3 bg-primary rounded-full animate-pulse"></div>
                    <div class="size-3 bg-secondary rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                    <div class="size-3 bg-tertiary rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
                </div>
            </div>
            
            <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
        </div>
    </section>
</x-layouts.frontend.hero>
