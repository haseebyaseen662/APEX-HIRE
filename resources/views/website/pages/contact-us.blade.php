@extends('website.layouts.app')

@section('title', 'Contact Us')

@section('content')

    <main class="flex-grow flex flex-col lg:flex-row w-full max-w-[1440px] mx-auto">
        <!-- Left Side: Contact Form -->
        <div class="w-full lg:w-3/5 p-6 lg:p-12 xl:p-20 flex flex-col justify-center">
        <div class="max-w-2xl mx-auto w-full">
        <div class="mb-10">
        <span class="inline-block py-1 px-3 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">Contact Us</span>
        <h1 class="text-slate-900 dark:text-white text-4xl lg:text-5xl font-bold leading-tight mb-4">Get in touch</h1>
        <p class="text-slate-500 dark:text-slate-400 text-lg leading-relaxed">
                                Have a question or just want to say hi? We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.
                            </p>
        </div>
        <form class="space-y-6" action="{{ route('contact') }}">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold" for="first-name">First name</label>
        <div class="relative">
        <i class="bx bx-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]"></i>
        <input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary placeholder:text-slate-400 dark:placeholder:text-slate-500 transition-all" id="first-name" placeholder="Jane" type="text"/>
        </div>
        </div>
        <div class="space-y-2">
        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold" for="last-name">Last name</label>
        <div class="relative">
        <i class="bx bx-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]"></i>
        <input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary placeholder:text-slate-400 dark:placeholder:text-slate-500 transition-all" id="last-name" placeholder="Doe" type="text"/>
        </div>
        </div>
        </div>
        <div class="space-y-2">
        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold" for="email">Email address</label>
        <div class="relative">
        <i class="bx bx-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]"></i>
        <input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary placeholder:text-slate-400 dark:placeholder:text-slate-500 transition-all" id="email" placeholder="you@company.com" type="email"/>
        </div>
        </div>
        <div class="space-y-2">
        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold" for="phone">Phone number (optional)</label>
        <div class="relative">
        <i class="bx bx-phone absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-[20px]"></i>
        <input class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary placeholder:text-slate-400 dark:placeholder:text-slate-500 transition-all" id="phone" placeholder="+1 (555) 000-0000" type="tel"/>
        </div>
        </div>
        <div class="space-y-2">
        <label class="text-slate-900 dark:text-slate-200 text-sm font-semibold" for="message">Message</label>
        <textarea class="w-full p-4 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/50 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary placeholder:text-slate-400 dark:placeholder:text-slate-500 resize-none transition-all" id="message" placeholder="Leave us a message..." rows="4"></textarea>
        </div>
        <div class="flex items-center gap-3">
        <input class="w-5 h-5 rounded border-slate-300 text-primary focus:ring-primary/50 bg-white dark:bg-slate-800 dark:border-slate-600 cursor-pointer" id="privacy" type="checkbox"/>
        <label class="text-sm text-slate-600 dark:text-slate-400 cursor-pointer select-none" for="privacy">
                                    I agree to the <a class="text-primary hover:underline" href="{{ route('privacy') }}">Privacy Policy</a> and <a class="text-primary hover:underline" href="{{ route('terms') }}">Terms of Service</a>.
                                </label>
        </div>
        <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/25 active:scale-[0.99] flex items-center justify-center gap-2" type="submit">
        <span>Send Message</span>
        <i class="bx bx-send text-[20px]"></i>
        </button>
        </form>
        </div>
        </div>
        <!-- Right Side: Dark Sidebar Info -->
        <div class="w-full lg:w-2/5 bg-slate-900 dark:bg-[#150b18] text-white p-6 lg:p-12 xl:p-20 flex flex-col justify-between relative overflow-hidden">
        <!-- Decorative circle -->
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="relative z-10 space-y-12">
        <div>
        <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
        <i class="bx bx-map-pin text-primary"></i>
                                Our Offices
                            </h3>
        <div class="space-y-8">
        <div>
        <h4 class="text-lg font-semibold text-white mb-2">Headquarters</h4>
        <p class="text-slate-400 leading-relaxed">
                                        100 Smith Street<br/>
                                        Collingwood VIC 3066<br/>
                                        Australia
                                    </p>
        </div>
        <div>
        <h4 class="text-lg font-semibold text-white mb-2">US Office</h4>
        <p class="text-slate-400 leading-relaxed">
                                        221B Baker St<br/>
                                        New York, NY 10012<br/>
                                        United States
                                    </p>
        </div>
        </div>
        </div>
        <div>
        <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
        <i class="bx bx-help-circle text-primary"></i>
                                Contact Info
                            </h3>
        <div class="space-y-4">
        <a class="flex items-center gap-4 p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-colors border border-white/10 group" href="mailto:hello@apexhire.com">
        <div class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
        <i class="bx bx-envelope text-[20px]"></i>
        </div>
        <div>
        <p class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Email us</p>
        <p class="text-white font-medium">hello@apexhire.com</p>
        </div>
        </a>
        <a class="flex items-center gap-4 p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-colors border border-white/10 group" href="tel:+15550000000">
        <div class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
        <i class="bx bx-phone text-[20px]"></i>
        </div>
        <div>
        <p class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Call us</p>
        <p class="text-white font-medium">+1 (555) 000-0000</p>
        </div>
        </a>
        </div>
        </div>
        <!-- Embedded Map Section -->
        <div class="w-full h-64 rounded-2xl overflow-hidden shadow-2xl border border-white/10 relative group" id="map">
        <!-- Placeholder for map using an image since iframes are heavy/restricted in some contexts, but styled to look like an embedded map -->
        <img alt="Map showing office location in a modern city grid" class="w-full h-full object-cover opacity-60 group-hover:opacity-80 transition-opacity duration-500 scale-110 group-hover:scale-100 transform" data-location="Melbourne" src="{{ asset('website/assets/images/contact-map.png') }}"/>
        <div class="absolute inset-0 flex items-center justify-center">
        <a class="bg-white text-slate-900 px-4 py-2 rounded-full font-bold text-sm shadow-lg hover:scale-105 transition-transform flex items-center gap-2" href="contact-us.html#map">
        <i class="bx bx-map text-primary text-[18px]"></i>
                                    View on Map
                                </a>
        </div>
        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-1 rounded text-[10px] text-white/80">
                                Map Data ©2023 Google
                            </div>
        </div>
        </div>
        <!-- Bottom Socials -->
        <div class="mt-12 pt-8 border-t border-white/10 flex gap-4 relative z-10">
        <a class="size-10 rounded-full bg-white/5 hover:bg-primary hover:text-white text-slate-400 flex items-center justify-center transition-all" href="{{ route('success') }}">
        <!-- Using symbol as generic social icon replacement -->
        <span class="font-bold text-sm">FB</span>
        </a>
        <a class="size-10 rounded-full bg-white/5 hover:bg-primary hover:text-white text-slate-400 flex items-center justify-center transition-all" href="{{ route('about') }}">
        <span class="font-bold text-sm">TW</span>
        </a>
        <a class="size-10 rounded-full bg-white/5 hover:bg-primary hover:text-white text-slate-400 flex items-center justify-center transition-all" href="{{ route('browse') }}">
        <span class="font-bold text-sm">IN</span>
        </a>
        <a class="size-10 rounded-full bg-white/5 hover:bg-primary hover:text-white text-slate-400 flex items-center justify-center transition-all" href="{{ route('home') }}">
        <span class="font-bold text-sm">IG</span>
        </a>
        </div>
        </div>
    </main>

@endsection
