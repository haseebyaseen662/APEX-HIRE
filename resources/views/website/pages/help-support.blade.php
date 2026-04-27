@extends('website.layouts.app')

@section('title', 'Help & Support')

@section('content')
<main class="flex-1">
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-surface to-primary-light/60">
        <div class="absolute inset-0 opacity-60">
            <div class="absolute -top-20 right-0 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-secondary/10 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.25em] text-primary shadow-sm">
                    Help Center
                </span>
                <h1 class="mt-5 text-4xl sm:text-5xl font-extrabold tracking-tight text-on-surface">
                    Help & Support
                </h1>
                <p class="mt-4 text-base sm:text-lg text-on-surface-variant leading-relaxed">
                    Find quick answers about your account, applications, profile setup, and security.
                </p>

                <div class="mt-8 relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">
                        <i class="bx bx-search text-xl"></i>
                    </span>
                    <input
                        type="text"
                        placeholder="Search for articles, topics, or keywords"
                        class="w-full rounded-2xl border border-outline-variant/30 bg-white px-12 py-4 text-sm shadow-sm focus:border-primary focus:outline-none focus:ring-4 focus:ring-primary/10"
                    />
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-14">
        <div class="flex items-center justify-between gap-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold tracking-tight">Browse categories</h2>
                <p class="text-sm text-on-surface-variant mt-1">Jump straight into the topic you need.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
            <div class="rounded-2xl bg-white p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">person</span>
                </div>
                <h3 class="mt-4 font-bold text-lg">Account</h3>
                <p class="mt-2 text-sm text-on-surface-variant">Update your login details, password, and account settings.</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">work</span>
                </div>
                <h3 class="mt-4 font-bold text-lg">Applications</h3>
                <p class="mt-2 text-sm text-on-surface-variant">See how application stages work and what happens next.</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">badge</span>
                </div>
                <h3 class="mt-4 font-bold text-lg">Profile</h3>
                <p class="mt-2 text-sm text-on-surface-variant">Edit your headline, skills, experience, and profile photo.</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">security</span>
                </div>
                <h3 class="mt-4 font-bold text-lg">Security</h3>
                <p class="mt-2 text-sm text-on-surface-variant">Keep your account safe with password and 2FA guidance.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 pb-14">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-7">
                <div class="rounded-2xl bg-white p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                    <div class="flex items-center justify-between gap-4 mb-6">
                        <div>
                            <h2 class="text-2xl font-bold tracking-tight">Popular articles</h2>
                            <p class="text-sm text-on-surface-variant mt-1">Common questions we see from seekers.</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <a href="#" class="flex items-center justify-between gap-4 rounded-xl border border-outline-variant/10 bg-surface-low/50 px-4 py-4 hover:bg-primary-light/60 transition-colors">
                            <div>
                                <p class="font-semibold">How do I complete my profile?</p>
                                <p class="text-sm text-on-surface-variant">Fill in your headline, location, experience, and education.</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        </a>
                        <a href="#" class="flex items-center justify-between gap-4 rounded-xl border border-outline-variant/10 bg-surface-low/50 px-4 py-4 hover:bg-primary-light/60 transition-colors">
                            <div>
                                <p class="font-semibold">Where can I check my applications?</p>
                                <p class="text-sm text-on-surface-variant">Use the Applications page to review every submission.</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        </a>
                        <a href="#" class="flex items-center justify-between gap-4 rounded-xl border border-outline-variant/10 bg-surface-low/50 px-4 py-4 hover:bg-primary-light/60 transition-colors">
                            <div>
                                <p class="font-semibold">How do I update my password?</p>
                                <p class="text-sm text-on-surface-variant">Open the Account page and use the password section.</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        </a>
                        <a href="#" class="flex items-center justify-between gap-4 rounded-xl border border-outline-variant/10 bg-surface-low/50 px-4 py-4 hover:bg-primary-light/60 transition-colors">
                            <div>
                                <p class="font-semibold">What if I do not receive an interview invite?</p>
                                <p class="text-sm text-on-surface-variant">Check your application status and keep your profile updated.</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-2xl bg-white p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] border border-outline-variant/10">
                    <h2 class="text-2xl font-bold tracking-tight mb-4">Frequently asked questions</h2>
                    <div class="space-y-3">
                        <details class="group rounded-xl border border-outline-variant/10 bg-surface-low/50 p-4">
                            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between gap-3">
                                Can I change my profile photo?
                                <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <p class="mt-3 text-sm text-on-surface-variant">Yes. Open your profile page and use the photo upload placeholder when the edit flow is enabled.</p>
                        </details>
                        <details class="group rounded-xl border border-outline-variant/10 bg-surface-low/50 p-4">
                            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between gap-3">
                                How do I track application progress?
                                <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <p class="mt-3 text-sm text-on-surface-variant">Visit Applications to view every submission and its current status chip.</p>
                        </details>
                        <details class="group rounded-xl border border-outline-variant/10 bg-surface-low/50 p-4">
                            <summary class="cursor-pointer list-none font-semibold flex items-center justify-between gap-3">
                                Is two-factor authentication available?
                                <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <p class="mt-3 text-sm text-on-surface-variant">The account page shows the current 2FA status and the future enable flow.</p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
