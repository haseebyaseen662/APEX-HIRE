@extends('website.layouts.app')

@section('title', 'Privacy Policy')

@section('content')

    <main class="flex-grow flex flex-col py-12 px-6 lg:px-20 max-w-7xl mx-auto w-full gap-12">
        <section class="flex flex-col gap-4 max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Privacy Policy</h1>
        <p class="text-slate-500 dark:text-slate-400 text-lg">Last updated: <span class="font-semibold text-slate-700 dark:text-slate-300">October 24, 2023</span></p>
        <p class="text-slate-600 dark:text-slate-300 leading-relaxed mt-4">
                        At Apex Hire, we value your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and share information about you when you use our website, mobile application, and other online products and services.
                    </p>
        </section>
        <div class="flex flex-col lg:flex-row gap-12 items-start relative">
        <aside class="w-full lg:w-64 lg:sticky lg:top-24 hidden lg:block shrink-0">
        <nav class="flex flex-col gap-2 border-l-2 border-slate-200 dark:border-slate-800 py-2 pl-4">
        <a class="text-sm font-semibold text-primary border-l-2 -ml-[18px] pl-4 border-primary py-1.5 transition-colors" href="#data-collection">
                                Data Collection
                            </a>
        <a class="text-sm font-semibold text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white border-l-2 -ml-[18px] pl-4 border-transparent hover:border-slate-300 dark:hover:border-slate-600 py-1.5 transition-colors" href="#how-we-use">
                                How We Use Data
                            </a>
        <a class="text-sm font-semibold text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white border-l-2 -ml-[18px] pl-4 border-transparent hover:border-slate-300 dark:hover:border-slate-600 py-1.5 transition-colors" href="#cookies">
                                Cookies &amp; Tracking
                            </a>
        <a class="text-sm font-semibold text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white border-l-2 -ml-[18px] pl-4 border-transparent hover:border-slate-300 dark:hover:border-slate-600 py-1.5 transition-colors" href="#sharing">
                                Information Sharing
                            </a>
        <a class="text-sm font-semibold text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white border-l-2 -ml-[18px] pl-4 border-transparent hover:border-slate-300 dark:hover:border-slate-600 py-1.5 transition-colors" href="#user-rights">
                                Your Rights &amp; Choices
                            </a>
        <a class="text-sm font-semibold text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white border-l-2 -ml-[18px] pl-4 border-transparent hover:border-slate-300 dark:hover:border-slate-600 py-1.5 transition-colors mt-4" href="#contact">
                                Contact Us
                            </a>
        </nav>
        </aside>
        <div class="lg:hidden flex overflow-x-auto pb-4 mb-4 border-b border-slate-200 dark:border-slate-800 w-full snap-x hide-scrollbar">
        <div class="flex gap-4">
        <a class="whitespace-nowrap px-4 py-2 rounded-full bg-primary/10 text-primary font-semibold text-sm snap-start" href="#data-collection">Data Collection</a>
        <a class="whitespace-nowrap px-4 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 font-medium text-sm border border-slate-200 dark:border-slate-700 snap-start transition-colors" href="#how-we-use">How We Use Data</a>
        <a class="whitespace-nowrap px-4 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 font-medium text-sm border border-slate-200 dark:border-slate-700 snap-start transition-colors" href="#cookies">Cookies</a>
        <a class="whitespace-nowrap px-4 py-2 rounded-full bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 font-medium text-sm border border-slate-200 dark:border-slate-700 snap-start transition-colors" href="#user-rights">Your Rights</a>
        </div>
        </div>
        <article class="flex-1 w-full max-w-3xl prose prose-slate dark:prose-invert prose-headings:font-display prose-headings:font-bold prose-a:text-primary hover:prose-a:text-primary-600 prose-img:rounded-xl">
        <div class="scroll-mt-24 mb-12" id="data-collection">
        <div class="flex items-center gap-3 mb-6">
        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
        <i class="bx bx-box"></i>
        </div>
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white m-0">1. Data Collection</h2>
        </div>
        <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                We collect information you provide directly to us when you create an account, update your profile, apply for jobs, or communicate with us. This includes:
                            </p>
        <ul class="space-y-3 mb-6 text-slate-600 dark:text-slate-300">
        <li class="flex items-start gap-3">
        <i class="bx bx-check-circle text-primary text-xl mt-0.5"></i>
        <span><strong>Account Information:</strong> Name, email address, password, postal address, and phone number.</span>
        </li>
        <li class="flex items-start gap-3">
        <i class="bx bx-check-circle text-primary text-xl mt-0.5"></i>
        <span><strong>Professional Details:</strong> Resume, employment history, education details, skills, and portfolio links.</span>
        </li>
        <li class="flex items-start gap-3">
        <i class="bx bx-check-circle text-primary text-xl mt-0.5"></i>
        <span><strong>Communications:</strong> Records of correspondence if you contact our customer support.</span>
        </li>
        </ul>
        <div class="bg-slate-50 dark:bg-slate-800/50 p-6 rounded-xl border border-slate-100 dark:border-slate-800">
        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-2 uppercase tracking-wider">Automatically Collected Data</h4>
        <p class="text-sm text-slate-600 dark:text-slate-400 m-0">
                                    When you access or use our Services, we automatically collect information about you, including log information, device information, and location information.
                                </p>
        </div>
        </div>
        <div class="scroll-mt-24 mb-12" id="cookies">
        <div class="flex items-center gap-3 mb-6">
        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
        <i class="bx bx-cookie"></i>
        </div>
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white m-0">2. Cookies &amp; Tracking Technologies</h2>
        </div>
        <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                We and our service providers use cookies, web beacons, and other tracking technologies to collect information about your use of our Services and other websites, including your IP address, web browser, pages viewed, time spent on pages, links clicked, and conversion information.
                            </p>
        <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                You can usually choose to set your browser to remove or reject browser cookies. Please note that if you choose to remove or reject cookies, this could affect the availability and functionality of our Services.
                            </p>
        </div>
        <div class="scroll-mt-24 mb-12" id="user-rights">
        <div class="flex items-center gap-3 mb-6">
        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
        <i class="bx bx-shield"></i>
        </div>
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white m-0">3. Your Rights &amp; Choices</h2>
        </div>
        <p class="text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                Depending on your location, you may have certain rights regarding your personal data, such as the right to access, correct, delete, or restrict the processing of your data.
                            </p>
        <ul class="space-y-3 mb-6 text-slate-600 dark:text-slate-300">
        <li class="flex items-start gap-3">
        <i class="bx bx-chevron-right text-primary text-xl mt-0.5"></i>
        <span><strong>Access &amp; Portability:</strong> You can request a copy of the personal data we hold about you.</span>
        </li>
        <li class="flex items-start gap-3">
        <i class="bx bx-chevron-right text-primary text-xl mt-0.5"></i>
        <span><strong>Correction:</strong> You can update your account information at any time by logging into your account.</span>
        </li>
        <li class="flex items-start gap-3">
        <i class="bx bx-chevron-right text-primary text-xl mt-0.5"></i>
        <span><strong>Deletion:</strong> You may request deletion of your account and personal data.</span>
        </li>
        </ul>
        </div>
        </article>
        </div>
    </main>

@endsection
