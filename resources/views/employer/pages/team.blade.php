@extends('employer.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Team Management</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Manage team members, roles, and access permissions</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all">
                        Manage Roles
                    </button>
                    <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                        Invite Member
                    </button>
                </div>
            </div>

            {{-- ── Team Stats ── --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mb-6">
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">group</span>
                        </div>
                        <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Active</span>
                    </div>
                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Total Members</p>
                    <p class="text-2xl font-extrabold">7</p>
                </div>
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-blue-600">admin_panel_settings</span>
                        </div>
                        <span class="px-2 py-1 bg-surface-low text-on-surface-variant text-xs font-bold rounded-full">RBAC</span>
                    </div>
                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Roles</p>
                    <p class="text-2xl font-extrabold">4</p>
                </div>
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-green-600">security</span>
                        </div>
                        <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Enabled</span>
                    </div>
                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">2FA</p>
                    <p class="text-2xl font-extrabold">100%</p>
                </div>
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined text-orange-600">pending</span>
                        </div>
                        <span class="px-2 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">Pending</span>
                    </div>
                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider">Invites</p>
                    <p class="text-2xl font-extrabold">2</p>
                </div>
            </div>

            {{-- ── Team Members ── --}}
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card fade-up">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">groups</span>
                    Team Members
                </h3>
                <div class="space-y-4">
                    {{-- Team Member 1 --}}
                    <div class="flex items-center justify-between p-4 bg-surface-high rounded-lg">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">person</span>
                            </div>
                            <div>
                                <p class="font-bold">Sarah Johnson</p>
                                <p class="text-sm text-on-surface-variant/60">Hiring Manager • sarah@company.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Active</span>
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant/60">more_vert</span>
                            </button>
                        </div>
                    </div>
                    {{-- Team Member 2 --}}
                    <div class="flex items-center justify-between p-4 bg-surface-high rounded-lg">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-blue-600">person</span>
                            </div>
                            <div>
                                <p class="font-bold">Mike Chen</p>
                                <p class="text-sm text-on-surface-variant/60">Technical Recruiter • mike@company.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Active</span>
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant/60">more_vert</span>
                            </button>
                        </div>
                    </div>
                    {{-- Team Member 3 --}}
                    <div class="flex items-center justify-between p-4 bg-surface-high rounded-lg">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-orange-600">person</span>
                            </div>
                            <div>
                                <p class="font-bold">Alex Rivera</p>
                                <p class="text-sm text-on-surface-variant/60">HR Coordinator • alex@company.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">Pending</span>
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant/60">more_vert</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection
