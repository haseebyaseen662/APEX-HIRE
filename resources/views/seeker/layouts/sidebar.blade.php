<div
    id="sidebar-overlay"
    class="fixed inset-0 bg-black/30 z-40 hidden opacity-0"
    onclick="closeSidebar()"
></div>

<aside
    id="sidebar"
    class="fixed top-0 left-0 h-full w-64 bg-surface-white z-50 flex flex-col mt-16 py-7 px-4 shadow-[4px_0_24px_rgba(25,28,29,0.06)]
           -translate-x-full lg:translate-x-0">

    <nav class="flex flex-col gap-1 flex-1">
        <a href="{{ route('seeker.dashboard') }}"
           class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-low hover:text-on-surface transition-colors text-sm font-medium {{ request()->routeIs('seeker.dashboard') ? 'active' : '' }}">
            <span class="material-symbols-outlined nav-icon text-xl">dashboard</span>
            Dashboard
        </a>

        <a href="{{ route('seeker.profile') }}"
           class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-low hover:text-on-surface transition-colors text-sm font-medium {{ request()->routeIs('seeker.profile') ? 'active' : '' }}">
            <span class="material-symbols-outlined nav-icon text-xl">person</span>
            Profile
        </a>

        <a href="{{ route('seeker.applications') }}"
           class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-low hover:text-on-surface transition-colors text-sm font-medium {{ request()->routeIs('seeker.applications') ? 'active' : '' }}">
            <span class="material-symbols-outlined nav-icon text-xl">work</span>
            Applications
        </a>

        <a href="{{ route('seeker.account') }}"
           class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-low hover:text-on-surface transition-colors text-sm font-medium {{ request()->routeIs('seeker.account') ? 'active' : '' }}">
            <span class="material-symbols-outlined nav-icon text-xl">settings</span>
            Account
        </a>

        <a href="{{ route('help-support') }}"
           class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-low hover:text-on-surface transition-colors text-sm font-medium {{ request()->routeIs('help-support') ? 'active' : '' }}">
            <span class="material-symbols-outlined nav-icon text-xl">help</span>
            Help &amp; Support
        </a>
    </nav>

    <div class="mt-auto pt-6 border-t border-outline-variant/20">
        <div class="flex items-center gap-3 px-3 py-3 rounded-lg bg-surface-low">
            <div class="w-9 h-9 rounded-full gradient-primary flex items-center justify-center text-white font-bold text-sm shrink-0">
                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
            </div>
            <div class="overflow-hidden">
                <p class="text-sm font-bold truncate">{{ auth()->user()->name ?? 'Job Seeker' }}</p>
                <p class="text-xs text-on-surface-variant truncate">{{ auth()->user()->email ?? '' }}</p>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="mt-2">
            @csrf
            <button
                type="submit"
                class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-red-600 hover:bg-red-50 transition-colors text-sm font-medium"
            >
                <span class="material-symbols-outlined text-xl">logout</span>
                Logout
            </button>
        </form>
    </div>
</aside>
