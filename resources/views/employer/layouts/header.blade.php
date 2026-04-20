<header class="sticky top-0 left-0 right-0 lg:left-64 lg:right-0 z-50 border-b border-primary/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-6 md:px-20 py-4">
  <div class="mx-auto flex max-w-7xl items-center justify-between">
    <a class="flex items-center" href="{{ route('employer.dashboard') }}">
      <img src="{{ asset('website/assets/images/logo-white.png') }}" alt="Apex Hire logo" class="h-12 w-auto"/>
    </a>
    <div class="hidden lg:flex flex-1 justify-end gap-8 items-center">
      <nav class="flex items-center gap-9">
        <a class="{{ request()->routeIs('employer.dashboard') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('employer.dashboard') }}">Dashboard</a>
        <a class="{{ request()->routeIs('employer.account') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('employer.account') }}">Company Profile</a>
        <a class="{{ request()->routeIs('employer.job-list') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('employer.job-list') }}">Jobs</a>
        <a class="{{ request()->routeIs('employer.schedule-interview') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('employer.schedule-interview') }}">Schedule Interview</a>
        <a class="{{ request()->routeIs('employer.team') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('employer.team') }}">Team</a>
      </nav>
      <div class="flex items-center gap-2">
        <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-primary hover:bg-primary/90 transition-colors text-white text-sm font-bold leading-normal tracking-wide shadow-lg shadow-primary/30" href="{{ route('employer.job-create') }}">
          <span class="truncate">Post a Job</span>
        </a>
      </div>
    </div>
    <a class="lg:hidden text-slate-900 dark:text-white" href="{{ route('employer.dashboard') }}" role="button" aria-label="Open menu">
      <i class="bx bx-menu"></i>
    </a>
  </div>
</header>
