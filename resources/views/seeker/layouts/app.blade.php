<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>My Profile — Apex Hire</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary:                   "#9e00b6",
                        "primary-light":           "#f5e6f8",
                        "on-primary":              "#ffffff",
                        surface:                   "#f8f9fa",
                        "surface-low":             "#f3f4f5",
                        "surface-container":       "#edeeef",
                        "surface-high":            "#e7e8e9",
                        "surface-highest":         "#e1e3e4",
                        "surface-white":           "#ffffff",
                        "on-surface":              "#191c1d",
                        "on-surface-variant":      "#524152",
                        outline:                   "#847183",
                        "outline-variant":         "#d7c0d4",
                        secondary:                 "#8c3e97",
                        tertiary:                  "#705d00",
                    },
                    fontFamily: {
                        sans: ["Plus Jakarta Sans", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.75rem",
                        lg:      "1.25rem",
                        xl:      "2rem",
                        full:    "9999px",
                    },
                },
            },
        }
    </script>

    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            line-height: 1;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .gradient-primary { background: linear-gradient(135deg, #9e00b6 0%, #c123db 100%); }

        /* Sidebar */
        #sidebar {
            transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        #sidebar-overlay {
            transition: opacity 0.3s ease;
        }

        /* Nav active link */
        .nav-link.active {
            color: #9e00b6;
            background-color: #f5e6f8;
            font-weight: 700;
        }
        .nav-link.active .nav-icon {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Progress ring */
        .ring-track  { stroke: #e1e3e4; }
        .ring-fill   { stroke: #9e00b6; stroke-linecap: round; transition: stroke-dashoffset 1s ease; }

        /* Stat cards fade-in */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(14px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.5s ease forwards; }
        .fade-up:nth-child(1) { animation-delay: 0.05s; }
        .fade-up:nth-child(2) { animation-delay: 0.12s; }
        .fade-up:nth-child(3) { animation-delay: 0.19s; }
        .fade-up:nth-child(4) { animation-delay: 0.26s; }

        /* Section card hover */
        .section-card { transition: box-shadow 0.2s ease, transform 0.2s ease; }
        .section-card:hover { box-shadow: 0 8px 32px rgba(158,0,182,0.08); transform: translateY(-2px); }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-thumb { background: #d7c0d4; border-radius: 10px; }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen">

    @include('seeker.layouts.sidebar')

    @include('website.layouts.header')

    @yield('content')

    <nav class="lg:hidden fixed bottom-0 left-0 w-full bg-white/95 backdrop-blur-xl border-t border-outline-variant/15 z-30">
            <div class="flex justify-around items-center py-2.5 px-2">

                <a href="{{ route('seeker.dashboard') }}"
                class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl transition-colors
                {{ request()->routeIs('seeker.dashboard') ? 'text-primary' : 'text-on-surface-variant' }}">
                    <span class="material-symbols-outlined text-xl {{ request()->routeIs('seeker.dashboard') ? 'icon-fill' : '' }}">dashboard</span>
                    <span class="text-[9px] font-bold uppercase">Home</span>
                </a>

                <a href="#"
                class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-xl">person</span>
                    <span class="text-[9px] font-bold uppercase">Profile</span>
                </a>

                <a href="#"
                class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-xl">work</span>
                    <span class="text-[9px] font-bold uppercase">Jobs</span>
                </a>

                <a href="#"
                class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-xl">search</span>
                    <span class="text-[9px] font-bold uppercase">Search</span>
                </a>

                <a href="#"
                class="flex flex-col items-center gap-0.5 px-3 py-1.5 rounded-xl transition-colors text-on-surface-variant">
                    <span class="material-symbols-outlined text-xl">settings</span>
                    <span class="text-[9px] font-bold uppercase">Settings</span>
                </a>

            </div>
    </nav>

    {{-- ============================================================
         JS — Sidebar toggle
    ============================================================ --}}
    <script>
        const sidebar  = document.getElementById('sidebar');
        const overlay  = document.getElementById('sidebar-overlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            requestAnimationFrame(() => overlay.classList.remove('opacity-0'));
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('opacity-0');
            setTimeout(() => overlay.classList.add('hidden'), 300);
        }

        // Close on resize to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) closeSidebar();
        });
    </script>

</body>
</html>
