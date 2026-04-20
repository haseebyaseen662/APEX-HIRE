@extends('employer.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Job Listings</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Manage and monitor your active recruitment campaigns</p>
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

                {{-- Total Active Roles --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] relative overflow-hidden section-card fade-up">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-primary/5 rounded-full -mr-16 -mt-16 blur-2xl pointer-events-none"></div>
                    <div class="relative flex items-center justify-between">
                        <div>
                            <p class="text-xs text-on-surface-variant font-medium">Total Active Roles</p>
                            <p class="text-2xl font-extrabold">24</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">work</span>
                        </div>
                    </div>
                </div>

                {{-- Priority Hire --}}
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                    <div>
                        <p class="text-xs text-on-surface-variant font-medium">Priority Hire</p>
                        <p class="text-lg font-extrabold">Senior UX Designer</p>
                        <p class="text-sm text-on-surface-variant">45+ new applicants</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">star</span>
                    </div>
                </div>

            </div>

            {{-- ── Job Listings ── --}}
            <div class="space-y-4 fade-up">

                {{-- Job Card 1 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-lg font-bold">Senior Product Designer</h3>
                                <span class="px-2 py-1 bg-primary-light text-primary text-xs font-bold rounded-full">Active</span>
                            </div>
                            <p class="text-on-surface-variant text-sm mb-3">San Francisco, CA • Full-time • Posted 2 days ago</p>
                            <div class="flex items-center gap-4 text-sm">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">group</span>
                                    15 applicants
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    120 views
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">edit</span>
                            </button>
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">delete</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Job Card 2 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-lg font-bold">Staff Frontend Engineer</h3>
                                <span class="px-2 py-1 bg-primary-light text-primary text-xs font-bold rounded-full">Active</span>
                            </div>
                            <p class="text-on-surface-variant text-sm mb-3">Remote • Full-time • Posted 5 days ago</p>
                            <div class="flex items-center gap-4 text-sm">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">group</span>
                                    8 applicants
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    85 views
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">edit</span>
                            </button>
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">delete</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Job Card 3 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card opacity-70">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-lg font-bold">Growth Marketing Manager</h3>
                                <span class="px-2 py-1 bg-surface-low text-on-surface-variant text-xs font-bold rounded-full">Inactive</span>
                            </div>
                            <p class="text-on-surface-variant text-sm mb-3">New York, NY • Contract • Closed 1 week ago</p>
                            <div class="flex items-center gap-4 text-sm">
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">group</span>
                                    42 applicants
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    200 views
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">refresh</span>
                            </button>
                            <button class="p-2 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-red-600">delete</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</main>
@endsection
