@extends('employer.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Dashboard Overview</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Welcome back, {{ auth()->user()->name ?? 'Employer' }}. Here's what's happening with your recruitment funnel today.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all">
                        View Analytics
                    </button>
                    <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                        Post a Job
                    </button>
                </div>
            </div>

            {{-- ── Stats Grid ── --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-5">

                {{-- Total Jobs Posted --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] relative overflow-hidden section-card fade-up">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full -mr-16 -mt-16 blur-2xl pointer-events-none"></div>
                    <div class="relative flex items-center justify-between">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Total Jobs Posted</p>
                            <p class="text-2xl font-extrabold">24</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">work</span>
                        </div>
                    </div>
                </div>

                {{-- Total Applicants --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                    <div>
                        <p class="text-xs text-on-surface-variant font-medium">Total Applicants</p>
                        <p class="text-2xl font-extrabold">1,284</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">group</span>
                    </div>
                </div>

                {{-- Shortlisted Count --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                    <div>
                        <p class="text-xs text-on-surface-variant font-medium">Shortlisted Count</p>
                        <p class="text-2xl font-extrabold">156</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">star</span>
                    </div>
                </div>

                {{-- Hired Count --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                    <div>
                        <p class="text-xs text-on-surface-variant font-medium">Hired Count</p>
                        <p class="text-2xl font-extrabold text-green-600">42</p>
                    </div>
                    <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-green-600">check_circle</span>
                    </div>
                </div>

            </div>

            {{-- ── Application Activity Chart ── --}}
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] relative overflow-hidden section-card fade-up">
                <div class="flex justify-between items-start mb-6 gap-4">
                    <div>
                        <h4 class="text-lg font-bold tracking-tight text-on-surface leading-snug">
                            Application Activity Over Time
                        </h4>
                        <p class="text-sm text-on-surface-variant mt-1 leading-relaxed">
                            Monthly volume of incoming candidate applications
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-3 py-1.5 rounded-full text-xs font-bold bg-surface-low text-on-surface-variant hover:bg-primary hover:text-white transition-all">
                            Weekly
                        </button>
                        <button class="px-3 py-1.5 rounded-full text-xs font-bold bg-primary text-white shadow-md">
                            Monthly
                        </button>
                    </div>
                </div>

                {{-- Abstract Chart Visualization --}}
                <div class="h-64 flex items-end justify-between gap-4 px-2">
                    <div class="w-full bg-surface-low rounded-t-lg h-[40%] hover:bg-primary/20 transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            120
                        </div>
                    </div>
                    <div class="w-full bg-surface-low rounded-t-lg h-[65%] hover:bg-primary/20 transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            185
                        </div>
                    </div>
                    <div class="w-full bg-surface-low rounded-t-lg h-[45%] hover:bg-primary/20 transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            140
                        </div>
                    </div>
                    <div class="w-full bg-surface-low rounded-t-lg h-[85%] hover:bg-primary/20 transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            250
                        </div>
                    </div>
                    <div class="w-full bg-surface-low rounded-t-lg h-[60%] hover:bg-primary/20 transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            170
                        </div>
                    </div>
                    <div class="w-full bg-primary/40 rounded-t-lg h-[95%] hover:bg-primary transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            312
                        </div>
                    </div>
                    <div class="w-full bg-primary/20 rounded-t-lg h-[75%] hover:bg-primary transition-all group relative">
                        <div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                            220
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mt-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">
                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                    <span>Jun</span>
                    <span>Jul</span>
                </div>
            </div>

        </div>
</main>
@endsection
