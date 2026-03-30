<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Apex Hire | Employer Dashboard</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="{{ asset('employer/assets/css/style.css') }}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body class="portal-shell bg-[#f5f6fb] text-[#1f2330]">
    <!-- SideNavBar -->
    @include('employer.layouts.sidebar')
    <div class="portal-overlay fixed inset-0 bg-slate-950/40 z-40 lg:hidden"></div>

    <!-- TopNavBar -->
    @include('employer.layouts.header')

        <!-- Main Content -->
        @yield('content')

    <!-- Footer -->
    @include('employer.layouts.footer')

    <nav
      class="mobile-bottom-nav fixed bottom-4 left-4 right-4 z-50 rounded-[28px] border border-slate-200 bg-white/95 px-2 py-2 shadow-[0_18px_40px_rgba(15,23,42,0.12)] lg:hidden"
    >
      <div class="grid grid-cols-5 gap-1 text-[11px] font-bold">
        <a class="flex flex-col items-center gap-1 rounded-2xl bg-[#b62dd6] px-2 py-3 text-white" href="{{ route('employer.dashboard') }}">
          <i class="bx bx-grid-alt text-lg"></i>
          <span>Home</span>
        </a>
        <a class="flex flex-col items-center gap-1 rounded-2xl px-2 py-3 text-slate-500" href="#">
          <i class="bx bx-briefcase text-lg"></i>
          <span>Jobs</span>
        </a>
        <a class="flex flex-col items-center gap-1 rounded-2xl px-2 py-3 text-slate-500" href="#">
          <i class="bx bx-group text-lg"></i>
          <span>Team</span>
        </a>
        <a class="flex flex-col items-center gap-1 rounded-2xl px-2 py-3 text-slate-500" href="#">
          <i class="bx bx-user text-lg"></i>
          <span>Account</span>
        </a>
        <a class="flex flex-col items-center gap-1 rounded-2xl px-2 py-3 text-slate-500" href="#">
          <i class="bx bx-plus-circle text-lg"></i>
          <span>Create</span>
        </a>
      </div>
    </nav>

    <script src="{{ asset('employer/assets/js/main.js') }}"></script>
  </body>
</html>
