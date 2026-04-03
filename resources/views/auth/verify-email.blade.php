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
                <span class="break-all font-bold text-slate-700 dark:text-slate-200">{{ $email }}</span>.
                Please open your inbox and click the link to verify your Apex Hire account.
            </p>

            @if (session('status') === 'registration-success')
                <p
                    class="mt-8 w-full max-w-xl rounded-xl px-4 py-3 text-sm font-semibold"
                    style="border: 1px solid #bbf7d0; background-color: #f0fdf4; color: #15803d;"
                >
                    Your account has been created. Please verify your email to continue.
                </p>
            @endif

            @if (session('status') === 'unverified-login')
                <p
                    class="mt-8 w-full max-w-xl rounded-xl px-4 py-3 text-sm font-semibold"
                    style="border: 1px solid #fecaca; background-color: #fef2f2; color: #b91c1c;"
                >
                    Your account is not verified yet. Please verify your email before logging in.
                </p>
            @endif

            @if (session('status') === 'verification-link-sent')
                <p
                    class="mt-8 w-full max-w-xl rounded-xl px-4 py-3 text-sm font-semibold"
                    style="border: 1px solid #bbf7d0; background-color: #f0fdf4; color: #15803d;"
                >
                    A fresh verification link has been sent to your email address.
                </p>
            @endif

            @if (session('status') === 'verification-link-cooldown')
                <p
                    class="mt-8 w-full max-w-xl rounded-xl px-4 py-3 text-sm font-semibold"
                    style="border: 1px solid #fed7aa; background-color: #fff7ed; color: #c2410c;"
                >
                    Please wait for the cooldown to finish before requesting another verification email.
                </p>
            @endif

            <div class="mt-12 flex w-full flex-col items-center justify-center gap-3 sm:flex-row">
                <form class="w-full sm:w-auto sm:flex-none" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button
                        class="inline-flex h-11 w-full items-center justify-center rounded-full px-5 text-sm font-bold text-white transition-all focus:outline-none focus:ring-4 sm:w-auto"
                        type="submit"
                        data-resend-button
                        data-cooldown="{{ $cooldownRemaining }}"
                        data-active-class="bg-primary shadow-lg shadow-primary/20 hover:bg-primary/90 focus:ring-primary/20"
                        @disabled($cooldownRemaining > 0)
                        style="{{ $cooldownRemaining > 0 ? 'background-color: #6b7280; border: 1px solid #6b7280; color: #ffffff; box-shadow: none; cursor: not-allowed;' : '' }}"
                    >
                        <span data-default-label="{{ $cooldownRemaining > 0 ? 'Resend in '.$cooldownRemaining.'s' : 'Resend Verification Email' }}">
                            {{ $cooldownRemaining > 0 ? 'Resend in '.$cooldownRemaining.'s' : 'Resend Verification Email' }}
                        </span>
                    </button>
                </form>

                <a class="inline-flex h-11 w-full items-center justify-center rounded-full border border-slate-200 px-5 text-sm font-bold text-slate-700 transition-all hover:bg-slate-50 focus:outline-none focus:ring-4 focus:ring-slate-200 dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-800 sm:w-auto sm:flex-none" href="{{ route('home') }}">
                    Back to Home
                </a>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.querySelector('[data-resend-button]');

            if (!button) {
                return;
            }

            const label = button.querySelector('span');
            let remaining = Math.max(0, Math.ceil(Number(button.dataset.cooldown || 0)));
            const activeClasses = (button.dataset.activeClass || '').split(' ').filter(Boolean);

            const render = () => {
                if (remaining > 0) {
                    button.disabled = true;
                    button.classList.remove(...activeClasses);
                    button.style.backgroundColor = '#6b7280';
                    button.style.border = '1px solid #6b7280';
                    button.style.color = '#ffffff';
                    button.style.boxShadow = 'none';
                    button.style.cursor = 'not-allowed';
                    label.textContent = `Resend in ${Math.ceil(remaining)}s`;
                    return;
                }

                button.disabled = false;
                button.classList.add(...activeClasses);
                button.style.backgroundColor = '';
                button.style.border = '';
                button.style.color = '';
                button.style.boxShadow = '';
                button.style.cursor = '';
                label.textContent = 'Resend Verification Email';
            };

            render();

            if (remaining <= 0) {
                return;
            }

            const interval = window.setInterval(() => {
                remaining -= 1;
                render();

                if (remaining <= 0) {
                    window.clearInterval(interval);
                }
            }, 1000);
        });
    </script>
</body>
</html>
