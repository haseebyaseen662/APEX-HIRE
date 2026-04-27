@extends('employer.layouts.app')

@section('page_title', 'Post Job')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Post a Job</h2>
                <p class="text-on-surface-variant text-sm mt-1">Create a compelling job posting to attract top talent.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="inline-flex items-center justify-center px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs leading-none hover:bg-surface-high transition-all" type="button">
                    Save as Draft
                </button>
                <button class="inline-flex items-center justify-center gap-2 gradient-primary text-white px-4 py-2 rounded-full font-bold text-xs leading-none shadow-md hover:opacity-90 transition-all" type="button">
                    Post Job
                </button>
            </div>
        </div>

        <form class="space-y-6">
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">work</span>
                    Basic Information
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Job Title</label>
                        <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="e.g. Senior Product Designer" type="text">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Job Type</label>
                        <select class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            <option>Full-time</option>
                            <option>Part-time</option>
                            <option>Contract</option>
                            <option>Freelance</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Experience Level</label>
                        <select class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            <option>Entry Level</option>
                            <option>Mid-Level</option>
                            <option>Senior</option>
                            <option>Executive</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Location</label>
                        <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Remote, New York, etc." type="text">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Application Deadline</label>
                        <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" type="date">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Salary Range (Annual USD)</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 font-semibold">$</span>
                                <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 pl-9 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Min" type="text">
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 font-semibold">$</span>
                                <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 pl-9 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Max" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">description</span>
                    Job Description
                </h3>
                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Role Overview</label>
                        <textarea class="w-full min-h-[120px] rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm leading-relaxed placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none" placeholder="Write a compelling job description..."></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Key Responsibilities</label>
                        <textarea class="w-full min-h-[120px] rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm leading-relaxed placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none" placeholder="List the core responsibilities for the role..."></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Required Experience</label>
                        <textarea class="w-full min-h-[120px] rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm leading-relaxed placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none" placeholder="Summarize the experience and skills required..."></textarea>
                    </div>
                    <p class="text-xs text-on-surface-variant/60 flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">info</span>
                        Minimum 200 characters recommended for better search ranking.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end gap-4 pt-4">
                <button class="inline-flex items-center justify-center px-4 py-2 border border-outline-variant/40 rounded-full bg-surface-high text-on-surface font-bold text-sm leading-none hover:bg-surface-low transition-all" type="button">
                    Cancel
                </button>
                <button class="inline-flex items-center justify-center gap-2 gradient-primary text-white px-4 py-2 rounded-full font-bold text-sm leading-none shadow-md hover:opacity-90 transition-all" type="submit">
                    Post Job
                    <span class="material-symbols-outlined text-sm">rocket_launch</span>
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
