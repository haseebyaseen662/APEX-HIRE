@extends('employer.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Account Settings</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Manage your company profile and account preferences</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all">
                        Cancel
                    </button>
                    <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                        Save Changes
                    </button>
                </div>
            </div>

            {{-- ── Company Profile ── --}}
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up mb-6">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">business</span>
                    Company Profile
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2 flex flex-col sm:flex-row sm:items-center gap-5">
                        <div class="relative group">
                            <div class="w-20 h-20 rounded-xl bg-surface-high flex items-center justify-center overflow-hidden border-2 border-dashed border-outline-variant/40 group-hover:border-primary transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant/60">business</span>
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer">
                                    <span class="material-symbols-outlined text-white">upload</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold">Company Logo</h4>
                            <p class="text-xs text-on-surface-variant/60 mt-1">PNG or JPG. Max 2MB. Recommended 400x400px.</p>
                            <button class="mt-2 text-xs font-bold text-primary px-4 py-2 bg-primary-light rounded-full hover:bg-primary/10 transition-colors">
                                Replace Image
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Company Name</label>
                        <input
                            class="w-full rounded-lg bg-surface-high border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text"
                            value="Apex Hire Global"
                        />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Industry</label>
                        <select class="w-full rounded-lg bg-surface-high border border-outline-variant/40 px-4 py-3 text-sm font-medium focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            <option>Tech & Software</option>
                            <option>Finance</option>
                            <option>Healthcare</option>
                            <option>Manufacturing</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Company Size</label>
                        <input
                            class="w-full rounded-lg bg-surface-high border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text"
                            value="50-200 Employees"
                        />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Location</label>
                        <input
                            class="w-full rounded-lg bg-surface-high border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                            type="text"
                            value="San Francisco, CA"
                        />
                    </div>
                    <div class="md:col-span-2 flex flex-col gap-2">
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Description</label>
                        <textarea
                            class="w-full rounded-lg bg-surface-high border border-outline-variant/40 px-4 py-3 text-sm font-medium placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
                            rows="4"
                        >We are a premier talent acquisition firm specializing in hyper-growth startups. Our mission is to connect visionary founders with the engineers and designers who will build the future.</textarea>
                    </div>
                </div>
            </div>

            {{-- ── Subscription & Billing ── --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">workspace_premium</span>
                        </div>
                        <div>
                            <h3 class="font-bold">Professional Plan</h3>
                            <p class="text-xs text-on-surface-variant/60">Current active subscription</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between items-end mb-2">
                            <span class="text-sm font-bold">Job Posting Limit</span>
                            <span class="text-sm font-bold text-primary">8 / 15 Posts</span>
                        </div>
                        <div class="w-full h-2 bg-surface-high rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[53%] rounded-full"></div>
                        </div>
                        <p class="text-xs text-on-surface-variant/60 mt-2 uppercase font-bold tracking-wider">Resets in 12 days</p>
                    </div>
                    <button class="w-full py-3 rounded-full border border-primary/20 text-primary font-bold hover:bg-primary/5 transition-all text-sm">
                        Manage Billing
                    </button>
                </div>
                <div class="bg-gradient-to-br from-primary to-primary-dark rounded-xl p-6 shadow-[0_4px_20px_rgba(158,0,182,0.2)] relative overflow-hidden section-card fade-up">
                    <div class="relative z-10">
                        <span class="px-3 py-1 bg-white/20 text-white text-xs font-bold rounded-full uppercase tracking-wider">
                            Recommended
                        </span>
                        <h3 class="text-xl font-bold text-white mt-3 mb-2">Enterprise Plus</h3>
                        <p class="text-white/80 text-sm leading-relaxed">
                            Unlimited job posts, dedicated account manager, and priority candidate matching.
                        </p>
                    </div>
                    <button class="relative z-10 w-full py-3 bg-white text-primary font-bold rounded-full shadow-md text-sm mt-6 hover:bg-white/90 transition-all">
                        Upgrade to Enterprise
                    </button>
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 blur-2xl rounded-full"></div>
                </div>
            </div>

            {{-- ── Security & Privacy ── --}}
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">security</span>
                    Security & Privacy
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-surface-high rounded-lg hover:bg-surface-low transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-surface-variant/60">lock</span>
                            </div>
                            <div>
                                <p class="font-bold">Change Password</p>
                                <p class="text-xs text-on-surface-variant/60">Last updated 3 months ago</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/40 group-hover:text-primary transition-colors">chevron_right</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-surface-high rounded-lg hover:bg-surface-low transition-colors cursor-pointer group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-surface-variant/60">smartphone</span>
                            </div>
                            <div>
                                <p class="font-bold">Two-Factor Authentication</p>
                                <p class="text-xs text-green-600 font-bold">Enabled</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/40 group-hover:text-primary transition-colors">chevron_right</span>
                    </div>
                    <div class="pt-6 mt-6 border-t border-outline-variant/40">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <p class="font-bold text-red-600">Delete Profile</p>
                                <p class="text-xs text-on-surface-variant/60 mt-1">
                                    Permanently remove all your recruitment data and company history.
                                </p>
                            </div>
                            <button class="px-5 py-2 text-red-600 font-bold border border-red-200 hover:bg-red-50 rounded-full text-sm transition-all">
                                Delete Profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection
