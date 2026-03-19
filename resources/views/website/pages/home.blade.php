@extends('website.layouts.app')

@section('title', 'Home')

@section('content')

    <main class="flex-1">
        <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-col gap-8 py-16 text-center items-center">
        <h1 class="text-slate-900 dark:text-white text-5xl font-black leading-tight tracking-[-0.033em] md:text-6xl max-w-[800px]">
                                        Find Your Dream Job Today
                                    </h1>
        <p class="text-slate-600 dark:text-slate-300 text-lg font-normal leading-relaxed max-w-[600px]">
                                        Connect with top employers and discover opportunities that match your skills and passion. Your next big career move starts here.
                                    </p>
        <div class="w-full max-w-[800px] mt-8 p-2 bg-white dark:bg-neutral-dark/40 border border-neutral-light dark:border-neutral-dark rounded-full shadow-lg flex flex-col md:flex-row gap-2">
        <div class="flex-1 flex items-center px-4">
        <i class="bx bx-search text-slate-400 mr-2"></i>
        <input class="w-full bg-transparent border-none focus:ring-0 text-slate-900 dark:text-white placeholder-slate-400 outline-none h-12" placeholder="Job title, keywords, or company" type="text"/>
        </div>
        <div class="hidden md:block w-px h-8 bg-neutral-light dark:bg-neutral-dark my-auto"></div>
        <div class="flex-1 flex items-center px-4">
        <i class="bx bx-map-pin text-slate-400 mr-2"></i>
        <input class="w-full bg-transparent border-none focus:ring-0 text-slate-900 dark:text-white placeholder-slate-400 outline-none h-12" placeholder="City, state, or remote" type="text"/>
        </div>
        <a class="flex items-center justify-center rounded-full h-12 px-8 bg-primary hover:bg-primary-dark transition-colors text-white text-base font-bold whitespace-nowrap m-1 md:m-0" href="{{ route('browse') }}" role="button">
                                            Search Jobs
                                        </a>
        </div>
        <div class="flex gap-4 items-center mt-4 text-sm text-slate-500 dark:text-slate-400">
        <span class="font-medium">Popular:</span>
        <a class="hover:text-primary transition-colors" href="{{ route('browse') }}">Software Engineer</a>
        <a class="hover:text-primary transition-colors" href="{{ route('browse') }}">Product Manager</a>
        <a class="hover:text-primary transition-colors" href="{{ route('browse') }}">Data Scientist</a>
        </div>
        </div>
        <div class="py-12">
        <h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight mb-8">Browse Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a class="flex flex-col items-center gap-4 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:border-primary dark:hover:border-primary hover:shadow-md transition-all group" href="{{ route('browse') }}">
        <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
        <i class="bx bx-code-alt text-3xl"></i>
        </div>
        <h3 class="text-slate-900 dark:text-white font-bold text-center">Development</h3>
        <span class="text-slate-500 text-sm">1,245 Jobs</span>
        </a>
        <a class="flex flex-col items-center gap-4 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:border-primary dark:hover:border-primary hover:shadow-md transition-all group" href="{{ route('browse') }}">
        <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
        <i class="bx bxs-megaphone text-3xl"></i>
        </div>
        <h3 class="text-slate-900 dark:text-white font-bold text-center">Marketing</h3>
        <span class="text-slate-500 text-sm">853 Jobs</span>
        </a>
        <a class="flex flex-col items-center gap-4 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:border-primary dark:hover:border-primary hover:shadow-md transition-all group" href="{{ route('browse') }}">
        <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
        <i class="bx bxs-brush text-3xl"></i>
        </div>
        <h3 class="text-slate-900 dark:text-white font-bold text-center">Design</h3>
        <span class="text-slate-500 text-sm">621 Jobs</span>
        </a>
        <a class="flex flex-col items-center gap-4 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:border-primary dark:hover:border-primary hover:shadow-md transition-all group" href="{{ route('browse') }}">
        <div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
        <i class="bx bx-trending-up text-3xl"></i>
        </div>
        <h3 class="text-slate-900 dark:text-white font-bold text-center">Sales</h3>
        <span class="text-slate-500 text-sm">1,029 Jobs</span>
        </a>
        </div>
        </div>
        <div class="py-12">
        <div class="flex justify-between items-center mb-8">
        <h2 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight">Featured Jobs</h2>
        <a class="text-primary font-bold hover:text-primary-dark transition-colors flex items-center gap-1" href="{{ route('browse') }}">View All <i class="bx bx-arrow-forward text-sm"></i></a>
        </div>
        <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row gap-6 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:shadow-md transition-shadow items-start md:items-center">
        <div class="size-16 rounded-xl bg-slate-100 flex items-center justify-center flex-shrink-0 border border-neutral-light">
        <i class="bx bx-building text-3xl text-slate-700"></i>
        </div>
        <div class="flex-1 flex flex-col gap-2">
        <h3 class="text-slate-900 dark:text-white text-xl font-bold">Senior Full Stack Engineer</h3>
        <div class="flex flex-wrap gap-4 text-sm text-slate-500 dark:text-slate-400">
        <span class="flex items-center gap-1"><i class="bx bx-briefcase text-base text-primary"></i> TechCorp Inc.</span>
        <span class="flex items-center gap-1"><i class="bx bx-map-pin text-base text-primary"></i> San Francisco, CA (Hybrid)</span>
        <span class="flex items-center gap-1"><i class="bx bx-credit-card text-base text-primary"></i> $140k - $180k</span>
        </div>
        </div>
        <div class="flex gap-3 mt-4 md:mt-0 w-full md:w-auto">
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary-light hover:bg-neutral-light text-primary font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Save
                                                </a>
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary hover:bg-primary-dark text-white font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Apply
                                                </a>
        </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:shadow-md transition-shadow items-start md:items-center">
        <div class="size-16 rounded-xl bg-slate-100 flex items-center justify-center flex-shrink-0 border border-neutral-light">
        <i class="bx bx-palette text-3xl text-slate-700"></i>
        </div>
        <div class="flex-1 flex flex-col gap-2">
        <h3 class="text-slate-900 dark:text-white text-xl font-bold">UX/UI Designer</h3>
        <div class="flex flex-wrap gap-4 text-sm text-slate-500 dark:text-slate-400">
        <span class="flex items-center gap-1"><i class="bx bx-briefcase text-base text-primary"></i> Creative Solutions</span>
        <span class="flex items-center gap-1"><i class="bx bx-map-pin text-base text-primary"></i> Remote</span>
        <span class="flex items-center gap-1"><i class="bx bx-credit-card text-base text-primary"></i> $90k - $120k</span>
        </div>
        </div>
        <div class="flex gap-3 mt-4 md:mt-0 w-full md:w-auto">
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary-light hover:bg-neutral-light text-primary font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Save
                                                </a>
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary hover:bg-primary-dark text-white font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Apply
                                                </a>
        </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6 p-6 rounded-2xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 hover:shadow-md transition-shadow items-start md:items-center">
        <div class="size-16 rounded-xl bg-slate-100 flex items-center justify-center flex-shrink-0 border border-neutral-light">
        <i class="bx bx-store text-3xl text-slate-700"></i>
        </div>
        <div class="flex-1 flex flex-col gap-2">
        <h3 class="text-slate-900 dark:text-white text-xl font-bold">Product Marketing Manager</h3>
        <div class="flex flex-wrap gap-4 text-sm text-slate-500 dark:text-slate-400">
        <span class="flex items-center gap-1"><i class="bx bx-briefcase text-base text-primary"></i> Global Brands</span>
        <span class="flex items-center gap-1"><i class="bx bx-map-pin text-base text-primary"></i> New York, NY</span>
        <span class="flex items-center gap-1"><i class="bx bx-credit-card text-base text-primary"></i> $110k - $150k</span>
        </div>
        </div>
        <div class="flex gap-3 mt-4 md:mt-0 w-full md:w-auto">
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary-light hover:bg-neutral-light text-primary font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Save
                                                </a>
        <a class="flex-1 md:flex-none flex items-center justify-center rounded-full h-10 px-6 bg-primary hover:bg-primary-dark text-white font-bold transition-colors" href="{{ route('login') }}" role="button">
                                                    Apply
                                                </a>
        </div>
        </div>
        </div>
        </div>
        <div class="py-16 mt-8">
        <div class="rounded-3xl overflow-hidden bg-primary/5 border border-primary/20 p-10 md:p-16 text-center flex flex-col items-center gap-6 relative">
        <div class="absolute top-0 left-0 w-32 h-32 bg-primary/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-primary/10 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
        <h2 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight z-10">
                                            Are you an Employer?
                                        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-lg z-10 max-w-[600px]">
                                            Find the right talent for your company. Post a job today and reach millions of qualified candidates.
                                        </p>
        <a class="flex items-center justify-center rounded-full h-14 px-8 bg-primary hover:bg-primary-dark transition-colors text-white text-lg font-bold z-10 mt-2 shadow-lg shadow-primary/30" href="{{ route('register') }}" role="button">
                                            Post a Job Now
                                        </a>
        </div>
        </div>
        </div>
        </div>
    </main>

@endsection
