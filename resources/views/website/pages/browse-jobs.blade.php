@extends('website.layouts.app')

@section('title', 'Browse Jobs')

@section('content')

    <main class="flex flex-col flex-1 min-h-0">
        <!-- Search & Filter Header -->
        <div class="bg-white dark:bg-[#2a172e] border-b border-neutral-light dark:border-neutral-dark px-6 py-4 flex flex-col gap-4 z-10 shadow-sm">
        <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
        <h1 class="text-2xl font-bold tracking-tight">Browse Jobs</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">1,245 results found for <span class="text-primary font-medium">'UX Designer'</span></p>
        </div>
        <div class="flex-1 max-w-xl min-w-[300px]">
        <div class="flex w-full items-stretch rounded-xl h-12 bg-neutral-light dark:bg-neutral-dark overflow-hidden focus-within:ring-2 focus-within:ring-primary/50 transition-shadow">
        <div class="flex items-center justify-center pl-4 text-slate-400">
        <i class="bx bx-search text-[24px]"></i>
        </div>
        <input class="w-full bg-transparent border-none text-base px-4 focus:ring-0 placeholder:text-slate-400 dark:placeholder:text-slate-500" placeholder="Search job title, company, or keywords" value=""/>
        </div>
        </div>
        </div>
        <div class="flex gap-3 overflow-x-auto pb-1 no-scrollbar items-center" id="filters">
        <a class="flex h-9 shrink-0 items-center gap-2 rounded-lg border border-neutral-200 dark:border-neutral-700 px-3 hover:bg-neutral-50 dark:hover:bg-neutral-800 transition-colors bg-white dark:bg-transparent" href="browse-jobs.html#filters" role="button">
        <span class="text-sm font-medium">Remote</span>
        <i class="bx bx-chevron-down text-[20px]"></i>
        </a>
        <a class="flex h-9 shrink-0 items-center gap-2 rounded-lg border border-neutral-200 dark:border-neutral-700 px-3 hover:bg-neutral-50 dark:hover:bg-neutral-800 transition-colors bg-white dark:bg-transparent" href="browse-jobs.html#filters" role="button">
        <span class="text-sm font-medium">Full-time</span>
        <i class="bx bx-chevron-down text-[20px]"></i>
        </a>
        <a class="flex h-9 shrink-0 items-center gap-2 rounded-lg border border-primary bg-primary/5 text-primary px-3 transition-colors" href="browse-jobs.html#filters" role="button">
        <span class="text-sm font-bold">Salary &gt; $80k</span>
        <i class="bx bx-x text-[20px]"></i>
        </a>
        <a class="flex h-9 shrink-0 items-center gap-2 rounded-lg border border-neutral-200 dark:border-neutral-700 px-3 hover:bg-neutral-50 dark:hover:bg-neutral-800 transition-colors bg-white dark:bg-transparent" href="browse-jobs.html#filters" role="button">
        <span class="text-sm font-medium">Experience Level</span>
        <i class="bx bx-chevron-down text-[20px]"></i>
        </a>
        <a class="flex h-9 shrink-0 items-center gap-2 rounded-lg border border-neutral-200 dark:border-neutral-700 px-3 hover:bg-neutral-50 dark:hover:bg-neutral-800 transition-colors bg-white dark:bg-transparent" href="browse-jobs.html#filters" role="button">
        <span class="text-sm font-medium">Date Posted</span>
        <i class="bx bx-chevron-down text-[20px]"></i>
        </a>
        <div class="w-px h-6 bg-neutral-300 dark:bg-neutral-600 mx-1"></div>
        <a class="text-sm font-medium text-primary hover:text-primary/80 transition-colors ml-1" href="{{ route('browse') }}" role="button">Clear All</a>
        </div>
        </div>
        <!-- Split View Container -->
        <div class="flex flex-1 overflow-hidden relative">
        <!-- Left Panel: Job List -->
        <div class="w-full lg:w-[450px] xl:w-[500px] overflow-y-auto border-r border-neutral-200 dark:border-neutral-800 bg-white dark:bg-[#2a172e] flex flex-col">
        <!-- Active Item -->
        <div class="p-4 border-l-4 border-primary bg-primary/5 cursor-pointer hover:bg-primary/10 transition-colors">
        <div class="flex justify-between items-start mb-2">
        <div class="flex gap-3">
        <div class="h-12 w-12 rounded-lg bg-neutral-100 dark:bg-neutral-800 flex items-center justify-center shrink-0 overflow-hidden" data-alt="TechCorp Logo" style="background-image: url('{{ asset('website/assets/images/logo-techcorp.png') }}'); background-size: cover;"></div>
        <div>
        <h3 class="font-bold text-base leading-tight">Senior Product Designer</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">TechCorp</p>
        </div>
        </div>
        <span class="text-xs font-medium text-slate-400 whitespace-nowrap">2h ago</span>
        </div>
        <div class="pl-[60px]">
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">San Francisco, CA (Hybrid)</p>
        <div class="flex gap-2 flex-wrap">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 text-slate-600 dark:text-slate-300">$140k - $180k</span>
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 text-slate-600 dark:text-slate-300">Senior Level</span>
        </div>
        </div>
        </div>
        <!-- Job Item 2 -->
        <div class="p-4 border-b border-neutral-100 dark:border-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 cursor-pointer transition-colors group">
        <div class="flex justify-between items-start mb-2">
        <div class="flex gap-3">
        <div class="h-12 w-12 rounded-lg bg-neutral-100 dark:bg-neutral-800 flex items-center justify-center shrink-0 overflow-hidden" data-alt="CreativeStudio Logo" style="background-image: url('{{ asset('website/assets/images/logo-creativestudio.png') }}'); background-size: cover;"></div>
        <div>
        <h3 class="font-bold text-base leading-tight group-hover:text-primary transition-colors">UX Researcher</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">CreativeStudio</p>
        </div>
        </div>
        <span class="text-xs font-medium text-slate-400 whitespace-nowrap">4h ago</span>
        </div>
        <div class="pl-[60px]">
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">Remote</p>
        <div class="flex gap-2 flex-wrap">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">$100k - $130k</span>
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">Mid Level</span>
        </div>
        </div>
        </div>
        <!-- Job Item 3 -->
        <div class="p-4 border-b border-neutral-100 dark:border-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 cursor-pointer transition-colors group">
        <div class="flex justify-between items-start mb-2">
        <div class="flex gap-3">
        <div class="h-12 w-12 rounded-lg bg-neutral-100 dark:bg-neutral-800 flex items-center justify-center shrink-0 overflow-hidden" data-alt="GreenEnergy Logo" style="background-image: url('{{ asset('website/assets/images/logo-greenenergy.png') }}'); background-size: cover;"></div>
        <div>
        <h3 class="font-bold text-base leading-tight group-hover:text-primary transition-colors">Design Systems Lead</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">GreenEnergy</p>
        </div>
        </div>
        <span class="text-xs font-medium text-slate-400 whitespace-nowrap">1d ago</span>
        </div>
        <div class="pl-[60px]">
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">Austin, TX</p>
        <div class="flex gap-2 flex-wrap">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">$160k - $200k</span>
        </div>
        </div>
        </div>
        <!-- Job Item 4 -->
        <div class="p-4 border-b border-neutral-100 dark:border-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 cursor-pointer transition-colors group">
        <div class="flex justify-between items-start mb-2">
        <div class="flex gap-3">
        <div class="h-12 w-12 rounded-lg bg-neutral-100 dark:bg-neutral-800 flex items-center justify-center shrink-0 overflow-hidden" data-alt="StartupInc Logo" style="background-image: url('{{ asset('website/assets/images/logo-startupinc.png') }}'); background-size: cover;"></div>
        <div>
        <h3 class="font-bold text-base leading-tight group-hover:text-primary transition-colors">Product Designer</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">StartupInc</p>
        </div>
        </div>
        <span class="text-xs font-medium text-slate-400 whitespace-nowrap">2d ago</span>
        </div>
        <div class="pl-[60px]">
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">New York, NY (On-site)</p>
        <div class="flex gap-2 flex-wrap">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">$120k - $150k</span>
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">Stock Options</span>
        </div>
        </div>
        </div>
        <!-- Job Item 5 -->
        <div class="p-4 border-b border-neutral-100 dark:border-neutral-800 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 cursor-pointer transition-colors group">
        <div class="flex justify-between items-start mb-2">
        <div class="flex gap-3">
        <div class="h-12 w-12 rounded-lg bg-neutral-100 dark:bg-neutral-800 flex items-center justify-center shrink-0 overflow-hidden" data-alt="FinTech Logo" style="background-image: url('{{ asset('website/assets/images/logo-fintech.png') }}'); background-size: cover;"></div>
        <div>
        <h3 class="font-bold text-base leading-tight group-hover:text-primary transition-colors">UI/UX Designer</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">FinTech Global</p>
        </div>
        </div>
        <span class="text-xs font-medium text-slate-400 whitespace-nowrap">3d ago</span>
        </div>
        <div class="pl-[60px]">
        <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">London, UK</p>
        <div class="flex gap-2 flex-wrap">
        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-neutral-100 dark:bg-neutral-800 text-slate-600 dark:text-slate-300">£60k - £80k</span>
        </div>
        </div>
        </div>
        </div>
        <!-- Right Panel: Job Details (Master View) -->
        <div class="hidden lg:flex flex-1 flex-col overflow-y-auto bg-background-light dark:bg-background-dark p-6 xl:p-10">
        <div class="max-w-4xl mx-auto w-full space-y-6">
        <!-- Job Header Card -->
        <div class="bg-white dark:bg-[#2a172e] rounded-2xl p-8 shadow-sm border border-neutral-100 dark:border-neutral-800">
        <div class="flex items-start justify-between gap-6 mb-6">
        <div class="flex gap-5">
        <div class="w-20 h-20 rounded-xl bg-neutral-50 dark:bg-neutral-800 shrink-0 overflow-hidden shadow-sm" data-alt="TechCorp Large Logo" style="background-image: url('{{ asset('website/assets/images/logo-techcorp-large.png') }}'); background-size: cover;"></div>
        <div>
        <h1 class="text-3xl font-bold tracking-tight mb-2">Senior Product Designer</h1>
        <div class="flex items-center gap-2 text-slate-600 dark:text-slate-300">
        <span class="font-semibold text-slate-900 dark:text-slate-100">TechCorp</span>
        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
        <span>San Francisco, CA (Hybrid)</span>
        </div>
        <div class="flex items-center gap-4 mt-3 text-sm text-slate-500">
        <div class="flex items-center gap-1">
        <i class="bx bx-time text-[18px]"></i>
        <span>Full-time</span>
        </div>
        <div class="flex items-center gap-1">
        <i class="bx bx-credit-card text-[18px]"></i>
        <span>$140k - $180k / year</span>
        </div>
        <div class="flex items-center gap-1">
        <i class="bx bx-briefcase text-[18px]"></i>
        <span>5+ years exp</span>
        </div>
        </div>
        </div>
        </div>
        <div class="flex gap-2">
        <a class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-800 text-slate-500 transition-colors" href="{{ route('login') }}" role="button" aria-label="Save job">
        <i class="bx bx-bookmark"></i>
        </a>
        <a class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-800 text-slate-500 transition-colors" href="{{ route('contact') }}" role="button" aria-label="Share job">
        <i class="bx bx-share-alt"></i>
        </a>
        </div>
        </div>
        <div class="flex gap-3">
        <a class="flex-1 bg-primary hover:bg-primary/90 text-white font-bold py-3 px-6 rounded-xl transition-all shadow-lg shadow-primary/25 text-center" href="{{ route('login') }}" role="button">
                                        Apply Now
                                    </a>
        <a class="flex-1 bg-neutral-light dark:bg-neutral-dark hover:bg-neutral-200 dark:hover:bg-neutral-700 text-slate-900 dark:text-slate-100 font-bold py-3 px-6 rounded-xl transition-colors text-center" href="{{ route('about') }}" role="button">
                                        Visit Website
                                    </a>
        </div>
        </div>
        <!-- Job Description -->
        <div class="bg-white dark:bg-[#2a172e] rounded-2xl p-8 shadow-sm border border-neutral-100 dark:border-neutral-800">
        <h3 class="text-xl font-bold mb-4">About the Role</h3>
        <div class="prose prose-slate dark:prose-invert max-w-none text-slate-600 dark:text-slate-300 leading-relaxed">
        <p class="mb-4">
                                        TechCorp is looking for a Senior Product Designer to join our Core Experience team. You will play a key role in defining the future of our platform, working closely with product managers, engineers, and researchers to build intuitive and impactful user experiences.
                                    </p>
        <p class="mb-4">
                                        As a senior member of the design team, you will be expected to lead projects from concept to launch, mentor junior designers, and contribute to our design system.
                                    </p>
        <h4 class="text-lg font-bold text-slate-900 dark:text-slate-100 mt-6 mb-3">Key Responsibilities</h4>
        <ul class="list-disc pl-5 space-y-2 mb-6 marker:text-primary">
        <li>Lead end-to-end design projects for high-impact product features.</li>
        <li>Create wireframes, prototypes, and high-fidelity designs.</li>
        <li>Collaborate with cross-functional partners to define product strategy.</li>
        <li>Conduct user research and usability testing to inform design decisions.</li>
        <li>Mentor and provide feedback to other designers on the team.</li>
        </ul>
        <h4 class="text-lg font-bold text-slate-900 dark:text-slate-100 mt-6 mb-3">Requirements</h4>
        <ul class="list-disc pl-5 space-y-2 mb-6 marker:text-primary">
        <li>5+ years of experience in product design or UX/UI design.</li>
        <li>Strong portfolio demonstrating your design process and problem-solving skills.</li>
        <li>Proficiency in Figma and prototyping tools.</li>
        <li>Experience working with design systems.</li>
        <li>Excellent communication and collaboration skills.</li>
        </ul>
        </div>
        <div class="border-t border-neutral-100 dark:border-neutral-800 mt-8 pt-6">
        <h4 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Skills</h4>
        <div class="flex flex-wrap gap-2">
        <span class="px-3 py-1 rounded-lg bg-neutral-light dark:bg-neutral-800 text-sm font-medium text-slate-700 dark:text-slate-300">Figma</span>
        <span class="px-3 py-1 rounded-lg bg-neutral-light dark:bg-neutral-800 text-sm font-medium text-slate-700 dark:text-slate-300">Prototyping</span>
        <span class="px-3 py-1 rounded-lg bg-neutral-light dark:bg-neutral-800 text-sm font-medium text-slate-700 dark:text-slate-300">User Research</span>
        <span class="px-3 py-1 rounded-lg bg-neutral-light dark:bg-neutral-800 text-sm font-medium text-slate-700 dark:text-slate-300">Design Systems</span>
        <span class="px-3 py-1 rounded-lg bg-neutral-light dark:bg-neutral-800 text-sm font-medium text-slate-700 dark:text-slate-300">Agile</span>
        </div>
        </div>
        </div>
        <!-- Company Info -->
        <div class="bg-white dark:bg-[#2a172e] rounded-2xl p-8 shadow-sm border border-neutral-100 dark:border-neutral-800">
        <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-bold">About TechCorp</h3>
        <a class="text-primary font-medium text-sm hover:underline" href="{{ route('about') }}">View Company Profile</a>
        </div>
        <div class="flex gap-4 mb-4 overflow-x-auto pb-2 no-scrollbar">
        <div class="w-40 h-24 rounded-lg bg-neutral-100 shrink-0 overflow-hidden" data-alt="Office Interior" style="background-image: url('{{ asset('website/assets/images/browse-office-1.png') }}'); background-size: cover;"></div>
        <div class="w-40 h-24 rounded-lg bg-neutral-100 shrink-0 overflow-hidden" data-alt="Team Meeting" style="background-image: url('{{ asset('website/assets/images/browse-office-2.png') }}'); background-size: cover;"></div>
        <div class="w-40 h-24 rounded-lg bg-neutral-100 shrink-0 overflow-hidden" data-alt="Company Event" style="background-image: url('{{ asset('website/assets/images/browse-office-3.png') }}'); background-size: cover;"></div>
        </div>
        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                                    TechCorp is a leading technology company dedicated to innovating the way people work. We build software that empowers teams to collaborate more effectively and achieve their goals. Our culture is built on transparency, inclusivity, and continuous learning.
                                </p>
        </div>
        </div>
        </div>
        </div>
    </main>

@endsection
