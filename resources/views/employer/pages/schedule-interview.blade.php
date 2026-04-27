@extends('employer.layouts.app')

@section('page_title', 'Schedule Interview')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Schedule Interview</h2>
                <p class="text-on-surface-variant text-sm mt-1">Set up an interview with Sarah Chen for Senior Product Designer.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Back to Profile
                </button>
                <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                    Send Invite
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">calendar_today</span>
                    Interview Details
                </h3>
                <div class="space-y-6">
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Interview Type</label>
                        <select class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            <option>Technical Interview</option>
                            <option>Behavioral Interview</option>
                            <option>Final Round</option>
                            <option>Informational</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Date & Time</label>
                        <input class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" type="datetime-local">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Duration</label>
                        <select class="w-full rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            <option>30 minutes</option>
                            <option>45 minutes</option>
                            <option>1 hour</option>
                            <option>1.5 hours</option>
                            <option>2 hours</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-2">Interview Format</label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3"><input type="radio" name="format" class="w-4 h-4 text-primary" checked><span class="text-sm font-medium">Video Call (Zoom/Google Meet)</span></label>
                            <label class="flex items-center gap-3"><input type="radio" name="format" class="w-4 h-4 text-primary"><span class="text-sm font-medium">In-Person</span></label>
                            <label class="flex items-center gap-3"><input type="radio" name="format" class="w-4 h-4 text-primary"><span class="text-sm font-medium">Phone Call</span></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">group</span>
                    Interview Panel
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 p-3 bg-surface-high rounded-lg">
                        <div class="w-10 h-10 rounded-lg bg-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-sm">person</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-sm">You (Hiring Manager)</p>
                            <p class="text-xs text-on-surface-variant/60">Lead Interviewer</p>
                        </div>
                        <span class="px-2 py-1 bg-primary-light text-primary text-xs font-bold rounded-full">Required</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-surface-high rounded-lg">
                        <div class="w-10 h-10 rounded-lg bg-surface-low flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-surface-variant/60 text-sm">person</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-sm">Add Interviewer</p>
                            <p class="text-xs text-on-surface-variant/60">Optional</p>
                        </div>
                        <button class="p-2 hover:bg-surface-low rounded-lg transition-colors" type="button">
                            <span class="material-symbols-outlined text-on-surface-variant/60">add</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up mt-6">
            <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">notes</span>
                Additional Notes
            </h3>
            <textarea class="w-full min-h-[120px] rounded-xl bg-surface-low border border-outline-variant/40 px-4 py-3 text-sm leading-relaxed placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none" placeholder="Add any special instructions, preparation materials, or notes for the candidate..."></textarea>
        </div>
    </div>
</main>
@endsection
