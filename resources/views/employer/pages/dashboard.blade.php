@extends('employer.layouts.app')

@section('content')
<main class="portal-main pt-20 lg:pt-24 px-4 sm:px-6 lg:px-10 pb-20">
      <!-- Welcome Header -->
      <section class="mb-10">
        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mb-2 text-slate-900">Dashboard Overview</h2>
        <p class="text-slate-500 font-medium">
          Welcome back, Alex. Here's what's happening with your recruitment funnel today.
        </p>
      </section>

      <!-- Stats Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-10">
        <!-- Stat 1 -->
        <div
          class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]"
        >
          <div class="flex justify-between items-start mb-3">
            <div
              class="w-10 h-10 rounded-2xl bg-purple-50 flex items-center justify-center text-[#b62dd6]"
            >
              <i class="bx bx-briefcase text-xl"></i>
            </div>
            <span
              class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-trending-up text-[14px]"></i>
              12%
            </span>
          </div>
          <p
            class="text-label-sm font-bold text-slate-400 tracking-widest uppercase text-[10px] mb-1"
          >
            Total Jobs Posted
          </p>
          <h3 class="text-2xl lg:text-3xl font-bold">24</h3>
        </div>

        <!-- Stat 2 -->
        <div
          class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]"
        >
          <div class="flex justify-between items-start mb-3">
            <div
              class="w-10 h-10 rounded-2xl bg-purple-50 flex items-center justify-center text-[#7b5df7]"
            >
              <i class="bx bx-group text-xl"></i>
            </div>
            <span
              class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-trending-up text-[14px]"></i>
              8%
            </span>
          </div>
          <p
            class="text-label-sm font-bold text-slate-400 tracking-widest uppercase text-[10px] mb-1"
          >
            Total Applicants
          </p>
          <h3 class="text-2xl lg:text-3xl font-bold">1,284</h3>
        </div>

        <!-- Stat 3 -->
        <div
          class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]"
        >
          <div class="flex justify-between items-start mb-3">
            <div
              class="w-10 h-10 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600"
            >
              <i class="bx bx-star text-xl"></i>
            </div>
            <span
              class="text-xs font-bold text-red-600 bg-red-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-trending-down text-[14px]"></i>
              3%
            </span>
          </div>
          <p
            class="text-label-sm font-bold text-slate-400 tracking-widest uppercase text-[10px] mb-1"
          >
            Shortlisted Count
          </p>
          <h3 class="text-2xl lg:text-3xl font-bold">156</h3>
        </div>

        <!-- Stat 4 -->
        <div
          class="bg-white p-5 rounded-[24px] shadow-[0_12px_30px_rgba(15,23,42,0.08)]"
        >
          <div class="flex justify-between items-start mb-3">
            <div
              class="w-10 h-10 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600"
            >
              <i class="bx bx-badge-check text-xl"></i>
            </div>
            <span
              class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full flex items-center gap-1"
            >
              <i class="bx bx-trending-up text-[14px]"></i>
              22%
            </span>
          </div>
          <p
            class="text-label-sm font-bold text-slate-400 tracking-widest uppercase text-[10px] mb-1"
          >
            Hired Count
          </p>
          <h3 class="text-2xl lg:text-3xl font-bold">42</h3>
        </div>
      </div>

      <!-- Asymmetric Bento Grid Section -->
      <div class="grid grid-cols-12 gap-8">
        <!-- Main Chart Card -->
        <div class="col-span-12 lg:col-span-8 bg-white p-6 lg:p-7 rounded-[32px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] relative overflow-hidden">
          <div class="flex justify-between items-start mb-6 gap-4">
            <div>
              <h4 class="text-lg font-bold tracking-tight text-slate-900 leading-snug">
                Application Activity Over Time
              </h4>
              <p class="text-xs text-slate-400 font-medium mt-1 leading-relaxed">
                Monthly volume of incoming candidate applications
              </p>
            </div>
            <div class="flex gap-2">
              <button
                class="px-3 py-1.5 rounded-full text-[11px] font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-colors"
              >
                Weekly
              </button>
              <button
                class="px-3 py-1.5 rounded-full text-[11px] font-bold bg-[#b62dd6] text-white shadow-lg shadow-purple-200"
              >
                Monthly
              </button>
            </div>
          </div>

          <!-- Abstract Chart Visualization -->
          <div class="h-64 flex items-end justify-between gap-4 px-2">
            <div class="w-full bg-slate-100 rounded-t-lg h-[40%] hover:bg-primary/20 transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                120
              </div>
            </div>
            <div class="w-full bg-slate-100 rounded-t-lg h-[65%] hover:bg-primary/20 transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                185
              </div>
            </div>
            <div class="w-full bg-slate-100 rounded-t-lg h-[45%] hover:bg-primary/20 transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                140
              </div>
            </div>
            <div class="w-full bg-slate-100 rounded-t-lg h-[85%] hover:bg-primary/20 transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                250
              </div>
            </div>
            <div class="w-full bg-slate-100 rounded-t-lg h-[60%] hover:bg-primary/20 transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                170
              </div>
            </div>
            <div class="w-full bg-primary/40 rounded-t-lg h-[95%] hover:bg-primary transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                312
              </div>
            </div>
            <div class="w-full bg-primary/20 rounded-t-lg h-[75%] hover:bg-primary transition-all group relative">
              <div
                class="absolute -top-10 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity"
              >
                220
              </div>
            </div>
          </div>
          <div class="flex justify-between mt-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
            <span>Jan</span>
            <span>Feb</span>
            <span>Mar</span>
            <span>Apr</span>
            <span>May</span>
            <span>Jun</span>
            <span>Jul</span>
          </div>
        </div>

        <!-- Recent Activity / Side Card -->
        <div class="col-span-12 lg:col-span-4 space-y-6">
          <div class="bg-white p-6 rounded-[28px] shadow-[0_18px_40px_rgba(15,23,42,0.08)] h-full">
            <h4 class="text-lg font-bold mb-6 text-slate-900">Recent Status Updates</h4>
            <div class="space-y-6">
              <!-- Activity Item -->
              <div class="flex gap-4">
                <img
                  alt="Profile"
                  class="w-10 h-10 rounded-full object-cover"
                  data-alt="Candidate profile picture"
                  src="assets/images/avatar-marcus.svg"
                />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <h5 class="text-sm font-bold">Marcus Thorne</h5>
                    <span
                      class="text-[10px] font-bold bg-emerald-50 text-emerald-600 px-2 py-0.5 rounded-full uppercase tracking-tighter"
                    >
                      Hired
                    </span>
                  </div>
                  <p class="text-[11px] text-slate-400 font-medium">Sr. UI Designer</p>
                  <p class="text-[10px] text-slate-300 mt-1 italic">2 hours ago</p>
                </div>
              </div>

              <!-- Activity Item -->
              <div class="flex gap-4">
                <img
                  alt="Profile"
                  class="w-10 h-10 rounded-full object-cover"
                  data-alt="Candidate profile picture"
                  src="assets/images/avatar-elena.svg"
                />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <h5 class="text-sm font-bold">Elena Vance</h5>
                    <span
                      class="text-[10px] font-bold bg-blue-50 text-blue-600 px-2 py-0.5 rounded-full uppercase tracking-tighter"
                    >
                      Shortlisted
                    </span>
                  </div>
                  <p class="text-[11px] text-slate-400 font-medium">Backend Engineer</p>
                  <p class="text-[10px] text-slate-300 mt-1 italic">5 hours ago</p>
                </div>
              </div>

              <!-- Activity Item -->
              <div class="flex gap-4">
                <img
                  alt="Profile"
                  class="w-10 h-10 rounded-full object-cover"
                  data-alt="Candidate profile picture"
                  src="assets/images/avatar-jason.svg"
                />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <h5 class="text-sm font-bold">Jason Wu</h5>
                    <span
                      class="text-[10px] font-bold bg-red-50 text-red-600 px-2 py-0.5 rounded-full uppercase tracking-tighter"
                    >
                      Rejected
                    </span>
                  </div>
                  <p class="text-[11px] text-slate-400 font-medium">Product Manager</p>
                  <p class="text-[10px] text-slate-300 mt-1 italic">Yesterday</p>
                </div>
              </div>

              <!-- Activity Item -->
              <div class="flex gap-4">
                <img
                  alt="Profile"
                  class="w-10 h-10 rounded-full object-cover"
                  data-alt="Candidate profile picture"
                  src="assets/images/avatar-sarah.svg"
                />
                <div class="flex-1">
                  <div class="flex justify-between items-start">
                    <h5 class="text-sm font-bold">Sarah Chen</h5>
                    <span
                      class="text-[10px] font-bold bg-blue-50 text-blue-600 px-2 py-0.5 rounded-full uppercase tracking-tighter"
                    >
                      Shortlisted
                    </span>
                  </div>
                  <p class="text-[11px] text-slate-400 font-medium">UX Lead</p>
                  <p class="text-[10px] text-slate-300 mt-1 italic">Oct 24, 2024</p>
                </div>
              </div>
            </div>

            <button
              class="w-full mt-8 py-3 rounded-xl border border-dashed border-slate-200 text-xs font-bold text-slate-400 hover:border-primary/40 hover:text-primary transition-all"
            >
              View Full History
            </button>
          </div>
        </div>
      </div>

	      <!-- Pipeline + Quick Actions -->
	      <section class="mt-12">
	        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end mb-6 gap-2">
	          <div>
	            <h4 class="text-xl font-bold tracking-tight text-slate-900">Hiring Pipeline</h4>
	            <p class="text-sm text-slate-500 font-medium">A quick snapshot across your active roles.</p>
	          </div>
	          <a class="text-xs font-bold text-[#b62dd6] hover:underline" href="job-postings.html">
	            Manage jobs
	          </a>
	        </div>

	        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
	          <div class="lg:col-span-8 bg-white rounded-[28px] p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
	            <div class="flex items-start justify-between gap-4">
	              <div>
	                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Recruiting Health</p>
	                <h5 class="text-lg font-bold tracking-tight text-slate-900 mt-1">This Week at a Glance</h5>
	              </div>
	              <div class="hidden sm:flex items-center gap-2">
	                <span class="text-[10px] font-bold bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full uppercase tracking-widest">
	                  On Track
	                </span>
	              </div>
	            </div>

	            <div class="mt-5 grid grid-cols-2 lg:grid-cols-4 gap-4">
	              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100 min-h-[124px] flex flex-col justify-between">
	                <div class="flex items-start justify-between gap-3 min-h-[34px]">
	                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 leading-[1.35] max-w-[90px]">Avg Time to Hire</p>
	                  <i class="bx bx-time-five text-slate-400 text-base leading-none shrink-0 mt-0.5"></i>
	                </div>
	                <p class="text-2xl font-extrabold text-slate-900 leading-none pt-3">18<span class="text-sm font-bold text-slate-400 align-baseline">d</span></p>
	                <p class="text-[11px] font-semibold text-slate-500 leading-snug pt-2">-2d vs last month</p>
	              </div>
	              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100 min-h-[124px] flex flex-col justify-between">
	                <div class="flex items-start justify-between gap-3 min-h-[34px]">
	                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 leading-[1.35] max-w-[90px]">Response Rate</p>
	                  <i class="bx bx-chat text-slate-400 text-base leading-none shrink-0 mt-0.5"></i>
	                </div>
	                <p class="text-2xl font-extrabold text-slate-900 leading-none pt-3">94<span class="text-sm font-bold text-slate-400 align-baseline">%</span></p>
	                <p class="text-[11px] font-semibold text-slate-500 leading-snug pt-2">Top quartile</p>
	              </div>
	              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100 min-h-[124px] flex flex-col justify-between">
	                <div class="flex items-start justify-between gap-3 min-h-[34px]">
	                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 leading-[1.35] max-w-[90px]">Active Roles</p>
	                  <i class="bx bx-briefcase text-slate-400 text-base leading-none shrink-0 mt-0.5"></i>
	                </div>
	                <p class="text-2xl font-extrabold text-slate-900 leading-none pt-3">24</p>
	                <p class="text-[11px] font-semibold text-slate-500 leading-snug pt-2">3 priority hires</p>
	              </div>
	              <div class="bg-[#f7f8fd] rounded-2xl p-4 border border-slate-100 min-h-[124px] flex flex-col justify-between">
	                <div class="flex items-start justify-between gap-3 min-h-[34px]">
	                  <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 leading-[1.35] max-w-[90px]">Offer Acceptance</p>
	                  <i class="bx bx-check-shield text-slate-400 text-base leading-none shrink-0 mt-0.5"></i>
	                </div>
	                <p class="text-2xl font-extrabold text-slate-900 leading-none pt-3">72<span class="text-sm font-bold text-slate-400 align-baseline">%</span></p>
	                <p class="text-[11px] font-semibold text-slate-500 leading-snug pt-2">Goal: 75%</p>
	              </div>
	            </div>

	            <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
	              <div class="flex items-center gap-2 text-slate-500 text-sm font-semibold">
	                <i class="bx bx-line-chart text-[#b62dd6]"></i>
	                <span>Momentum is improving across 3 roles</span>
	              </div>
	              <div class="flex flex-wrap gap-2">
	                <a class="px-4 py-2 rounded-full bg-[#b62dd6] text-white text-xs font-bold shadow-lg shadow-purple-200" href="create-job.html">
	                  Post a Job
	                </a>
	                <a class="px-4 py-2 rounded-full border border-slate-200 bg-white text-slate-700 text-xs font-bold hover:bg-slate-50" href="job-postings.html">
	                  View Roles
	                </a>
	                <button class="px-4 py-2 rounded-full border border-slate-200 bg-white text-slate-700 text-xs font-bold hover:bg-slate-50" type="button">
	                  Export Report
	                </button>
	              </div>
	            </div>
	          </div>

	          <div class="lg:col-span-4 bg-white rounded-[28px] p-6 shadow-[0_12px_30px_rgba(15,23,42,0.08)]">
	            <div class="flex items-center justify-between mb-4">
	              <h5 class="font-bold text-slate-900">Upcoming Interviews</h5>
	              <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Next 7 days</span>
	            </div>
	            <div class="space-y-3">
	              <div class="flex items-start gap-3 p-3 rounded-2xl bg-[#f7f8fd] border border-slate-100">
	                <div class="w-10 h-10 rounded-2xl bg-purple-50 text-[#b62dd6] flex items-center justify-center">
	                  <i class="bx bx-calendar"></i>
	                </div>
	                <div class="flex-1">
	                  <p class="text-sm font-bold text-slate-900">Senior Product Designer</p>
	                  <p class="text-xs text-slate-500 font-medium">Thu, 2:30 PM, Panel</p>
	                </div>
	              </div>
	              <div class="flex items-start gap-3 p-3 rounded-2xl bg-[#f7f8fd] border border-slate-100">
	                <div class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center">
	                  <i class="bx bx-video"></i>
	                </div>
	                <div class="flex-1">
	                  <p class="text-sm font-bold text-slate-900">Staff Frontend Engineer</p>
	                  <p class="text-xs text-slate-500 font-medium">Fri, 11:00 AM, Video</p>
	                </div>
	              </div>
	              <div class="flex items-start gap-3 p-3 rounded-2xl bg-[#f7f8fd] border border-slate-100">
	                <div class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
	                  <i class="bx bx-check-circle"></i>
	                </div>
	                <div class="flex-1">
	                  <p class="text-sm font-bold text-slate-900">QA Automation Engineer</p>
	                  <p class="text-xs text-slate-500 font-medium">Mon, 4:00 PM, Final</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </section>
      <div class="h-24 lg:hidden"></div>
    </main>
@endsection
