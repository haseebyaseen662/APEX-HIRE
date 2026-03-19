<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration - Apex Hire</title>
    <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
    <script src="{{ asset('website/assets/js/main.js') }}" defer></script>

    <style>
        .field-error {
            border-color: #ef4444 !important;
            outline: none !important;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2) !important;
        }
        .text-red-500 {
            color: #ef4444 !important;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased">

    {{-- Header --}}

    <main class="flex-1 flex flex-col items-center justify-start py-10 px-4 sm:px-6">
        <div class="w-full max-w-3xl flex flex-col gap-8">

            {{-- Progress --}}
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-primary" id="step-counter">Step 1 of 2</span>
                    <span class="text-sm text-slate-500 dark:text-slate-400" id="step-title">Basic Information</span>
                </div>
                <div class="relative h-2 w-full rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
                    <div class="absolute top-0 left-0 h-full rounded-full bg-primary transition-all duration-300" id="progress-bar" style="width: 50%;"></div>
                </div>
            </div>

            {{-- Title --}}
            <div class="flex flex-col gap-2 text-center sm:text-left">
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Create your account</h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Join thousands of professionals and companies finding their perfect match.</p>
            </div>

            <form id="register-form" class="flex flex-col gap-6" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ==================== STEP 1 ==================== --}}
                <div id="step-1" class="flex flex-col gap-6">

                    {{-- Role Cards --}}
                    <div class="flex flex-col gap-6">
                        <h3 class="text-xl font-bold">I want to...</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <label class="group relative cursor-pointer">
                                <input checked class="peer sr-only" name="account_type" type="radio" value="seeker"/>
                                <div class="flex flex-col h-full rounded-xl border-2 border-slate-100 bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md peer-checked:border-primary peer-checked:bg-primary/5 dark:bg-slate-800 dark:border-slate-700 dark:peer-checked:bg-slate-800">
                                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                                        <i class="bx bx-user text-3xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="mb-2 text-lg font-bold text-slate-900 dark:text-slate-100">Find a Job</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Search thousands of job listings, apply instantly, and find your dream career path with ease.</p>
                                    </div>
                                    <div class="mt-6 flex items-center justify-end">
                                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-400 transition-colors group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white dark:bg-slate-700">
                                            <i class="bx bx-check text-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </label>

                            <label class="group relative cursor-pointer">
                                <input class="peer sr-only" name="account_type" type="radio" value="employer"/>
                                <div class="flex flex-col h-full rounded-xl border-2 border-slate-100 bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md peer-checked:border-primary peer-checked:bg-primary/5 dark:bg-slate-800 dark:border-slate-700 dark:peer-checked:bg-slate-800">
                                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400">
                                        <i class="bx bx-briefcase text-3xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="mb-2 text-lg font-bold text-slate-900 dark:text-slate-100">Hire Talent</h4>
                                        <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Post jobs, search resumes, and find the best talent to grow your business effectively.</p>
                                    </div>
                                    <div class="mt-6 flex items-center justify-end">
                                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-400 transition-colors group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white dark:bg-slate-700">
                                            <i class="bx bx-check text-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </label>

                        </div>
                    </div>

                    {{-- Basic Info --}}
                    <div class="mt-4 rounded-xl bg-white p-6 shadow-sm border border-slate-100 dark:bg-slate-800 dark:border-slate-700">
                        <div class="mb-6">
                            <h3 class="text-lg font-bold mb-1">Basic Information</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Let's start with the basics to set up your profile.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            {{-- First Name --}}
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="firstName">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                    id="firstName" name="first_name" type="text"
                                    placeholder="e.g. Jane" value="{{ old('first_name') }}"
                                    data-rules="required|min:2" data-label="First name"
                                />
                                <p class="text-xs text-red-500 hidden mt-1" data-error="firstName"></p>
                                @error('first_name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Last Name --}}
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="lastName">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                    id="lastName" name="last_name" type="text"
                                    placeholder="e.g. Doe" value="{{ old('last_name') }}"
                                    data-rules="required|min:2" data-label="Last name"
                                />
                                <p class="text-xs text-red-500 hidden mt-1" data-error="lastName"></p>
                                @error('last_name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="space-y-1 md:col-span-2">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="email">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400 pointer-events-none">
                                        <i class="bx bx-envelope text-lg"></i>
                                    </span>
                                    <input
                                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pl-10 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                        id="email" name="email" type="email"
                                        placeholder="name@company.com" value="{{ old('email') }}"
                                        data-rules="required|email" data-label="Email"
                                    />
                                </div>
                                <p class="text-xs text-red-500 hidden mt-1" data-error="email"></p>
                                @error('email')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="password">
                                    Password <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pr-12 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                        id="password" name="password" type="password"
                                        placeholder="Min. 8 characters"
                                        data-rules="required|min:8" data-label="Password"
                                    />
                                    <button class="absolute right-0 top-0 h-full px-4 text-slate-400 hover:text-primary transition-colors flex items-center justify-center" type="button" data-toggle-password>
                                        <i class="bx bx-hide text-[20px]"></i>
                                    </button>
                                </div>
                                <p class="text-xs text-red-500 hidden mt-1" data-error="password"></p>
                                @error('password')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="password_confirmation">
                                    Confirm Password <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pr-12 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                        id="password_confirmation" name="password_confirmation" type="password"
                                        placeholder="Repeat your password"
                                        data-rules="required|matches:password" data-label="Confirm password"
                                    />
                                    <button class="absolute right-0 top-0 h-full px-4 text-slate-400 hover:text-primary transition-colors flex items-center justify-center" type="button" data-toggle-password>
                                        <i class="bx bx-hide text-[20px]"></i>
                                    </button>
                                </div>
                                <p class="text-xs text-red-500 hidden mt-1" data-error="password_confirmation"></p>
                            </div>

                        </div>
                    </div>

                    {{-- Step 1 Actions --}}
                    <div class="flex items-center justify-end gap-4 mt-4 pt-4 border-t border-slate-200 dark:border-slate-700">
                        <a class="inline-flex items-center justify-center rounded-xl px-6 py-2.5 text-sm font-bold text-slate-600 hover:bg-slate-100 transition-colors dark:text-slate-300 dark:hover:bg-slate-800" href="{{ route('home') }}" role="button">
                            Cancel
                        </a>
                        <button class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20" id="step-next" type="button">
                            <span>Continue</span>
                            <i class="bx bx-arrow-forward text-lg"></i>
                        </button>
                    </div>

                </div>
                {{-- END STEP 1 --}}

                {{-- ==================== STEP 2 ==================== --}}
                <div id="step-2" class="hidden">
                    <div class="flex flex-col gap-6">
                        <div class="mt-4 rounded-xl bg-white p-6 shadow-sm border border-slate-100 dark:bg-slate-800 dark:border-slate-700">

                            <div class="mb-6">
                                <h3 class="text-lg font-bold mb-1">Role Details</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Tell us a bit more so we can personalize your experience.</p>
                            </div>

                            {{-- SEEKER SECTION — wrapper is hidden by default, JS toggles it --}}
                            <div class="hidden" data-role="seeker">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                    <div class="space-y-1 md:col-span-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="jobTitle">
                                            Job Title / Headline <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="jobTitle" name="job_title" type="text"
                                            placeholder='e.g. "Laravel Developer"' value="{{ old('job_title') }}"
                                            data-rules="required|min:2" data-label="Job title"
                                        />
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="jobTitle"></p>
                                    </div>

                                    <div class="space-y-1 md:col-span-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="seekerLocation">
                                            Location <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="seekerLocation" name="seeker_location" type="text"
                                            placeholder="City, Country" value="{{ old('seeker_location') }}"
                                            data-rules="required|min:2" data-label="Location"
                                        />
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="seekerLocation"></p>
                                    </div>

                                    <div class="space-y-1 md:col-span-2">
                                        <input class="sr-only" id="resumeUpload" name="resume" type="file" accept="application/pdf"/>
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                                            Resume <span class="font-normal text-slate-400">(optional)</span>
                                        </label>
                                        <label class="mt-1 w-full border-2 border-dashed border-primary-container bg-slate-50 dark:bg-slate-900 rounded-lg p-4 flex items-center justify-between gap-4 transition-all hover:bg-primary-container/10 group cursor-pointer" for="resumeUpload">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                                    <i class="bx bx-upload text-xl text-primary"></i>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-bold" id="resume-filename">Upload your resume</span>
                                                    <span class="text-xs text-slate-400">PDF only • Max 5MB</span>
                                                </div>
                                            </div>
                                            <button class="shrink-0 px-4 py-2 bg-primary text-white rounded-full text-xs font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all" type="button" data-file-trigger data-file-target="resumeUpload">
                                                Browse Files
                                            </button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            {{-- END SEEKER SECTION --}}

                            {{-- EMPLOYER SECTION — wrapper is hidden by default, JS toggles it --}}
                            <div class="hidden" data-role="employer">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                    <div class="space-y-1 md:col-span-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="companyName">
                                            Company Name <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="companyName" name="company_name" type="text"
                                            placeholder="e.g. Apex Hire" value="{{ old('company_name') }}"
                                            data-rules="required|min:2" data-label="Company name"
                                        />
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="companyName"></p>
                                    </div>

                                    <div class="space-y-1">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="industry">
                                            Industry <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="industry" name="industry" type="text"
                                            placeholder="e.g. Software" value="{{ old('industry') }}"
                                            data-rules="required|min:2" data-label="Industry"
                                        />
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="industry"></p>
                                    </div>

                                    <div class="space-y-1">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="companySize">
                                            Company Size <span class="text-red-500">*</span>
                                        </label>
                                        <select
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="companySize" name="company_size"
                                            data-rules="required" data-label="Company size"
                                        >
                                            <option value="">Select size</option>
                                            <option value="1-10"    {{ old('company_size') === '1-10'    ? 'selected' : '' }}>1-10</option>
                                            <option value="11-50"   {{ old('company_size') === '11-50'   ? 'selected' : '' }}>11-50</option>
                                            <option value="51-200"  {{ old('company_size') === '51-200'  ? 'selected' : '' }}>51-200</option>
                                            <option value="201-500" {{ old('company_size') === '201-500' ? 'selected' : '' }}>201-500</option>
                                            <option value="500+"    {{ old('company_size') === '500+'    ? 'selected' : '' }}>500+</option>
                                        </select>
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="companySize"></p>
                                    </div>

                                    <div class="space-y-1 md:col-span-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="employerLocation">
                                            Location <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                            id="employerLocation" name="employer_location" type="text"
                                            placeholder="City, Country" value="{{ old('employer_location') }}"
                                            data-rules="required|min:2" data-label="Location"
                                        />
                                        <p class="text-xs text-red-500 hidden mt-1" data-error="employerLocation"></p>
                                    </div>

                                    <div class="space-y-1 md:col-span-2">
                                        <input class="sr-only" id="logoUpload" name="company_logo" type="file" accept="image/png,image/jpeg,image/webp"/>
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                                            Company Logo <span class="font-normal text-slate-400">(optional)</span>
                                        </label>
                                        <label class="mt-1 w-full border-2 border-dashed border-primary-container bg-slate-50 dark:bg-slate-900 rounded-lg p-4 flex items-center justify-between gap-4 transition-all hover:bg-primary-container/10 group cursor-pointer" for="logoUpload">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                                    <i class="bx bx-image text-xl text-primary"></i>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-bold" id="logo-filename">Upload your logo</span>
                                                    <span class="text-xs text-slate-400">PNG, JPG, WEBP • Max 2MB</span>
                                                </div>
                                            </div>
                                            <button class="shrink-0 px-4 py-2 bg-primary text-white rounded-full text-xs font-bold shadow-lg shadow-primary/20 hover:shadow-xl transition-all" type="button" data-file-trigger data-file-target="logoUpload">
                                                Browse Files
                                            </button>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            {{-- END EMPLOYER SECTION --}}

                            {{-- Step 2 Actions --}}
                            <div class="flex items-center justify-end gap-4 mt-6 pt-4 border-t border-slate-200 dark:border-slate-700">
                                <button class="inline-flex items-center justify-center gap-2 rounded-xl px-6 py-2.5 text-sm font-bold text-primary/70 bg-primary/10 hover:text-primary hover:bg-primary/20 transition-colors" id="step-back" type="button">
                                    <i class="bx bx-arrow-back text-lg leading-none"></i>
                                    <span class="leading-none">Back</span>
                                </button>
                                <button class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20" id="step-submit" type="submit">
                                    <span class="leading-none">Create Account</span>
                                    <i class="bx bx-check text-lg leading-none"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END STEP 2 --}}

            </form>
        </div>
    </main>

    {{-- Footer --}}

    <script>
    document.addEventListener('DOMContentLoaded', () => {

        // ─── ELEMENTS ─────────────────────────────────────────────────────────
        const step1       = document.getElementById('step-1');
        const step2       = document.getElementById('step-2');
        const nextBtn     = document.getElementById('step-next');
        const backBtn     = document.getElementById('step-back');
        const submitBtn   = document.getElementById('step-submit');
        const stepCounter = document.getElementById('step-counter');
        const stepTitle   = document.getElementById('step-title');
        const progressBar = document.getElementById('progress-bar');
        const roleRadios  = document.querySelectorAll('input[name="account_type"]');
        const seekerSection   = step2.querySelector('[data-role="seeker"]');
        const employerSection = step2.querySelector('[data-role="employer"]');

        let currentStep = 1;

        // ─── VALIDATION ENGINE ────────────────────────────────────────────────
        // Rules are declared on each input via data-rules="required|min:8|email|matches:password"
        // Returns an error string or null if valid.

        const runRules = (input) => {
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';
            const value = input.value.trim();

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) {
                    return `${label} is required.`;
                }
                if (rule.startsWith('min:')) {
                    const min = parseInt(rule.split(':')[1]);
                    if (value.length > 0 && value.length < min) {
                        return `${label} must be at least ${min} characters.`;
                    }
                }
                if (rule === 'email' && value.length > 0) {
                    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        return 'Please enter a valid email address.';
                    }
                }
                if (rule.startsWith('matches:')) {
                    const targetId = rule.split(':')[1];
                    const target   = document.getElementById(targetId);
                    if (target && value !== target.value.trim()) {
                        return 'Passwords do not match.';
                    }
                }
            }

            return null;
        };

        // Apply or clear visual state on an input
        const setFieldState = (input, errorMessage) => {
            const errorEl = document.querySelector(`[data-error="${input.id}"]`);

            if (errorMessage) {
                input.classList.add('field-error');
                if (errorEl) {
                    errorEl.textContent = errorMessage;
                    errorEl.classList.remove('hidden');
                }
            } else {
                input.classList.remove('field-error');
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
            }
        };

        const validateField = (input) => {
            const error = runRules(input);
            setFieldState(input, error);
            return error === null;
        };

        // Validate all step 1 fields, return true only if all pass
        const validateStep1 = () => {
            const fields = step1.querySelectorAll('input[data-rules]');
            let allValid = true;
            fields.forEach(input => {
                if (!validateField(input)) allValid = false;
            });
            return allValid;
        };

        // Validate step 2 based on selected role
        const validateStep2 = () => {
            const role = getSelectedRole();
            const container = role === 'seeker' ? seekerSection : employerSection;
            if (!container) return true;
            const fields = container.querySelectorAll('input[data-rules], select[data-rules]');
            let allValid = true;
            fields.forEach(input => {
                if (!validateField(input)) allValid = false;
            });
            return allValid;
        };

        // ─── REAL-TIME VALIDATION ──────────────────────────────────────────────
        // Validate on blur (first time user leaves field).
        // After that, validate on every keystroke so errors clear instantly.

        const attachLiveValidation = (input) => {
            let touched = false;

            const onValidate = () => {
                touched = true;
                validateField(input);
            };

            const onInput = () => {
                if (touched) validateField(input);

                // When password changes, re-check confirm if it has a value
                if (input.id === 'password') {
                    const confirm = document.getElementById('password_confirmation');
                    if (confirm && confirm.value.trim().length > 0) {
                        validateField(confirm);
                    }
                }
            };

            input.addEventListener('blur', onValidate);
            input.addEventListener('input', onInput);
            input.addEventListener('change', onInput);
        };

        step1.querySelectorAll('input[data-rules]').forEach(attachLiveValidation);
        step2.querySelectorAll('input[data-rules], select[data-rules]').forEach(attachLiveValidation);

        // ─── ROLE SECTION TOGGLE ──────────────────────────────────────────────
        const getSelectedRole = () =>
            document.querySelector('input[name="account_type"]:checked')?.value || 'seeker';

        const updateRoleSection = () => {
            const role = getSelectedRole();

            // Hide both first
            seekerSection.classList.add('hidden');
            employerSection.classList.add('hidden');

            // Show the correct one
            if (role === 'seeker') {
                seekerSection.classList.remove('hidden');
            } else {
                employerSection.classList.remove('hidden');
            }

            if (currentStep === 2 && stepTitle) {
                stepTitle.textContent = role === 'seeker' ? 'Job Seeker Details' : 'Employer Details';
            }
        };

        // ─── STEP MANAGEMENT ──────────────────────────────────────────────────
        const setStep = (step) => {
            currentStep = step;

            if (stepCounter) stepCounter.textContent = `Step ${step} of 2`;
            if (progressBar) progressBar.style.width  = `${(step / 2) * 100}%`;

            step1.classList.toggle('hidden', step !== 1);
            step2.classList.toggle('hidden', step !== 2);

            if (backBtn)   backBtn.classList.toggle('hidden', step === 1);
            if (nextBtn)   nextBtn.classList.toggle('hidden', step !== 1);
            if (submitBtn) submitBtn.classList.toggle('hidden', step !== 2);

            if (stepTitle) {
                stepTitle.textContent = step === 1
                    ? 'Basic Information'
                    : (getSelectedRole() === 'seeker' ? 'Job Seeker Details' : 'Employer Details');
            }

            updateRoleSection();
        };

        // ─── INIT ─────────────────────────────────────────────────────────────
        setStep(1);

        // ─── EVENT LISTENERS ──────────────────────────────────────────────────
        nextBtn?.addEventListener('click', () => {
            if (validateStep1()) setStep(2);
        });

        backBtn?.addEventListener('click', () => setStep(1));

        submitBtn?.addEventListener('click', (e) => {
            if (!validateStep2()) {
                e.preventDefault();
            }
        });

        roleRadios.forEach(radio => radio.addEventListener('change', updateRoleSection));

        // Show picked filename in the upload label
        document.getElementById('resumeUpload')?.addEventListener('change', function () {
            const el = document.getElementById('resume-filename');
            if (el) el.textContent = this.files[0]?.name || 'Upload your resume';
        });

        document.getElementById('logoUpload')?.addEventListener('change', function () {
            const el = document.getElementById('logo-filename');
            if (el) el.textContent = this.files[0]?.name || 'Upload your logo';
        });

        // File browse buttons
        document.querySelectorAll('[data-file-trigger]').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById(button.getAttribute('data-file-target'))?.click();
            });
        });

    });
    </script>

</body>
</html>
