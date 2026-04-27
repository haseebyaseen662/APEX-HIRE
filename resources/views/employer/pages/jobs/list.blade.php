@extends('employer.layouts.app')

@section('page_title', 'Jobs')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Job Listings</h2>
                <p class="text-on-surface-variant text-sm mt-1">Manage and monitor your active recruitment campaigns.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    View Analytics
                </button>
                <a href="{{ route('employer.job-create') }}" class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                    Post a Job
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
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

        <div class="bg-surface-white rounded-xl shadow-[0_4px_20px_rgba(25,28,29,0.05)] overflow-hidden section-card fade-up">
            <div class="px-6 py-5 border-b border-outline-variant/15 flex items-center justify-between gap-4">
                <div>
                    <h3 class="text-lg font-bold">Open Roles</h3>
                    <p class="text-sm text-on-surface-variant">A cleaner overview of the jobs you are currently running.</p>
                </div>
                <button class="text-xs font-bold uppercase tracking-widest text-primary hover:text-primary/80" type="button">
                    Sort by newest
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-outline-variant/15">
                    <thead class="bg-surface-low/80">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Role</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Location</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Posted</th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-widest text-on-surface-variant">Status</th>
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-widest text-on-surface-variant">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        @php
                            $jobs = [
                                ['title' => 'Senior Product Designer', 'location' => 'San Francisco, CA', 'posted' => '2 days ago', 'status' => 'Active'],
                                ['title' => 'Staff Frontend Engineer', 'location' => 'Remote', 'posted' => '5 days ago', 'status' => 'Active'],
                                ['title' => 'Growth Marketing Manager', 'location' => 'New York, NY', 'posted' => '1 week ago', 'status' => 'Inactive'],
                                ['title' => 'Technical Recruiter', 'location' => 'Karachi, PK', 'posted' => 'Today', 'status' => 'Draft'],
                            ];
                        @endphp
                        @foreach ($jobs as $job)
                            <tr class="hover:bg-surface-low/40 transition-colors">
                                <td class="px-6 py-5">
                                    <p class="font-semibold">{{ $job['title'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm text-on-surface-variant">{{ $job['location'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    <p class="text-sm text-on-surface-variant">{{ $job['posted'] }}</p>
                                </td>
                                <td class="px-6 py-5">
                                    @php
                                        $statusClasses = [
                                            'Active' => 'bg-primary-light text-primary',
                                            'Inactive' => 'bg-surface-low text-on-surface-variant',
                                            'Draft' => 'bg-amber-50 text-amber-700',
                                        ];
                                    @endphp
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-bold {{ $statusClasses[$job['status']] ?? 'bg-surface-low text-on-surface-variant' }}">
                                        {{ $job['status'] }}
                                    </span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="inline-flex items-center gap-2">
                                        <button class="p-2 hover:bg-surface-low rounded-lg transition-colors" type="button">
                                            <span class="material-symbols-outlined text-on-surface-variant">visibility</span>
                                        </button>
                                        <button class="p-2 hover:bg-surface-low rounded-lg transition-colors" type="button">
                                            <span class="material-symbols-outlined text-on-surface-variant">edit</span>
                                        </button>
                                    </div>
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
