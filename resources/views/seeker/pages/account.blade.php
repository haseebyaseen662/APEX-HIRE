@extends('seeker.layouts.app')

@section('page_title', 'Account')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Account</h2>
                <p class="text-on-surface-variant text-sm mt-1">Manage your login, password, and security settings.</p>
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
                            <h3 class="text-lg font-bold">Change Username</h3>
                            <p class="text-sm text-on-surface-variant">Preview-only input block for a future account update flow.</p>
                        </div>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary-light text-primary text-xs font-bold uppercase tracking-widest">
                            {{ $user->name }}
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1 sm:col-span-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Display Name</label>
                            <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="text" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Email Address</label>
                            <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="email" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                </section>

                <section class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between gap-4 mb-5">
                        <div>
                            <h3 class="text-lg font-bold">Change Password</h3>
                            <p class="text-sm text-on-surface-variant">Keep your account secure with a strong password.</p>
                        </div>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-50 text-green-700 text-xs font-bold uppercase tracking-widest">
                            Secure
                        </span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1 sm:col-span-2">
                            <label class="text-sm font-semibold text-on-surface-variant">Current Password</label>
                            <input class="w-full rounded-xl border border-outline-variant/40 bg-surface-low px-4 py-3 text-sm" type="password" value="password123" readonly>
                        </div>
                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-on-surface-variant">New Password</label>
                            <input class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm" type="password" placeholder="Enter new password">
                        </div>
                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-on-surface-variant">Confirm Password</label>
                            <input class="w-full rounded-xl border border-outline-variant/40 bg-white px-4 py-3 text-sm" type="password" placeholder="Confirm password">
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:col-span-5 space-y-5">
                <section class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Two-Factor Authentication</h3>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary">security</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Protect your account with an extra verification step.</p>
                            <p class="text-sm text-on-surface-variant mt-1">2FA is currently turned off in this preview screen.</p>
                            <button class="mt-4 rounded-full bg-surface-low px-4 py-2 text-xs font-bold uppercase tracking-widest hover:bg-surface-high transition-colors" type="button">
                                Enable 2FA
                            </button>
                        </div>
                    </div>
                </section>

                <section class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <h3 class="text-lg font-bold mb-4">Security Notes</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Last password change</p>
                                <p class="text-xs text-on-surface-variant">12 days ago</p>
                            </div>
                            <span class="text-xs font-bold text-primary">Recent</span>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Active sessions</p>
                                <p class="text-xs text-on-surface-variant">1 device connected</p>
                            </div>
                            <span class="text-xs font-bold text-primary">Current</span>
                        </div>
                        <div class="flex items-center justify-between gap-3 rounded-xl bg-surface-low px-4 py-3">
                            <div>
                                <p class="font-semibold text-sm">Recovery codes</p>
                                <p class="text-xs text-on-surface-variant">Not generated</p>
                            </div>
                            <span class="text-xs font-bold text-on-surface-variant">Pending</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
