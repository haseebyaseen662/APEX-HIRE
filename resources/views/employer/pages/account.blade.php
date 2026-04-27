@extends('employer.layouts.app')

@section('page_title', 'Account')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Account</h2>
                <p class="text-on-surface-variant text-sm mt-1">Manage your company profile and account preferences.</p>
            </div>
            <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                Save Changes
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-7 space-y-5">
                <section class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <div>
                            <h3 class="text-lg font-bold">Company Profile</h3>
                            <p class="text-sm text-on-surface-variant">Preview-only fields for your company identity.</p>
                        </div>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-light text-primary text-xs font-bold uppercase tracking-widest">
                            {{ optional(auth()->user()->company)->company_name ?? 'Company' }}
                        </span>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-start gap-6">
                        <div class="w-28 h-28 rounded-2xl border-2 border-dashed border-outline-variant/40 bg-surface-low flex items-center justify-center shrink-0 overflow-hidden">
                            <span class="material-symbols-outlined text-5xl text-on-surface-variant">business</span>
                        </div>

                        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1 sm:col-span-2">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Company Name</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="text" value="Apex Hire Global" readonly>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Industry</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="text" value="Tech & Software" readonly>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Company Size</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="text" value="50-200 Employees" readonly>
                            </div>
                            <div class="space-y-1 sm:col-span-2">
                                <label class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Location</label>
                                <input class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm" type="text" value="San Francisco, CA" readonly>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <div>
                            <h3 class="text-lg font-bold">Company Description</h3>
                            <p class="text-sm text-on-surface-variant">The public-facing summary shown on your employer profile.</p>
                        </div>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest">
                            Live
                        </span>
                    </div>

                    <textarea class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm min-h-32" readonly>We are a premier talent acquisition firm specializing in hyper-growth startups. Our mission is to connect visionary founders with the engineers and designers who will build the future.</textarea>
                </section>
            </div>

            <div class="lg:col-span-5 space-y-5">
                <section class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Subscription</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">workspace_premium</span>
                        </div>
                        <div>
                            <p class="font-semibold">Professional Plan</p>
                            <p class="text-xs text-on-surface-variant">Current active subscription</p>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-sm font-bold">Job Posting Limit</span>
                            <span class="text-sm font-bold text-primary">8 / 15 Posts</span>
                        </div>
                        <div class="w-full h-2 bg-surface-high rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[53%] rounded-full"></div>
                        </div>
                        <p class="text-xs text-on-surface-variant mt-2 uppercase font-bold tracking-wider">Resets in 12 days</p>
                    </div>
                    <button class="w-full py-3 rounded-full border border-primary/20 text-primary font-bold hover:bg-primary/5 transition-all text-sm" type="button">
                        Manage Billing
                    </button>
                </section>

                <section class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Security & Privacy</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Change Password</p>
                                <p class="text-xs text-on-surface-variant">Last updated 3 months ago</p>
                            </div>
                            <span class="material-symbols-outlined text-on-surface-variant/60">chevron_right</span>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Two-Factor Authentication</p>
                                <p class="text-xs text-green-600 font-bold">Enabled</p>
                            </div>
                            <span class="material-symbols-outlined text-on-surface-variant/60">chevron_right</span>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Delete Company Profile</p>
                                <p class="text-xs text-on-surface-variant">Permanently remove company history and recruitment data.</p>
                            </div>
                            <button class="text-xs font-bold text-red-600" type="button">Delete</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
