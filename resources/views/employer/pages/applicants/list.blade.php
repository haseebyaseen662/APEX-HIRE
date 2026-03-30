@extends('employer.layouts.app')

@section('content')

    <main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <!-- Page Header -->
      <section class="mb-8 sm:mb-10 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 sm:gap-6">
        <div>
          <nav class="flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">
            <span>Jobs</span>
            <i class="bx bx-chevron-right text-sm"></i>
            <span class="text-[#b62dd6]">Senior UI Designer</span>
          </nav>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight mb-2">
            Applicants Queue
          </h2>
          <p class="text-slate-500 font-medium">Reviewing 48 candidates for this position</p>
        </div>
        <div class="flex w-full sm:w-auto flex-col sm:flex-row sm:flex-wrap items-stretch sm:items-center gap-2 sm:gap-3">
          <button
            class="w-full sm:w-auto px-4 sm:px-5 py-2.5 rounded-full border border-slate-200 bg-white text-slate-700 font-bold text-sm hover:bg-slate-50 transition-all flex items-center justify-center gap-2"
            type="button"
          >
            <i class="bx bx-download text-lg text-slate-400"></i>
            <span>Export CSV</span>
          </button>
          <button
            class="w-full sm:w-auto px-4 sm:px-5 py-2.5 rounded-full bg-[#b62dd6] text-white font-bold text-sm shadow-lg shadow-purple-200 hover:opacity-95 transition-all flex items-center justify-center gap-2"
            type="button"
          >
            <i class="bx bx-share-alt text-lg"></i>
            <span>Share Job</span>
          </button>
        </div>
      </section>

      <!-- Stats Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-8 sm:mb-10">
        <div class="bg-white p-5 sm:p-7 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)] relative overflow-hidden">
          <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-purple-50 rounded-full"></div>
          <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Total Applied</p>
          <h3 class="text-3xl sm:text-4xl font-black text-slate-900">142</h3>
          <div class="mt-4 flex items-center gap-2 text-emerald-600 font-bold text-sm">
            <i class="bx bx-trending-up"></i>
            <span>12% from last week</span>
          </div>
        </div>
        <div class="bg-white p-5 sm:p-7 rounded-[28px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
          <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Response Rate</p>
          <h3 class="text-3xl sm:text-4xl font-black text-slate-900">94%</h3>
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
          <i class="bx bx-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
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
              <i class="bx bx-show"></i>
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
              <i class="bx bx-show"></i>
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
