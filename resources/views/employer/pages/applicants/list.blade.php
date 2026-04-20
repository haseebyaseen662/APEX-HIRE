@extends('employer.layouts.app')

@section('content')
<main class="lg:ml-64 pt-16 pb-24 min-h-screen">
        <div class="px-5 sm:px-8 py-2 max-w-5xl mx-auto">

            {{-- ── Page Header ── --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">Applicants</h2>
                    <p class="text-on-surface-variant text-sm mt-1">Review candidates for Senior Product Designer position</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-outline-variant/40 rounded-full font-semibold text-xs hover:bg-surface-high transition-all">
                        Export Data
                    </button>
                    <button class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:opacity-90 transition-all">
                        Share Job
                    </button>
                </div>
            </div>

            {{-- ── Application Stats ── --}}
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

            {{-- ── Applicants List ── --}}
            <div class="space-y-4 fade-up">
                {{-- Applicant 1 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-primary-light flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">person</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-lg font-bold">Sarah Chen</h3>
                                    <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Shortlisted</span>
                                </div>
                                <p class="text-on-surface-variant text-sm mb-3">Senior Product Designer • Applied 2 days ago</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">location_on</span>
                                        San Francisco, CA
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">school</span>
                                        Stanford University
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">work</span>
                                        5+ years experience
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">visibility</span>
                            </button>
                            <button class="p-2 hover:bg-green-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-green-600">check_circle</span>
                            </button>
                            <button class="p-2 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-red-600">cancel</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Applicant 2 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-blue-600">person</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-lg font-bold">Marcus Johnson</h3>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">In Review</span>
                                </div>
                                <p class="text-on-surface-variant text-sm mb-3">Product Designer • Applied 4 days ago</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">location_on</span>
                                        New York, NY
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">school</span>
                                        NYU
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">work</span>
                                        3+ years experience
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">visibility</span>
                            </button>
                            <button class="p-2 hover:bg-green-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-green-600">check_circle</span>
                            </button>
                            <button class="p-2 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-red-600">cancel</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Applicant 3 --}}
                <div class="bg-surface-white rounded-xl p-6 shadow-[0_4px_20px_rgba(25,28,29,0.05)] section-card">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center">
                                <span class="material-symbols-outlined text-orange-600">person</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-lg font-bold">Elena Rodriguez</h3>
                                    <span class="px-2 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">New</span>
                                </div>
                                <p class="text-on-surface-variant text-sm mb-3">UX Designer • Applied 1 day ago</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">location_on</span>
                                        Austin, TX
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">school</span>
                                        UT Austin
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">work</span>
                                        4+ years experience
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="p-2 hover:bg-surface-low rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">visibility</span>
                            </button>
                            <button class="p-2 hover:bg-green-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-green-600">check_circle</span>
                            </button>
                            <button class="p-2 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-red-600">cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection
          <div class="mt-4 w-full bg-slate-100 rounded-full h-2 overflow-hidden">
            <div class="bg-[#b62dd6] h-full w-[94%] rounded-full"></div>
          </div>
        </div>
      </div>

      <!-- Filters & Search -->
      <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 sm:gap-6 mb-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:flex w-full md:w-auto bg-white p-1 rounded-[24px] shadow-sm gap-1">
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] bg-[#f5f6fb] text-[13px] font-bold text-slate-900 text-center leading-tight">
            All
          </button>
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight">
            Pending
          </button>
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight">
            Shortlisted
          </button>
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight">
            Rejected
          </button>
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight">
            Interview Scheduled
          </button>
          <button class="w-full px-3 sm:px-4 py-2 rounded-[20px] text-[13px] font-semibold text-slate-500 hover:text-slate-900 text-center leading-tight col-span-2 sm:col-span-1 lg:col-span-1">
            Hired
          </button>
        </div>
        <div class="relative w-full md:w-80">
          <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
          <input
            class="w-full bg-white border border-slate-200 rounded-full py-3 pl-12 pr-6 text-sm focus:ring-4 focus:ring-purple-100 focus:border-[#b62dd6] transition-all"
            placeholder="Search candidates..."
            type="text"
          />
        </div>
      </div>

      <!-- Applicants List -->
      <div class="space-y-3">
        <div
          class="group bg-white p-4 rounded-[20px] shadow-[0_10px_24px_rgba(15,23,42,0.06)] flex flex-col lg:flex-row lg:items-center gap-4"
        >
          <div class="flex items-center gap-3 flex-1 min-w-0 w-full">
            <img
              class="w-12 h-12 rounded-full object-cover shadow-sm flex-shrink-0"
              data-alt="Candidate profile picture of Sarah Chen"
              src="assets/images/avatar-sarah.svg"
            />
            <div class="min-w-0 flex-1">
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <h4 class="text-base font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">
                  Sarah Chen
                </h4>
                <span
                  class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest bg-purple-50 text-[#7b5df7] flex-shrink-0"
                >
                  Shortlisted
                </span>
              </div>
              <p class="text-xs text-slate-500 font-medium mt-0.5">Applied Oct 12, 2024</p>
            </div>
          </div>
          <div class="w-full lg:w-auto xl:w-56">
            <p class="text-[10px] text-slate-400 uppercase font-extrabold tracking-widest mb-1">Location</p>
            <div class="flex items-center gap-2">
              <span class="inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
              <p class="text-sm font-semibold text-slate-900">Austin, TX</p>
            </div>
          </div>
          <div class="flex w-full lg:w-auto flex-col sm:flex-row items-stretch sm:items-center gap-2 lg:flex-shrink-0">
            <a
              class="h-11 w-11 self-end sm:self-auto inline-flex items-center justify-center rounded-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-500 hover:text-[#b62dd6] shadow-sm transition-all"
              href="applicant-detail.html"
              title="View Applicant"
            >
              <span class="material-symbols-outlined">visibility</span>
            </a>
            <a
              class="w-full sm:w-auto px-3.5 py-2 rounded-full bg-[#b62dd6] text-[11px] font-bold text-white shadow-lg shadow-purple-200 hover:translate-y-[-1px] transition-all inline-flex items-center justify-center"
              href="interview-scheduler.html"
            >
              Schedule Interview
            </a>
            <details class="relative w-full sm:w-auto">
              <summary
                class="list-none cursor-pointer w-full text-center sm:text-left px-3.5 py-2 rounded-full border border-purple-200 bg-white text-[11px] font-bold text-[#b62dd6] hover:bg-purple-50 transition-all select-none"
              >
                Change Status
              </summary>
              <div class="absolute left-0 sm:left-auto sm:right-0 top-[calc(100%+0.5rem)] z-20 w-full sm:w-40 rounded-2xl border border-slate-200 bg-white p-2 shadow-[0_18px_40px_rgba(15,23,42,0.12)]">
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Move to Pending
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Mark as Interviewing
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Mark as Hired
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-red-500 hover:bg-red-50" type="button">
                  Reject Applicant
                </button>
              </div>
            </details>
          </div>
        </div>

        <div
          class="group bg-white p-4 rounded-[20px] shadow-[0_10px_24px_rgba(15,23,42,0.06)] flex flex-col lg:flex-row lg:items-center gap-4"
        >
          <div class="flex items-center gap-3 flex-1 min-w-0 w-full">
            <img
              class="w-12 h-12 rounded-full object-cover shadow-sm flex-shrink-0"
              data-alt="Candidate profile picture of Marcus Thorne"
              src="assets/images/avatar-marcus.svg"
            />
            <div class="min-w-0 flex-1">
              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <h4 class="text-base font-bold text-slate-900 group-hover:text-[#b62dd6] transition-colors truncate">
                  Marcus Thorne
                </h4>
                <span
                  class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest bg-emerald-50 text-emerald-600 flex-shrink-0"
                >
                  Hired
                </span>
              </div>
              <p class="text-xs text-slate-500 font-medium mt-0.5">Applied Oct 08, 2024</p>
            </div>
          </div>
          <div class="w-full lg:w-auto xl:w-56">
            <p class="text-[10px] text-slate-400 uppercase font-extrabold tracking-widest mb-1">Location</p>
            <div class="flex items-center gap-2">
              <span class="inline-flex h-2.5 w-2.5 rounded-full bg-amber-400"></span>
              <p class="text-sm font-semibold text-slate-900">Seattle, WA</p>
            </div>
          </div>
          <div class="flex w-full lg:w-auto flex-col sm:flex-row items-stretch sm:items-center gap-2 lg:flex-shrink-0">
            <a
              class="h-11 w-11 self-end sm:self-auto inline-flex items-center justify-center rounded-full border border-slate-200 bg-white hover:bg-slate-50 text-slate-500 hover:text-[#b62dd6] shadow-sm transition-all"
              href="applicant-detail.html"
              title="View Applicant"
            >
              <span class="material-symbols-outlined">visibility</span>
            </a>
            <a
              class="w-full sm:w-auto px-3.5 py-2 rounded-full bg-[#b62dd6] text-[11px] font-bold text-white shadow-lg shadow-purple-200 hover:translate-y-[-1px] transition-all inline-flex items-center justify-center"
              href="interview-scheduler.html"
            >
              Schedule Interview
            </a>
            <details class="relative w-full sm:w-auto">
              <summary
                class="list-none cursor-pointer w-full text-center sm:text-left px-3.5 py-2 rounded-full border border-purple-200 bg-white text-[11px] font-bold text-[#b62dd6] hover:bg-purple-50 transition-all select-none"
              >
                Change Status
              </summary>
              <div class="absolute left-0 sm:left-auto sm:right-0 top-[calc(100%+0.5rem)] z-20 w-full sm:w-40 rounded-2xl border border-slate-200 bg-white p-2 shadow-[0_18px_40px_rgba(15,23,42,0.12)]">
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Move to Pending
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Mark as Interviewing
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900" type="button">
                  Mark as Active
                </button>
                <button class="w-full rounded-xl px-3 py-2 text-left text-xs font-semibold text-red-500 hover:bg-red-50" type="button">
                  Reject Applicant
                </button>
              </div>
            </details>
          </div>
        </div>
      </div>
      <div class="h-24 lg:hidden"></div>
    </main>

@endsection
