<header class="sticky top-0 z-50 w-full border-b border-primary/10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-6 md:px-20 py-4">
  <div class="mx-auto flex max-w-7xl items-center justify-between">
    <a class="flex items-center" href="{{ route('home') }}">
  <img src="{{ asset('website/assets/images/logo-white.png') }}" alt="Apex Hire logo" class="h-12 w-auto"/>
</a>
    <div class="hidden lg:flex flex-1 justify-end gap-8 items-center">
      <nav class="flex items-center gap-9">
        <a class="{{ request()->routeIs('home') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('home') }}">Home</a>
        <a class="{{ request()->routeIs('browse') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('browse') }}">Find Jobs</a>
        <a class="{{ request()->routeIs('success') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('success') }}">Success Stories</a>
        <a class="{{ request()->routeIs('about') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('about') }}">About Us</a>
        <a class="{{ request()->routeIs('contact') ? 'text-primary text-sm font-bold border-b-2 border-primary' : 'text-slate-600 dark:text-slate-400 text-sm font-semibold hover:text-primary transition-colors' }}" href="{{ route('contact') }}">Contact Us</a>
      </nav>
      <div class="flex items-center gap-2">
        @auth
          <details class="relative">
            <summary class="flex h-11 w-11 cursor-pointer list-none items-center justify-center overflow-hidden rounded-full border border-primary/10 bg-white shadow-sm transition-transform hover:scale-[1.03] dark:border-white/10 dark:bg-slate-900">
              <img src="{{ asset('employer/assets/images/avatar-employer.svg') }}" alt="User avatar" class="h-full w-full object-cover"/>
            </summary>

            <div class="absolute right-0 mt-3 w-64 overflow-hidden rounded-2xl border border-slate-200/80 bg-white p-2 shadow-[0_18px_50px_rgba(15,23,42,0.12)] dark:border-slate-700 dark:bg-slate-900">
              <a class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold tracking-[0.02em] text-slate-700 transition-colors hover:bg-slate-50 hover:text-primary dark:text-slate-200 dark:hover:bg-slate-800" href="{{ route('home') }}">
                <i class="bx bx-user text-lg text-slate-400"></i>
                <span>Profile</span>
              </a>

              <a class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold tracking-[0.02em] text-slate-700 transition-colors hover:bg-slate-50 hover:text-primary dark:text-slate-200 dark:hover:bg-slate-800" href="{{ route('contact') }}">
                <i class="bx bx-help-circle text-lg text-slate-400"></i>
                <span>Help</span>
              </a>

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="group flex w-full items-center gap-3 rounded-xl px-4 py-3 text-left text-sm font-semibold tracking-[0.02em] text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-200 dark:hover:bg-slate-800" type="submit">
                  <i class="bx bx-log-out text-lg text-slate-400"></i>
                  <span class="transition-colors group-hover:text-red-500">Logout</span>
                </button>
              </form>
            </div>
          </details>
        @else
          <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-primary hover:bg-primary/90 transition-colors text-white text-sm font-bold leading-normal tracking-wide shadow-lg shadow-primary/30" href="{{ route('register') }}">
            <span class="truncate">Post a Job</span>
          </a>
          <a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-primary-light hover:bg-neutral-light dark:bg-neutral-dark dark:hover:bg-neutral-dark/80 transition-colors text-primary dark:text-white text-sm font-bold leading-normal tracking-[0.015em]" href="{{ route('login') }}">
            <span class="truncate">Log In</span>
          </a>
        @endauth
      </div>
    </div>
    <a class="lg:hidden text-slate-900 dark:text-white" href="{{ route('home') }}" role="button" aria-label="Open menu">
      <i class="bx bx-menu"></i>
    </a>
  </div>
</header>
