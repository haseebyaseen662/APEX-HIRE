@extends('seeker.layouts.app')

@section('page_title', 'Applications')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Applications</h2>
                <p class="text-on-surface-variant text-sm mt-1">Track where you’ve applied and what stage each company is in.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Export List
                </button>
                <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                    Apply Again
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
            <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                <div>
                    <p class="text-xs text-on-surface-variant font-medium">Total Applications</p>
                    <p class="text-2xl font-extrabold">{{ count($applications) }}</p>
                </div>
                <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">send</span>
                </div>
            </div>

            <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                <div>
                    <p class="text-xs text-on-surface-variant font-medium">Interviews</p>
                    <p class="text-2xl font-extrabold">1</p>
                </div>
                <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">event_available</span>
                </div>
            </div>

            <div class="bg-surface-white rounded-xl px-6 py-4 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                <div>
                    <p class="text-xs text-on-surface-variant font-medium">Offers</p>
                    <p class="text-2xl font-extrabold text-green-600">0</p>
                </div>
                <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-green-600">workspace_premium</span>
                </div>
            </div>
        </div>

        <div class="bg-surface-white rounded-xl shadow-[0_4px_20px_rgba(25,28,29,0.05)] overflow-hidden section-card fade-up">
            <div class="px-6 py-5 border-b border-outline-variant/15 flex items-center justify-between gap-4">
                <div>
                    <h3 class="text-lg font-bold">Recent Submissions</h3>
                    <p class="text-sm text-on-surface-variant">Sample data for the portal UI.</p>
                </div>
                <button class="text-xs font-bold uppercase tracking-widest text-primary hover:text-primary/80" type="button">
                    View all
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-outline-variant/15">
                    <thead class="bg-surface-low/80">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Company</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Role</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Submitted</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Status</th>
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-widest text-on-surface-variant">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        @foreach ($applications as $application)
                            @php
                                $status = strtolower($application['status']);
                                $statusClasses = [
                                    'applied' => 'bg-surface-low text-on-surface-variant',
                                    'shortlisted' => 'bg-amber-50 text-amber-700',
                                    'interview' => 'bg-primary-light text-primary',
                                    'rejected' => 'bg-red-50 text-red-600',
                                    'offer' => 'bg-green-50 text-green-700',
                                ];
                            @endphp
                            <tr class="hover:bg-surface-low/40 transition-colors">
                                <td class="px-6 py-5">
                                    <p class="font-semibold">{{ $application['company'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm text-on-surface-variant">{{ $application['job_title'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm text-on-surface-variant">{{ $application['date'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold {{ $statusClasses[$status] ?? 'bg-surface-low text-on-surface-variant' }}">
                                        {{ $application['status'] }}
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button class="text-xs font-bold uppercase tracking-widest text-primary hover:text-primary/80" type="button">
                                        Open
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
