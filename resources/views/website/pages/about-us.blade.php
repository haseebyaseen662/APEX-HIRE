@extends('website.layouts.app')

@section('title', 'About Us')

@section('content')

    <main class="flex-1">
        <!-- Hero Section: Split Layout -->
        <section class="px-6 md:px-20 py-16 md:py-24">
        <div class="mx-auto max-w-7xl flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
        <div class="w-full lg:w-1/2 space-y-8">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider">
        <i class="bx bx-magic-wand text-sm"></i>
                                    Our Journey
                                </div>
        <h1 class="text-4xl md:text-6xl font-extrabold leading-[1.1] tracking-tight text-slate-900 dark:text-slate-100">
                                    Connecting Talent with <span class="text-primary">Opportunity</span>
        </h1>
        <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-xl">
                                    Since 2015, we've been the bridge between dream careers and world-class employers. We believe everyone deserves a job they love.
                                </p>
        <div class="flex flex-wrap items-center gap-10 py-4">
        <div>
        <div class="text-3xl font-black text-primary">10M+</div>
        <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Jobs Found</div>
        </div>
        <div class="w-px h-10 bg-slate-200 dark:bg-slate-800"></div>
        <div>
        <div class="text-3xl font-black text-primary">50k+</div>
        <div class="text-sm font-medium text-slate-500 uppercase tracking-widest">Companies</div>
        </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
        <a class="bg-primary text-white h-14 px-8 rounded-full font-bold flex items-center justify-center gap-2 hover:scale-105 transition-transform shadow-xl shadow-primary/30" href="{{ route('success') }}" role="button">
        <i class="bx bx-play-circle"></i>
                                        Watch Our Story
                                    </a>
        <a class="bg-white dark:bg-slate-800 border-2 border-primary/20 text-slate-900 dark:text-slate-100 h-14 px-8 rounded-full font-bold hover:bg-primary/5 transition-colors flex items-center justify-center text-center" href="{{ route('browse') }}" role="button">
                                        View Openings
                                    </a>
        </div>
        </div>
        <div class="w-full lg:w-1/2 relative">
        <div class="aspect-video w-full rounded-xl overflow-hidden shadow-2xl relative group cursor-pointer border-4 border-white dark:border-slate-800">
        <img class="w-full h-full object-cover grayscale-[20%] group-hover:scale-110 transition-transform duration-700" data-alt="Modern office team collaborating around a laptop" src="{{ asset('website/assets/images/about-hero.png') }}"/>
        <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/10 transition-colors"></div>
        <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-20 h-20 bg-white/90 dark:bg-slate-900/90 rounded-full flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform">
        <i class="bx bx-play text-primary text-4xl leading-none"></i>
        </div>
        </div>
        <div class="absolute bottom-4 left-4 right-4 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md p-4 rounded-lg flex items-center gap-4 border border-white/20">
        <div class="size-10 bg-primary rounded-full flex items-center justify-center text-white">
        <i class="bx bx-users"></i>
        </div>
        <p class="text-xs font-bold text-slate-800 dark:text-white leading-tight uppercase tracking-wide">Behind the scenes with our founding team</p>
        </div>
        </div>
        <!-- Decorative element -->
        <div class="absolute -z-10 -bottom-6 -right-6 w-full h-full bg-primary/5 rounded-xl border border-primary/10"></div>
        </div>
        </div>
        </section>
        <!-- Why Choose Us Section -->
        <section class="bg-primary/[0.03] dark:bg-primary/[0.01] px-6 md:px-20 py-20">
        <div class="mx-auto max-w-7xl">
        <div class="text-center mb-16 space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-100">Why Choose Us</h2>
        <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
        <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">We combine advanced AI technology with a human-centric approach to ensure the best fit for both candidates and employers.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-primary/10 shadow-lg shadow-primary/5 hover:border-primary/40 transition-all group">
        <div class="size-14 bg-primary/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
        <i class="bx bx-badge-check text-primary text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-slate-100">Verified Employers</h3>
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">Every single company on our platform is hand-vetted by our safety team to ensure a legitimate workspace.</p>
        <ul class="space-y-3">
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> 100% Legitimacy check</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> Fraud protection</li>
        </ul>
        </div>
        <!-- Card 2 -->
        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-primary/10 shadow-lg shadow-primary/5 hover:border-primary/40 transition-all group z-10">
        <div class="size-14 bg-primary/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
        <i class="bx bx-bulb text-primary text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-slate-100">Smart Matching</h3>
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">Our AI doesn't just look at keywords; it analyzes cultural fit, potential growth, and skill synergy.</p>
        <ul class="space-y-3">
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> Career path prediction</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> Skill-gap analysis</li>
        </ul>
        </div>
        <!-- Card 3 -->
        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-primary/10 shadow-lg shadow-primary/5 hover:border-primary/40 transition-all group">
        <div class="size-14 bg-primary/10 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
        <i class="bx bx-trending-up text-primary text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-slate-100">Career Growth</h3>
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">Beyond job hunting, we offer exclusive access to webinars, industry tools, and mentor networking.</p>
        <ul class="space-y-3">
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> Weekly мастер-классы</li>
        <li class="flex items-center gap-2 text-sm font-medium text-slate-500"><i class="bx bx-check-circle text-primary text-lg"></i> Resume builder Pro</li>
        </ul>
        </div>
        </div>
        </div>
        </section>
        <!-- Meet the Leadership Section -->
        <section class="px-6 md:px-20 py-24" id="leadership">
        <div class="mx-auto max-w-7xl">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
        <div class="space-y-4">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-100">Meet the Leadership</h2>
        <p class="text-slate-600 dark:text-slate-400 max-w-xl">A diverse team of dreamers, innovators, and industry veterans dedicated to reshaping the future of work.</p>
        </div>
        <a class="text-primary font-bold flex items-center gap-2 hover:gap-3 transition-all" href="about-us.html#leadership" role="button">
                                    View all team <i class="bx bx-right-arrow-alt"></i>
        </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
        <!-- Leader 1 -->
        <div class="flex flex-col items-center text-center group">
        <div class="relative mb-6">
        <div class="size-48 rounded-full overflow-hidden border-4 border-primary/20 p-1 group-hover:border-primary transition-colors">
        <img class="w-full h-full object-cover rounded-full" data-alt="Male CEO in a professional suit" src="{{ asset('website/assets/images/team-ceo.png') }}"/>
        </div>
        <a class="absolute bottom-2 right-4 size-10 bg-white dark:bg-slate-800 shadow-lg rounded-full flex items-center justify-center text-[#0077b5] hover:scale-110 transition-transform" href="{{ route('contact') }}">
        <svg class="size-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
        </a>
        </div>
        <h4 class="text-xl font-bold text-slate-900 dark:text-slate-100">David Chen</h4>
        <p class="text-primary font-medium text-sm">CEO &amp; Founder</p>
        </div>
        <!-- Leader 2 -->
        <div class="flex flex-col items-center text-center group">
        <div class="relative mb-6">
        <div class="size-48 rounded-full overflow-hidden border-4 border-primary/20 p-1 group-hover:border-primary transition-colors">
        <img class="w-full h-full object-cover rounded-full" data-alt="Female CTO smiling with glasses" src="{{ asset('website/assets/images/team-cto.png') }}"/>
        </div>
        <a class="absolute bottom-2 right-4 size-10 bg-white dark:bg-slate-800 shadow-lg rounded-full flex items-center justify-center text-[#0077b5] hover:scale-110 transition-transform" href="{{ route('contact') }}">
        <svg class="size-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
        </a>
        </div>
        <h4 class="text-xl font-bold text-slate-900 dark:text-slate-100">Sarah Jenkins</h4>
        <p class="text-primary font-medium text-sm">Chief Technology Officer</p>
        </div>
        <!-- Leader 3 -->
        <div class="flex flex-col items-center text-center group">
        <div class="relative mb-6">
        <div class="size-48 rounded-full overflow-hidden border-4 border-primary/20 p-1 group-hover:border-primary transition-colors">
        <img class="w-full h-full object-cover rounded-full" data-alt="Male Head of Design in casual office attire" src="{{ asset('website/assets/images/team-design.png') }}"/>
        </div>
        <a class="absolute bottom-2 right-4 size-10 bg-white dark:bg-slate-800 shadow-lg rounded-full flex items-center justify-center text-[#0077b5] hover:scale-110 transition-transform" href="{{ route('contact') }}">
        <svg class="size-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
        </a>
        </div>
        <h4 class="text-xl font-bold text-slate-900 dark:text-slate-100">Marcus Wright</h4>
        <p class="text-primary font-medium text-sm">Head of Talent</p>
        </div>
        <!-- Leader 4 -->
        <div class="flex flex-col items-center text-center group">
        <div class="relative mb-6">
        <div class="size-48 rounded-full overflow-hidden border-4 border-primary/20 p-1 group-hover:border-primary transition-colors">
        <img class="w-full h-full object-cover rounded-full" data-alt="Female Operations Director in a creative studio" src="{{ asset('website/assets/images/team-ops.png') }}"/>
        </div>
        <a class="absolute bottom-2 right-4 size-10 bg-white dark:bg-slate-800 shadow-lg rounded-full flex items-center justify-center text-[#0077b5] hover:scale-110 transition-transform" href="{{ route('contact') }}">
        <svg class="size-5 fill-current" viewbox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
        </a>
        </div>
        <h4 class="text-xl font-bold text-slate-900 dark:text-slate-100">Elena Rodriguez</h4>
        <p class="text-primary font-medium text-sm">Operations Director</p>
        </div>
        </div>
        </div>
        </section>
        <!-- CTA Section -->
        <section class="px-6 md:px-20 pb-24">
        <div class="mx-auto max-w-7xl bg-primary rounded-xl p-12 relative overflow-hidden">
        <div class="relative z-10 flex flex-col items-center text-center space-y-8">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white">Ready to take the next step?</h2>
        <p class="text-white/80 text-lg max-w-2xl">Join millions of professionals who found their dream careers through Apex Hire. Your future starts today.</p>
        <div class="flex flex-col sm:flex-row gap-4">
        <a class="bg-white text-primary px-10 py-4 rounded-full font-bold text-lg hover:scale-105 transition-transform shadow-xl" href="{{ route('register') }}" role="button">Get Started Now</a>
        <a class="bg-primary border border-white/30 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-colors" href="{{ route('contact') }}" role="button">Contact Sales</a>
        </div>
        </div>
        <!-- Decorative Gradients -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 blur-3xl -translate-y-1/2 translate-x-1/2 rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 blur-3xl translate-y-1/2 -translate-x-1/2 rounded-full"></div>
        </div>
        </section>
    </main>

@endsection
