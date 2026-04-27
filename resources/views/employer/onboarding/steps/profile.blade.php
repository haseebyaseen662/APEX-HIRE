@extends('employer.onboarding.layout')

@section('page_title', 'Company Profile - Apex Hire')

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
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Set up your company profile</h1>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Add your company details so candidates can recognize your brand.</p>
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
            @php
                $existingLogoUrl = null;
                if (!empty($company->company_logo)) {
                    $existingLogoUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($company->company_logo);
                }
            @endphp

            <div class="md:col-span-2 flex flex-col sm:flex-row sm:items-center gap-5">
                <input
                    class="sr-only"
                    type="file"
                    id="company_logo"
                    name="company_logo"
                    accept="image/*"
                />

                <label for="company_logo" class="relative group cursor-pointer">
                    <div class="relative w-20 h-20 rounded-xl bg-slate-50 dark:bg-slate-900 overflow-hidden border-2 border-dashed border-slate-300/70 dark:border-slate-700 group-hover:border-primary transition-colors">
                        <img
                            id="company-logo-img"
                            src="{{ $existingLogoUrl ?? '' }}"
                            alt="Company logo preview"
                            data-has-existing="{{ $existingLogoUrl ? '1' : '0' }}"
                            class="absolute inset-0 w-full h-full object-cover {{ $existingLogoUrl ? '' : 'hidden' }}"
                        />
                        <div id="company-logo-icon" class="absolute inset-0 flex items-center justify-center {{ $existingLogoUrl ? 'hidden' : '' }}">
                            <span class="material-symbols-outlined text-on-surface-variant/60">business</span>
                        </div>
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                </label>

                <div class="flex-1">
                    <h4 class="font-bold">
                        Company Logo <span class="font-normal text-slate-400">(optional)</span>
                    </h4>
                    <p class="text-xs text-on-surface-variant/60 mt-1">PNG or JPG. Max 2MB. Recommended 400x400px.</p>
                    <p id="company-logo-filename" class="text-xs text-slate-500 dark:text-slate-400 mt-1 truncate">
                        {{ $existingLogoUrl ? 'Current image selected' : 'No file selected.' }}
                    </p>
                    <div class="mt-2 flex items-center gap-3">
                        <label for="company_logo" class="inline-flex items-center justify-center text-xs font-bold text-primary px-4 py-2 bg-primary/10 rounded-full hover:bg-primary/15 transition-colors cursor-pointer">
                            Replace Image
                        </label>
                    </div>
                    @error('company_logo')
                        <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="space-y-1 md:col-span-2">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company_name">Company Name <span class="text-red-500">*</span></label>
                <input type="text" id="company_name" name="company_name" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('company_name') field-error @enderror" placeholder="e.g. Apex Hire" value="{{ old('company_name', $company->company_name) }}" />
                @error('company_name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="industry">Industry <span class="text-red-500">*</span></label>
                <input type="text" id="industry" name="industry" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('industry') field-error @enderror" placeholder="e.g. Software" value="{{ old('industry', $company->industry) }}" />
                @error('industry')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="company_size">Company Size <span class="text-red-500">*</span></label>
                <select id="company_size" name="company_size" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('company_size') field-error @enderror">
                    @php $size = old('company_size', $company->company_size); @endphp
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
                <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="employer_location">Location <span class="text-red-500">*</span></label>
                <input type="text" id="employer_location" name="employer_location" class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('employer_location') field-error @enderror" placeholder="City, Country" value="{{ old('employer_location', $company->employer_location) }}" />
                @error('employer_location')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-4 pt-6 border-t border-slate-200 dark:border-slate-700">
            <button type="submit" class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-base font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20 w-full sm:w-auto">
                <span>Continue</span>
                <i class="bx bx-check text-lg"></i>
            </button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const input = document.getElementById('company_logo');
        const img = document.getElementById('company-logo-img');
        const icon = document.getElementById('company-logo-icon');
        const filename = document.getElementById('company-logo-filename');

        if (!input) return;

        input.addEventListener('change', () => {
            const file = input.files && input.files[0];
            if (!file) {
                if (filename) filename.textContent = 'No file selected.';
                if (img && img.dataset.hasExisting !== '1') img.classList.add('hidden');
                if (icon && img && img.dataset.hasExisting !== '1') icon.classList.remove('hidden');
                return;
            }

            if (filename) filename.textContent = file.name;

            if (!img) return;
            const reader = new FileReader();
            reader.onload = (e) => {
                img.src = e.target.result;
                img.classList.remove('hidden');
                if (icon) icon.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        });
    });
    </script>
@endpush
