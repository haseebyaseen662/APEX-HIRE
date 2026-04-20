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
          @php
            $user = auth()->user();
            $avatarUrl = asset('website/assets/images/default.png');

            // Prefer job seeker profile picture when available.
            $profile = $user?->jobSeekerProfile;
            $profilePicture = $profile?->profile_picture ?? $user?->profile_picture;

            if (!empty($profilePicture)) {
              if (\Illuminate\Support\Str::startsWith($profilePicture, ['http://', 'https://'])) {
                $avatarUrl = $profilePicture;
              } elseif (\Illuminate\Support\Str::startsWith($profilePicture, ['/','storage/','website/','seeker/','uploads/'])) {
                $avatarUrl = asset(ltrim($profilePicture, '/'));
              } else {
                // Assume it's stored on the public disk (e.g. via store(..., 'public')).
                $avatarUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($profilePicture);
              }
            }
          @endphp

          <details id="profile-menu" class="relative">
            <summary class="flex h-9 w-9 cursor-pointer list-none items-center justify-center overflow-hidden rounded-full border border-primary/10 bg-white shadow-sm transition-transform hover:scale-[1.03] focus:outline-none focus-visible:ring-2 focus-visible:ring-primary/40 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
              <img
                src="{{ $avatarUrl }}"
                alt="User avatar"
                class="h-full w-full object-cover"
                onerror="this.onerror=null;this.src='{{ asset('website/assets/images/default.png') }}';"
              />
            </summary>

            <div class="absolute right-0 mt-2 w-72 overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-xl shadow-slate-900/10 ring-1 ring-black/5">
              <div class="px-4 py-4">
                <p class="text-sm font-semibold text-slate-900 leading-5">{{ $user->name }}</p>
                <p class="mt-1 text-xs text-slate-500 truncate">{{ $user->email }}</p>
              </div>

              <div class="border-t border-slate-100"></div>

              <div class="space-y-1 px-3 py-2">
                <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-semibold text-slate-700 transition-colors hover:bg-slate-50 hover:text-primary" href="{{ route('home') }}">
                  <i class="bx bx-grid-alt text-lg text-slate-400"></i>
                  <span>Dashboard</span>
                </a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-semibold text-slate-700 transition-colors hover:bg-slate-50 hover:text-primary" href="#">
                  <i class="bx bx-cog text-lg text-slate-400"></i>
                  <span>Settings</span>
                </a>
                <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-semibold text-slate-700 transition-colors hover:bg-slate-50 hover:text-primary" href="{{ route('contact') }}">
                  <i class="bx bx-help-circle text-lg text-slate-400"></i>
                  <span>Help</span>
                </a>
              </div>

              <div class="border-t border-slate-100"></div>

              <form class="px-3 py-3" method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="w-full flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-semibold text-slate-700 transition-colors hover:bg-slate-50 hover:text-red-600 text-left">
                  <i class="bx bx-log-out text-lg text-slate-400 hover:text-red-600"></i>
                  <span>Logout</span>
                </a>
              </form>
            </div>
          </details>
          <script>
            document.addEventListener('click', function(event) {
              const details = document.getElementById('profile-menu');
              if (!details) return;
              if (!details.contains(event.target)) {
                details.removeAttribute('open');
              }
            });
          </script>
        @else
          <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-primary hover:bg-primary/90 transition-colors text-white text-sm font-bold leading-normal tracking-wide shadow-lg shadow-primary/30" href="{{ route('register') }}">
            <span class="truncate">Sign Up</span>
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
