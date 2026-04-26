@extends('employer.onboarding.layout')

@section('page_title', 'Company Profile — Apex Hire')

@section('progress')
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <span class="text-sm font-semibold text-primary">Step 1 of 1</span>
            <span class="text-sm text-slate-500 dark:text-slate-400">Company Profile</span>
        </div>
        <div class="relative h-2 w-full rounded-full bg-slate-200 dark:bg-slate-700 overflow-hidden">
            <div class="absolute top-0 left-0 h-full rounded-full bg-primary transition-all duration-300" style="width: 100%;"></div>
        </div>
    </div>
@endsection

@section('header')
    <div class="flex items-start justify-between gap-4">
        <div class="flex flex-col gap-2 text-left">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Company Profile</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Tell us about your company so you can start hiring.</p>
        </div>
        <a href="{{ route('employer.onboarding.complete') }}" class="flex items-center justify-center gap-2 px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition-colors border border-slate-300 dark:border-slate-600 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 whitespace-nowrap mt-1">
            <span>Skip</span>
            <i class="bx bx-skip-next text-lg"></i>
        </a>
    </div>
@endsection

@section('content')
    @if (session('status'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm font-medium">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('employer.onboarding.profile.store') }}" enctype="multipart/form-data" class="flex flex-col gap-6" novalidate>
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-1 md:col-span-2">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company_name">
                    Company Name <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="company_name"
                    name="company_name"
                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('company_name') field-error @enderror"
                    placeholder="e.g. Apex Hire"
                    value="{{ old('company_name', $company->company_name) }}"
                />
                @error('company_name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="industry">
                    Industry <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="industry"
                    name="industry"
                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('industry') field-error @enderror"
                    placeholder="e.g. Software"
                    value="{{ old('industry', $company->industry) }}"
                />
                @error('industry')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company_size">
                    Company Size <span class="text-red-500">*</span>
                </label>
                <select
                    id="company_size"
                    name="company_size"
                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('company_size') field-error @enderror"
                >
                    @php
                        $size = old('company_size', $company->company_size);
                    @endphp
                    <option value="">Select size</option>
                    <option value="1-10" @selected($size === '1-10')>1-10</option>
                    <option value="11-50" @selected($size === '11-50')>11-50</option>
                    <option value="51-200" @selected($size === '51-200')>51-200</option>
                    <option value="201-500" @selected($size === '201-500')>201-500</option>
                    <option value="500+" @selected($size === '500+')>500+</option>
                </select>
                @error('company_size')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1 md:col-span-2">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="employer_location">
                    Location <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="employer_location"
                    name="employer_location"
                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('employer_location') field-error @enderror"
                    placeholder="City, Country"
                    value="{{ old('employer_location', $company->employer_location) }}"
                />
                @error('employer_location')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1 md:col-span-2">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company_logo">
                    Company Logo <span class="font-normal text-slate-400">(optional)</span>
                </label>
                <input
                    type="file"
                    id="company_logo"
                    name="company_logo"
                    accept="image/*"
                    class="block w-full text-sm text-slate-700 file:mr-4 file:rounded-lg file:border-0 file:bg-primary file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-primary-dark dark:text-slate-200"
                />
                @error('company_logo')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-4 pt-6 border-t border-slate-200 dark:border-slate-700">
            <button
                type="submit"
                class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-base font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20 w-full sm:w-auto"
            >
                <span>Continue</span>
                <i class="bx bx-check text-lg"></i>
            </button>
        </div>
    </form>
@endsection

