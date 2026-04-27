<header class="lg:ml-64 fixed top-0 right-0 left-0 lg:left-64 z-30 bg-white/80 backdrop-blur-md h-16 px-5 sm:px-8 flex items-center justify-between border-b border-outline-variant/15">
    <button
        class="lg:hidden p-2 rounded-lg hover:bg-surface-low transition-colors"
        onclick="openSidebar()"
        aria-label="Open menu"
    >
        <span class="material-symbols-outlined">menu</span>
    </button>

    <div class="hidden lg:block">
        <h1 class="text-base font-bold text-on-surface">@yield('page_title', 'Employer Portal')</h1>
    </div>

    <div class="flex items-center gap-3">
        <button class="relative p-2 rounded-full hover:bg-surface-low transition-colors">
            <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            <span class="absolute top-2 right-2 w-1.5 h-1.5 bg-primary rounded-full"></span>
        </button>
        <a class="gradient-primary text-white px-5 py-2 rounded-full font-bold text-xs shadow-md hover:scale-105 transition-transform" href="{{ route('employer.job-create') }}">
            Post a Job
        </a>
    </div>
</header>
