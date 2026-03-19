@extends('website.layouts.app')

@section('title', 'Success Stories')

@section('content')

    <main class="flex-1">
        <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-col gap-6 px-4 py-12 text-center items-center">
        <div class="inline-flex w-fit items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-3 py-1 text-xs font-bold uppercase tracking-wider text-primary">
        <span class="size-2 rounded-full bg-primary"></span>
                                                    Impact
                                                </div>
        <h1 class="text-slate-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl max-w-2xl">
                                                    Real stories, real success.
                                                </h1>
        <h2 class="text-slate-600 dark:text-slate-300 text-base font-normal leading-relaxed max-w-2xl">
                                                    Discover how Apex Hire is changing lives and transforming businesses. These are the journeys of the people and companies that make our platform thrive.
                                                </h2>
        <div class="flex gap-4 mt-4 flex-wrap justify-center">
        <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-primary hover:bg-primary-dark transition-colors text-white text-base font-bold leading-normal tracking-[0.015em]" href="{{ route('contact') }}" role="button">
        <span class="truncate">Share Your Story</span>
        </a>
        <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 border-2 border-neutral-light dark:border-neutral-dark hover:bg-neutral-light dark:hover:bg-neutral-dark transition-colors text-slate-900 dark:text-white text-base font-bold leading-normal tracking-[0.015em]" href="{{ route('browse') }}" role="button">
        <span class="truncate">Find a Job</span>
        </a>
        </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 py-12">
        <div class="flex flex-col gap-4 rounded-xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 p-8 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4 mb-2">
        <div class="size-16 rounded-full bg-cover bg-center border-2 border-primary/20" data-alt="Portrait of Sarah Jenkins" style='background-image: url('{{ asset('website/assets/images/story-sarah.png') }}');'></div>
        <div>
        <h3 class="text-slate-900 dark:text-white text-lg font-bold">Sarah Jenkins</h3>
        <p class="text-primary text-sm font-medium">Software Engineer at TechNova</p>
        </div>
        </div>
        <div class="flex gap-1 text-amber-400 mb-2">
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        </div>
        <p class="text-slate-600 dark:text-slate-300 text-base leading-relaxed italic">
                                                "Apex Hire's AI matching was incredibly accurate. It didn't just find me a job; it found a role that perfectly aligned with my skills and career goals. I secured my dream position within three weeks of signing up."
                                            </p>
        <div class="mt-4 flex items-center gap-2">
        <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
        <i class="bx bx-rocket text-sm"></i>
        </div>
        <span class="text-sm text-slate-500 dark:text-slate-400 font-medium">Landed dream job in 3 weeks</span>
        </div>
        </div>
        <div class="flex flex-col gap-4 rounded-xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 p-8 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4 mb-2">
        <div class="size-16 rounded-full bg-cover bg-center border-2 border-primary/20" data-alt="Portrait of Marcus Thorne" style='background-image: url('{{ asset('website/assets/images/story-marcus.png') }}');'></div>
        <div>
        <h3 class="text-slate-900 dark:text-white text-lg font-bold">Marcus Thorne</h3>
        <p class="text-primary text-sm font-medium">HR Director at GlobalCorp</p>
        </div>
        </div>
        <div class="flex gap-1 text-amber-400 mb-2">
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        </div>
        <p class="text-slate-600 dark:text-slate-300 text-base leading-relaxed italic">
                                                "The quality of candidates on Apex Hire is unmatched. We were struggling to fill a niche technical role for months. Within days of posting here, we had five highly qualified interviews lined up."
                                            </p>
        <div class="mt-4 flex items-center gap-2">
        <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
        <i class="bx bx-users text-sm"></i>
        </div>
        <span class="text-sm text-slate-500 dark:text-slate-400 font-medium">Hired 15+ top talents this year</span>
        </div>
        </div>
        <div class="flex flex-col gap-4 rounded-xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 p-8 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4 mb-2">
        <div class="size-16 rounded-full bg-cover bg-center border-2 border-primary/20" data-alt="Portrait of Elena Rodriguez" style='background-image: url('{{ asset('website/assets/images/story-sarah.png') }}');'></div>
        <div>
        <h3 class="text-slate-900 dark:text-white text-lg font-bold">Elena Rodriguez</h3>
        <p class="text-primary text-sm font-medium">Freelance Designer</p>
        </div>
        </div>
        <div class="flex gap-1 text-amber-400 mb-2">
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star-half text-sm"></i>
        </div>
        <p class="text-slate-600 dark:text-slate-300 text-base leading-relaxed italic">
                                                "Switching careers was daunting, but Apex Hire's skill translation feature helped me showcase my transferable skills. I transitioned from retail management to UX design seamlessly."
                                            </p>
        <div class="mt-4 flex items-center gap-2">
        <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
        <i class="bx bx-refresh text-sm"></i>
        </div>
        <span class="text-sm text-slate-500 dark:text-slate-400 font-medium">Successful career pivot</span>
        </div>
        </div>
        <div class="flex flex-col gap-4 rounded-xl border border-neutral-light dark:border-neutral-dark bg-white dark:bg-neutral-dark/20 p-8 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4 mb-2">
        <div class="size-16 rounded-full bg-cover bg-center border-2 border-primary/20" data-alt="Portrait of David Chen" style='background-image: url('{{ asset('website/assets/images/story-marcus.png') }}');'></div>
        <div>
        <h3 class="text-slate-900 dark:text-white text-lg font-bold">David Chen</h3>
        <p class="text-primary text-sm font-medium">Founder, StartUp Inc.</p>
        </div>
        </div>
        <div class="flex gap-1 text-amber-400 mb-2">
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        <i class="bx bxs-star text-sm"></i>
        </div>
        <p class="text-slate-600 dark:text-slate-300 text-base leading-relaxed italic">
                                                "As a startup, finding the right cultural fit is just as important as technical skills. Apex Hire's company culture profiles ensured we attracted candidates who truly believe in our mission."
                                            </p>
        <div class="mt-4 flex items-center gap-2">
        <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
        <i class="bx bx-briefcase text-sm"></i>
        </div>
        <span class="text-sm text-slate-500 dark:text-slate-400 font-medium">Built entire founding team</span>
        </div>
        </div>
        </div>
        <div class="px-4 py-16">
        <div class="rounded-xl overflow-hidden bg-primary/5 dark:bg-primary/10 border border-primary/20 shadow-sm text-center p-12 flex flex-col items-center gap-6">
        <div class="size-16 rounded-full bg-primary/20 flex items-center justify-center text-primary mb-2">
        <i class="bx bx-magic-wand text-3xl"></i>
        </div>
        <h2 class="text-slate-900 dark:text-white text-3xl font-bold leading-tight">Ready to write your own success story?</h2>
        <p class="text-slate-600 dark:text-slate-300 text-base max-w-xl">
                                        Join thousands of professionals and companies who have found their perfect match on Apex Hire. Your next big opportunity is just a click away.
                                    </p>
        <div class="flex flex-col sm:flex-row gap-4 mt-4">
        <a class="flex items-center justify-center rounded-full h-12 px-8 bg-primary hover:bg-primary-dark transition-colors text-white text-base font-bold" href="{{ route('register') }}" role="button">
                                            Get Started Today
                                        </a>
        </div>
        </div>
        </div>
        </div>
        </div>
    </main>

@endsection
