@extends('employer.layouts.app')

@section('page_title', 'Job Detail')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <button class="p-2 hover:bg-surface-low rounded-full transition-colors" type="button">
                        <span class="material-symbols-outlined text-primary">arrow_back</span>
                    </button>
                    <span class="px-3 py-1 bg-primary-light text-primary text-xs font-bold rounded-full uppercase tracking-wider">Active Position</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Senior Product Designer</h2>
                <div class="flex flex-wrap items-center gap-4 text-on-surface-variant text-sm mt-1">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        San Francisco, CA (Hybrid)
                    </span>
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">attach_money</span>
                        $140k - $180k
                    </span>
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        Full-time
                    </span>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Close Job
                </button>
                <a href="{{ route('employer.job-create') }}" class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">edit</span>
                    Edit Job
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">
            <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Applications</p>
                        <p class="text-2xl font-extrabold">142</p>
                    </div>
                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-blue-600">person_add</span>
                    </div>
                </div>
                <p class="text-xs text-green-600 font-bold">+12 this week</p>
            </div>
            <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Shortlisted</p>
                        <p class="text-2xl font-extrabold">24</p>
                    </div>
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-green-600">check_circle</span>
                    </div>
                </div>
                <p class="text-xs text-on-surface-variant/60">17% of total</p>
            </div>
            <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Interviews</p>
                        <p class="text-2xl font-extrabold">8</p>
                    </div>
                    <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-orange-600">calendar_today</span>
                    </div>
                </div>
                <p class="text-xs text-on-surface-variant/60">Scheduled</p>
            </div>
            <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <div class="flex items-center justify-between mb-3">
                    <div>
                        <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Views</p>
                        <p class="text-2xl font-extrabold">1.2k</p>
                    </div>
                    <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-purple-600">visibility</span>
                    </div>
                </div>
                <p class="text-xs text-on-surface-variant/60">This month</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">work</span>
                        Job Description
                    </h3>
                    <div class="prose prose-sm max-w-none text-on-surface-variant">
                        <p>We are looking for a Senior Product Designer to join our growing design team. You will shape user experiences across our product suite.</p>
                        <p>This role involves close collaboration with product managers, engineers, and other designers to create intuitive, beautiful, and functional experiences.</p>
                    </div>
                </div>

                <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">checklist</span>
                        Requirements
                    </h3>
                    <ul class="space-y-2 text-on-surface-variant">
                        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span><span>5+ years of product design experience</span></li>
                        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span><span>Proficiency in Figma, Sketch, or similar tools</span></li>
                        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span><span>Experience with design systems and component libraries</span></li>
                        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span><span>Strong portfolio demonstrating user-centered design</span></li>
                    </ul>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <button class="w-full p-3 bg-primary-light text-primary font-bold rounded-lg hover:bg-primary/10 transition-all text-left flex items-center gap-2" type="button">
                            <span class="material-symbols-outlined text-sm">visibility</span>
                            View Applicants
                        </button>
                        <button class="w-full p-3 bg-surface-high text-on-surface font-bold rounded-lg hover:bg-surface-low transition-all text-left flex items-center gap-2" type="button">
                            <span class="material-symbols-outlined text-sm">share</span>
                            Share Job
                        </button>
                        <button class="w-full p-3 bg-surface-high text-on-surface font-bold rounded-lg hover:bg-surface-low transition-all text-left flex items-center gap-2" type="button">
                            <span class="material-symbols-outlined text-sm">analytics</span>
                            View Analytics
                        </button>
                    </div>
                </div>

                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Job Information</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between"><span class="text-on-surface-variant/60">Posted</span><span>2 weeks ago</span></div>
                        <div class="flex justify-between"><span class="text-on-surface-variant/60">Expires</span><span>Dec 31, 2026</span></div>
                        <div class="flex justify-between"><span class="text-on-surface-variant/60">Department</span><span>Design</span></div>
                        <div class="flex justify-between"><span class="text-on-surface-variant/60">Location</span><span>San Francisco</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
