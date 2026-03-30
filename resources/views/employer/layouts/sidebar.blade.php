@php
    $dashboardActive = request()->routeIs('employer.dashboard');
    $jobsActive = request()->routeIs('employer.job-*');
    $teamActive = request()->routeIs('employer.team', 'employer.schedule-interview');
    $accountActive = request()->routeIs('employer.account');
@endphp

<aside
      class="portal-sidebar h-screen w-64 fixed left-0 top-0 bg-white border-r border-slate-100 flex flex-col py-6 z-50"
    >
      <div class="px-6 mb-10">
        <div class="flex items-center justify-between gap-3">
          <div class="flex flex-col items-center portal-brand-copy">
            <img
              alt="Apex Hire logo"
              class="h-12 w-auto object-contain"
              src="{{ asset('employer/assets/images/logo-white.png') }}"
            />
            <p class="mt-1 text-[9px] font-extrabold uppercase tracking-[0.18em] text-slate-400 text-center">
              Recruiter Portal
            </p>
          </div>
          <button class="lg:hidden h-10 w-10 rounded-full border border-slate-200 text-slate-500 flex items-center justify-center" data-sidebar-close type="button">
            <i class="bx bx-x text-xl"></i>
          </button>
        </div>
      </div>

      <nav class="flex-1 space-y-1">
        <a
          class="portal-nav-link {{ $dashboardActive ? 'bg-[#b62dd6] text-white shadow-lg shadow-purple-200' : 'text-slate-600 hover:text-[#b62dd6] hover:bg-purple-50' }} rounded-full mx-2 my-1 flex items-center px-4 py-3 gap-3 transition-all duration-200"
          href="{{ route('employer.dashboard') }}"
        >
          <i class="bx bx-grid-alt text-lg"></i>
          <span class="font-bold tracking-tight">Dashboard</span>
        </a>
        <a
          class="portal-nav-link {{ $jobsActive ? 'bg-[#b62dd6] text-white shadow-lg shadow-purple-200' : 'text-slate-600 hover:text-[#b62dd6] hover:bg-purple-50' }} rounded-full mx-2 my-1 flex items-center px-4 py-3 gap-3 transition-all duration-200"
          href="{{ route('employer.job-list') }}"
        >
          <i class="bx bx-briefcase text-lg"></i>
          <span class="font-bold tracking-tight">Jobs</span>
        </a>
        <a
          class="portal-nav-link {{ $teamActive ? 'bg-[#b62dd6] text-white shadow-lg shadow-purple-200' : 'text-slate-600 hover:text-[#b62dd6] hover:bg-purple-50' }} rounded-full mx-2 my-1 flex items-center px-4 py-3 gap-3 transition-all duration-200"
          href="{{ route('employer.team') }}"
        >
          <i class="bx bx-group text-lg"></i>
          <span class="font-bold tracking-tight">Team</span>
        </a>
        <a
          class="portal-nav-link {{ $accountActive ? 'bg-[#b62dd6] text-white shadow-lg shadow-purple-200' : 'text-slate-600 hover:text-[#b62dd6] hover:bg-purple-50' }} rounded-full mx-2 my-1 flex items-center px-4 py-3 gap-3 transition-all duration-200"
          href="{{ route('employer.account') }}"
        >
          <i class="bx bx-user text-lg"></i>
          <span class="font-bold tracking-tight">Account</span>
        </a>
      </nav>

      <div class="px-4 mt-auto">
        <a
          class="portal-postjob w-full bg-[#b62dd6] text-white font-bold py-4 rounded-full shadow-lg shadow-purple-200 flex items-center justify-center gap-2"
          href="{{ route('employer.job-create') }}"
        >
          <i class="bx bx-plus text-lg"></i>
          <span class="portal-postjob-label">Post a Job</span>
        </a>
      </div>
    </aside>
