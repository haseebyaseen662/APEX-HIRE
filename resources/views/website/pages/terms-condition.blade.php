@extends('website.layouts.app')

@section('title', 'Terms & Conditions')

@section('content')

    <main class="flex-1 flex flex-col lg:flex-row gap-10 px-4 md:px-0">
        <div class="hidden lg:block w-64 flex-shrink-0 sticky top-10 self-start">
        <h3 class="text-sm font-bold text-slate-900 dark:text-slate-100 uppercase tracking-wider mb-4">Table of Contents</h3>
        <nav class="flex flex-col gap-3 border-l-2 border-slate-200 dark:border-slate-800 pl-4">
        <a class="text-sm text-primary font-medium hover:text-primary/80 transition-colors" href="#section-1">1. Introduction and Acceptance</a>
        <a class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#section-2">2. User Eligibility and Registration</a>
        <a class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#section-3">3. Job Postings and Applications</a>
        <a class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#section-4">4. User Conduct</a>
        <a class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#section-5">5. Intellectual Property Rights</a>
        <a class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary transition-colors" href="#section-6">6. Limitation of Liability</a>
        </nav>
        </div>
        <div class="flex-1">
        <div class="mb-10">
        <h1 class="text-slate-900 dark:text-slate-100 text-4xl md:text-5xl font-extrabold leading-tight tracking-tight mb-4">Terms &amp; Conditions</h1>
        <p class="text-slate-500 dark:text-slate-400 text-sm md:text-base font-medium flex items-center gap-2">
        <i class="bx bx-calendar text-lg"></i>
                                            Last Updated: October 24, 2023
                                        </p>
        </div>
        <div class="flex gap-4 mb-10 pb-10 border-b border-slate-200 dark:border-slate-800">
        <a class="flex min-w-[120px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-full h-11 px-6 bg-primary text-white hover:bg-primary/90 transition-shadow shadow-md shadow-primary/20 text-sm font-bold leading-normal" href="{{ route('register') }}" role="button">
        <i class="bx bx-check text-sm"></i>
        <span>Accept Terms</span>
        </a>
        <a class="flex min-w-[120px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-full h-11 px-6 bg-primary/10 dark:bg-primary/20 text-primary hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors text-sm font-bold leading-normal" href="{{ route('terms') }}" role="button" download>
        <i class="bx bx-download text-sm"></i>
        <span>Download PDF</span>
        </a>
        </div>
        <div class="flex flex-col gap-12 text-slate-700 dark:text-slate-300 leading-relaxed">
        <section class="scroll-mt-10" id="section-1">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-3">
        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">1</span>
                                                Introduction and Acceptance of Terms
                                            </h2>
        <div class="space-y-4">
        <p>Welcome to Apex Hire. These Terms &amp; Conditions ("Terms") govern your use of our website, mobile applications, and services (collectively, the "Services"). By accessing, browsing, or using our platform, you acknowledge that you have read, understood, and agree to be bound by these Terms.</p>
        <p>If you do not agree with any part of these Terms, you must not use our Services. We reserve the right to modify these Terms at any time. Your continued use of the Services following any changes indicates your acceptance of the new Terms.</p>
        </div>
        </section>
        <section class="scroll-mt-10" id="section-2">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-3">
        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">2</span>
                                                User Eligibility and Registration
                                            </h2>
        <div class="space-y-4">
        <p>To use certain features of the Services, you must register for an account. You must be at least 18 years of age to create an account. By registering, you represent and warrant that all information you provide is accurate, current, and complete.</p>
        <p>You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to notify us immediately of any unauthorized use of your account.</p>
        <ul class="list-disc pl-6 space-y-2 mt-2">
        <li>Provide accurate and complete registration information.</li>
        <li>Maintain the security of your password and identification.</li>
        <li>Promptly update any information to keep it accurate and complete.</li>
        <li>Accept all risks of unauthorized access to your information.</li>
        </ul>
        </div>
        </section>
        <section class="scroll-mt-10" id="section-3">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-3">
        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">3</span>
                                                Job Postings and Applications
                                            </h2>
        <div class="space-y-4">
        <p><strong>For Employers:</strong> When posting a job, you agree to provide accurate descriptions of the role, requirements, and compensation. You must not post discriminatory, offensive, or misleading job listings. We reserve the right to remove any job posting that violates our policies.</p>
        <p><strong>For Job Seekers:</strong> When applying for jobs, you agree that your application materials, including resumes and cover letters, are truthful and accurately represent your skills, experience, and education. Employers are solely responsible for their hiring decisions, and Apex Hire does not guarantee employment or specific outcomes.</p>
        </div>
        </section>
        <section class="scroll-mt-10" id="section-4">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-3">
        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/10 text-primary text-sm">4</span>
                                                User Conduct and Responsibilities
                                            </h2>
        <div class="space-y-4">
        <p>You agree to use the Services only for lawful purposes. You must not use the Services to:</p>
        <ul class="list-disc pl-6 space-y-2">
        <li>Upload or transmit any content that is unlawful, harmful, threatening, abusive, harassing, defamatory, vulgar, or obscene.</li>
        <li>Impersonate any person or entity, or falsely state or otherwise misrepresent your affiliation with a person or entity.</li>
        <li>Upload or transmit any material that contains software viruses or any other computer code, files, or programs designed to interrupt, destroy, or limit the functionality of any computer software or hardware.</li>
        <li>Interfere with or disrupt the Services or servers or networks connected to the Services.</li>
        <li>Engage in any form of data scraping, harvesting, or extraction without our express written consent.</li>
        </ul>
        </div>
        </section>
        </div>
        </div>
    </main>

@endsection
