@extends('seeker.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">My Profile</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Keep your profile complete to get discovered faster.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all">
                        View Public
                    </button>
                    <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                        Update Profile
                    </button>
                </div>
            </div>

            {{-- ── Top Row: Progress + Stats ── --}}
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 mb-5">

                {{-- Profile Completion Card --}}
                <div class="md:col-span-7 bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] relative overflow-hidden section-card fade-up">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full -mr-16 -mt-16 blur-2xl pointer-events-none"></div>
                    <div class="relative flex flex-col sm:flex-row items-center gap-6">

                        {{-- Ring --}}
                        <div class="relative w-32 h-32 shrink-0">
                            <svg class="w-full h-full -rotate-90" viewBox="0 0 120 120">
                                <circle class="ring-track" cx="60" cy="60" r="52" fill="transparent" stroke-width="10"/>
                                <circle class="ring-fill" cx="60" cy="60" r="52" fill="transparent" stroke-width="10"
                                    stroke-dasharray="326.7"
                                    stroke-dashoffset="65.3"
                                    {{-- 80% complete: dashoffset = circumference * (1 - 0.80) --}}
                                />
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-2xl font-extrabold">80%</span>
                                <span class="text-[9px] font-bold uppercase tracking-wider text-on-surface-variant">Done</span>
                            </div>
                        </div>

                        <div class="flex-1 text-center sm:text-left">
                            <span class="inline-block px-2.5 py-1 bg-primary-light text-primary font-bold text-[10px] uppercase tracking-widest rounded-full mb-3">
                                All-Star Profile
                            </span>
                            <h3 class="text-lg font-bold mb-2">
                                Almost there, {{ explode(' ', auth()->user()->name ?? 'there')[0] }}!
                            </h3>
                            <p class="text-on-surface-variant text-sm leading-relaxed mb-4">
                                Add certifications to reach 100% and become
                                <span class="text-primary font-semibold">4× more visible</span> to recruiters.
                            </p>
                            <div class="flex flex-wrap gap-2 justify-center sm:justify-start">
                                <button class="flex items-center gap-1.5 px-3 py-1.5 bg-surface-low rounded-full text-xs font-semibold hover:bg-primary hover:text-white transition-all">
                                    <span class="material-symbols-outlined text-sm">add</span>
                                    Certifications
                                </button>
                                <button class="flex items-center gap-1.5 px-3 py-1.5 bg-surface-low rounded-full text-xs font-semibold hover:bg-primary hover:text-white transition-all">
                                    <span class="material-symbols-outlined text-sm">add</span>
                                    Portfolio
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Quick Stats --}}
                <div class="md:col-span-5 grid grid-cols-1 gap-4 fade-up">

                    <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Profile Views</p>
                            <p class="text-2xl font-extrabold">1,284</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">visibility</span>
                        </div>
                    </div>

                    <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Search Appearances</p>
                            <p class="text-2xl font-extrabold">42</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">manage_search</span>
                        </div>
                    </div>

                    <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Response Rate</p>
                            <p class="text-2xl font-extrabold text-green-600">98%</p>
                        </div>
                        <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-green-600">thumb_up</span>
                        </div>
                    </div>

                </div>

            </div>

            {{-- ── Profile Sections ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-5 fade-up">

                {{-- Education --}}
                <a href="{{ route('seeker.onboarding.education') }}"
                   class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] cursor-pointer group section-card block">
                    <div class="w-11 h-11 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h4 class="font-bold mb-1">Education</h4>
                    <p class="text-sm text-on-surface-variant mb-4 leading-relaxed">
                        {{ $seeker->latest_education ?? 'Add your academic background' }}
                    </p>
                    <span class="text-primary text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">
                        Edit Section
                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </span>
                </a>

                {{-- Experience --}}
                <a href="#"
                   class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] cursor-pointer group section-card block">
                    <div class="w-11 h-11 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">business_center</span>
                    </div>
                    <h4 class="font-bold mb-1">Experience</h4>
                    <p class="text-sm text-on-surface-variant mb-4 leading-relaxed">
                        {{ $seeker->latest_experience ?? 'Add your work history' }}
                    </p>
                    <span class="text-primary text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">
                        Edit Section
                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </span>
                </a>

                {{-- Skills --}}
                <a href="#"
                   class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] cursor-pointer group section-card block">
                    <div class="w-11 h-11 bg-primary-light text-primary rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined">electric_bolt</span>
                    </div>
                    <h4 class="font-bold mb-1">Skills</h4>
                    <p class="text-sm text-on-surface-variant mb-4 leading-relaxed">
                        {{ $seeker->skills_summary ?? 'Add your key skills' }}
                    </p>
                    <span class="text-primary text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">
                        Edit Section
                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                    </span>
                </a>

            </div>

            {{-- ── Career Insights ── --}}
            <div class="bg-surface-white rounded-xl mb-16 p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] fade-up">
                <div class="flex flex-col md:flex-row gap-8 items-start">

                    <div class="md:w-64 shrink-0">
                        <h3 class="text-lg font-bold mb-2">Weekly Insights</h3>
                        <p class="text-sm text-on-surface-variant leading-relaxed">
                            Analyzed 450+ roles in your sector. Here's how you compare to current market demand.
                        </p>
                    </div>

                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">

                        <div class="p-5 bg-surface-low rounded-xl">
                            <p class="text-[10px] font-bold text-primary mb-1.5 uppercase tracking-widest">Market Demand</p>
                            <p class="text-2xl font-extrabold mb-0.5">High</p>
                            <p class="text-[11px] text-on-surface-variant">Top 5% of all roles</p>
                        </div>

                        <div class="p-5 bg-surface-low rounded-xl">
                            <p class="text-[10px] font-bold text-secondary mb-1.5 uppercase tracking-widest">Avg. Salary</p>
                            <p class="text-2xl font-extrabold mb-0.5">$160k</p>
                            <p class="text-[11px] text-on-surface-variant">Based on your market</p>
                        </div>

                        <div class="p-5 bg-surface-low rounded-xl">
                            <p class="text-[10px] font-bold text-tertiary mb-1.5 uppercase tracking-widest">Skill Match</p>
                            <p class="text-2xl font-extrabold mb-0.5">92%</p>
                            <p class="text-[11px] text-on-surface-variant">Match to open roles</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</main>
@endsection
