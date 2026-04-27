@extends('employer.layouts.app')

@section('page_title', 'Applicants')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
    <div class="px-5 sm:px-8 py-2 max-w-6xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Applicants</h2>
                <p class="text-on-surface-variant text-sm mt-1">Review candidates for the Senior Product Designer position.</p>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all" type="button">
                    Export Data
                </button>
                <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all" type="button">
                    Share Job
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] relative overflow-hidden section-card fade-up">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16 blur-2xl pointer-events-none"></div>
                <div class="relative flex items-center justify-between">
                    <div>
                        <p class="text-xs text-on-surface-variant font-medium">Total Applications</p>
                        <p class="text-2xl font-extrabold">142</p>
                        <p class="text-xs text-green-600 font-bold mt-1">+12% from last week</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">person_add</span>
                    </div>
                </div>
            </div>

            <div class="bg-surface-white rounded-xl p-6 sm:p-8 shadow-[0_4px_20px_rgba(25,28,29,0.05)] flex items-center justify-between section-card fade-up">
                <div>
                    <p class="text-xs text-on-surface-variant font-medium">Response Rate</p>
                    <p class="text-2xl font-extrabold">94%</p>
                    <p class="text-xs text-on-surface-variant/60 mt-1">Within 24 hours</p>
                </div>
                <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-green-600">check_circle</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 sm:gap-6 mb-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:flex w-full md:w-auto bg-white p-1 rounded-[24px] shadow-sm gap-1">
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] bg-primary-light text-[13px] font-bold text-primary text-center leading-tight" type="button">All</button>
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight" type="button">Pending</button>
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight" type="button">Shortlisted</button>
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight" type="button">Rejected</button>
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight" type="button">Interview</button>
                <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight col-span-2 sm:col-span-1 lg:col-span-1" type="button">Hired</button>
            </div>

            <div class="relative w-full md:w-80">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full bg-white border border-slate-200 rounded-full py-3 pl-12 pr-6 text-sm focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6] transition-all" placeholder="Search candidates..." type="text">
            </div>
        </div>

        <div class="space-y-3">
            @php
                $applicants = [
                    ['name' => 'Sarah Chen', 'status' => 'Shortlisted', 'location' => 'Austin, TX', 'meta' => 'Applied Oct 12, 2026'],
                    ['name' => 'Marcus Thorne', 'status' => 'Hired', 'location' => 'Seattle, WA', 'meta' => 'Applied Oct 08, 2026'],
                    ['name' => 'Elena Rodriguez', 'status' => 'New', 'location' => 'Remote', 'meta' => 'Applied Oct 14, 2026'],
                ];
            @endphp

            @foreach ($applicants as $applicant)
                <div class="group bg-white p-4 rounded-[20px] shadow-[0_10px_24px_rgba(15,23,42,0.06)] flex flex-col lg:flex-row lg:items-center gap-4">
                    <div class="flex items-center gap-3 flex-1 min-w-0 w-full">
                        <div class="w-12 h-12 rounded-full object-cover shadow-sm flex-shrink-0 bg-primary-light flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">person</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                <h4 class="text-base font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">{{ $applicant['name'] }}</h4>
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest {{ $applicant['status'] === 'Hired' ? 'bg-emerald-50 text-emerald-600' : ($applicant['status'] === 'Shortlisted' ? 'bg-purple-50 text-[#7b5df7]' : 'bg-orange-50 text-orange-600') }} flex-shrink-0">{{ $applicant['status'] }}</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium mt-0.5">{{ $applicant['meta'] }}</p>
                        </div>
                    </div>

                    <div class="w-full lg:w-auto xl:w-56">
                        <p class="text-[10px] text-slate-400 uppercase font-extrabold tracking-widest mb-1">Location</p>
                        <div class="flex items-center gap-2">
                            <span class="inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                            <p class="text-sm font-semibold text-slate-900">{{ $applicant['location'] }}</p>
                        </div>
                    </div>

                    <div class="flex w-full lg:w-auto flex-col sm:flex-row items-stretch sm:items-center gap-2 lg:flex-shrink-0">
                        <a class="h-11 w-11 self-end sm:self-auto inline-flex items-center justify-center rounded-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-500 hover:text-[#b62dd6] shadow-sm transition-all" href="{{ route('employer.dashboard') }}" title="View Applicant">
                            <span class="material-symbols-outlined">visibility</span>
                        </a>
                        <a class="w-full sm:w-auto px-3.5 py-2 rounded-full bg-[#b62dd6] text-[11px] font-bold text-white shadow-lg shadow-purple-200 hover:translate-y-[-1px] transition-all inline-flex items-center justify-center" href="{{ route('employer.schedule-interview') }}">
                            Schedule Interview
                        </a>
                        <details class="relative w-full sm:w-auto">
                            <summary class="list-none cursor-pointer w-full text-center sm:text-left px-3.5 py-2 rounded-full border border-purple-200 bg-white text-[11px] font-bold text-[#b62dd6] hover:bg-purple-50 transition-all select-none">
                                Change Status
                            </summary>
                            <div class="absolute left-0 sm:left-auto sm:right-0 top-[calc(100%+0.5rem)] z-20 w-full sm:w-40 rounded-2xl border border-slate-200 bg-white p-2 shadow-[0_18px_40px_rgba(15,23,42,0.12)]">
                                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">Move to Pending</button>
                                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">Mark as Interviewing</button>
                                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">Mark as Hired</button>
                                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-red-500 hover:bg-red-50" type="button">Reject Applicant</button>
                            </div>
                        </details>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
