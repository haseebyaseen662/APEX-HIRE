<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Verify Email - Apex Hire</title>
    <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
    <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
    <script src="{{ asset('website/assets/js/main.js') }}" defer></script>
</head>
<body class="min-h-screen overflow-x-hidden bg-background-light font-display text-slate-900 antialiased dark:bg-background-dark dark:text-slate-100">
    <main class="relative flex min-h-screen items-center justify-center px-6 py-12">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute left-1/2 top-0 h-72 w-72 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-sky-400/10 blur-3xl"></div>
            <div class="absolute right-0 top-1/3 h-72 w-72 rounded-full bg-primary/10 blur-3xl"></div>
        </div>

        <div class="relative mx-auto flex w-full max-w-2xl flex-col items-center text-center">
            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-primary/10 text-primary">
                <i class="bx bx-mail-send text-4xl"></i>
            </div>

            <p class="mt-8 text-[11px] font-bold uppercase tracking-[0.28em] text-primary">
                Email Verification
            </p>

            <h1 class="mt-4 text-3xl font-black tracking-tight text-slate-900 dark:text-white sm:text-4xl md:text-5xl">
                Check your email
            </h1>

            <p class="mt-4 max-w-xl text-sm leading-7 text-slate-500 dark:text-slate-400 sm:text-base">
                We sent a verification link to
                <span class="break-all font-bold text-slate-700 dark:text-slate-200">{{ auth()->user()->email }}</span>.
                Please open your inbox and click the link to verify your Apex Hire account.
            </p>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-8 text-sm font-semibold text-emerald-600 dark:text-emerald-400">
                    A fresh verification link has been sent to your email address.
                </p>
            @endif

            <div class="mt-12 flex w-full flex-col items-center justify-center gap-3 sm:flex-row">
                <form class="w-full sm:w-auto sm:flex-none" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="inline-flex h-11 w-full items-center justify-center rounded-full bg-primary px-5 text-sm font-bold text-white shadow-lg shadow-primary/20 transition-all hover:bg-primary/90 focus:outline-none focus:ring-4 focus:ring-primary/20 sm:w-auto" type="submit">
                        Resend Verification Email
                    </button>
                </form>

                <a class="inline-flex h-11 w-full items-center justify-center rounded-full border border-slate-200 px-5 text-sm font-bold text-slate-700 transition-all hover:bg-slate-50 focus:outline-none focus:ring-4 focus:ring-slate-200 dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-800 sm:w-auto sm:flex-none" href="{{ route('home') }}">
                    Back to Home
                </a>
            </div>
        </div>
    </main>
</body>
</html>
