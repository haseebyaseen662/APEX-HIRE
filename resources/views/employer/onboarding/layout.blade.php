<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('page_title', 'Onboarding — Apex Hire')</title>
    <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
    <script src="{{ asset('website/assets/js/main.js') }}" defer></script>

    <style>
        .field-error {
            border-color: #ba1a1a !important;
            outline: none !important;
            box-shadow: 0 0 0 3px rgba(186, 26, 26, 0.2) !important;
        }
        .text-red-500 {
            color: #ba1a1a !important;
        }
        [data-error] {
            display: block;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            color: #ba1a1a;
            font-weight: 500;
            line-height: 1.25;
        }
        [data-error].hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased">
    <main class="flex-1 flex flex-col items-center justify-start py-10 px-4 sm:px-6">
        <div class="w-full max-w-3xl flex flex-col gap-8">
            @yield('progress')

            @yield('header')

            <div class="rounded-xl bg-white dark:bg-slate-800 p-6 sm:p-8 shadow-sm border border-slate-100 dark:border-slate-700">
                @yield('content')
            </div>
        </div>
    </main>

    @stack('scripts')
</body>
</html>

