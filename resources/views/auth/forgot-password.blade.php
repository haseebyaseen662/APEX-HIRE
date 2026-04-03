<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Forget Password - Apex Hire</title>
  <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>


  <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
  <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
  <script src="{{ asset('website/assets/js/main.js') }}" defer></script>
<style>
    .field-error {
        border-color: #ef4444 !important;
        outline: none !important;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2) !important;
    }
    .field-error-text {
        color: #ef4444 !important;
    }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col text-slate-900 dark:text-slate-100">
<!-- Top Navigation -->
<!-- Main Content -->
<main class="flex-grow flex items-center justify-center px-4 py-12">
<div class="w-full max-w-md bg-white dark:bg-[#2a162e] rounded-xl shadow-xl dark:shadow-none border border-slate-100 dark:border-primary/10 overflow-hidden">
<!-- Illustration Area -->
<div class="h-48 bg-primary/5 flex items-center justify-center relative overflow-hidden">
<!-- Abstract Decorative Circles -->
<div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/10 rounded-full blur-2xl"></div>
<div class="absolute -bottom-10 -left-10 w-32 h-32 bg-primary/10 rounded-full blur-2xl"></div>
<!-- Lock Icon Illustration using Boxicons with styling -->
<div class="relative z-10 bg-white dark:bg-[#381e3d] p-6 rounded-full shadow-sm ring-1 ring-primary/20">
<i class="bx bx-lock-open !text-6xl text-primary"></i>
</div>
</div>
<div class="p-8">
<div class="text-center mb-8">
<h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Forgot Password?</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                        No worries, we'll send you reset instructions. Please enter the email associated with your account.
                    </p>
</div>
@if (session('status') === 'password-reset-link-sent')
<p class="mb-6 rounded-xl px-4 py-3 text-sm font-semibold" style="border: 1px solid #bbf7d0; background-color: #f0fdf4; color: #15803d;">
                    A password reset link has been sent to your email.
                </p>
@endif
@if (session('status') === 'password-reset-link-cooldown')
<p class="mb-6 rounded-xl px-4 py-3 text-sm font-semibold" style="border: 1px solid #fed7aa; background-color: #fff7ed; color: #c2410c;">
                    Please wait for the cooldown to finish before requesting another reset email.
                </p>
@endif
<form class="flex flex-col gap-5" action="{{ route('password.email') }}" method="POST" id="forgot-password-form" novalidate>
@csrf
<label class="flex flex-col gap-1.5">
<span class="text-sm font-medium text-slate-900 dark:text-white leading-normal">Email Address</span>
<div class="flex w-full items-center rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary overflow-hidden h-12 transition-all" data-field-wrapper="forgot-email">
<div class="pl-4 text-slate-400 dark:text-slate-500">
<i class="bx bx-envelope !text-xl"></i>
</div>
<input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-0 text-sm px-3" data-label="Email" data-rules="required|email" id="forgot-email" name="email" placeholder="name@example.com" type="email" value="{{ old('email', $email ?? '') }}"/>
</div>
<p class="field-error-text hidden text-sm font-medium" data-error="forgot-email"></p>
@error('email')
<span class="field-error-text text-sm font-medium">{{ $message }}</span>
@enderror
</label>
<button class="w-full flex items-center justify-center rounded-lg h-12 text-white font-bold text-sm transition-all active:scale-[0.98] {{ ($cooldownRemaining ?? 0) > 0 ? '' : 'cursor-pointer bg-primary hover:bg-primary/90 shadow-md shadow-primary/25' }}" type="submit" data-reset-button data-cooldown="{{ $cooldownRemaining ?? 0 }}" @disabled(($cooldownRemaining ?? 0) > 0) style="{{ ($cooldownRemaining ?? 0) > 0 ? 'background-color: #6b7280; border: 1px solid #6b7280; box-shadow: none; cursor: not-allowed;' : '' }}">
                        <span>{{ ($cooldownRemaining ?? 0) > 0 ? 'Send again in '.(int) ceil($cooldownRemaining).'s' : 'Reset Password' }}</span>
                    </button>
</form>
<div class="mt-8 pt-6 border-t border-slate-100 dark:border-white/5 text-center">
<a class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors group" href="{{ route('login') }}">
<i class="bx bx-arrow-back !text-lg transition-transform group-hover:-translate-x-1"></i>
                        Return to Login
                    </a>
</div>
</div>
</div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.querySelector('[data-reset-button]');
        const form = document.getElementById('forgot-password-form');
        const emailInput = document.getElementById('forgot-email');

        const runRules = (input) => {
            const value = input.value.trim();
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) {
                    return `${label} is required.`;
                }

                if (rule === 'email' && value.length > 0) {
                    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        return 'Please enter a valid email address.';
                    }
                }
            }

            return null;
        };

        const setFieldState = (input, errorMessage) => {
            const errorEl = document.querySelector(`[data-error="${input.id}"]`);
            const wrapper = document.querySelector(`[data-field-wrapper="${input.id}"]`);

            if (errorMessage) {
                wrapper?.classList.add('field-error');
                if (errorEl) {
                    errorEl.textContent = errorMessage;
                    errorEl.classList.remove('hidden');
                }

                return;
            }

            wrapper?.classList.remove('field-error');
            if (errorEl) {
                errorEl.textContent = '';
                errorEl.classList.add('hidden');
            }
        };

        const validateField = (input) => {
            const error = runRules(input);
            setFieldState(input, error);

            return error === null;
        };

        if (emailInput) {
            let touched = false;

            const validateTouched = () => {
                touched = true;
                validateField(emailInput);
            };

            emailInput.addEventListener('blur', validateTouched);
            emailInput.addEventListener('input', () => {
                if (touched) {
                    validateField(emailInput);
                }
            });
            emailInput.addEventListener('change', () => {
                if (touched) {
                    validateField(emailInput);
                }
            });
        }

        form?.addEventListener('submit', (event) => {
            if (emailInput && !validateField(emailInput)) {
                event.preventDefault();
            }
        });

        if (!button) {
            return;
        }

        const label = button.querySelector('span');
        let remaining = Math.max(0, Math.ceil(Number(button.dataset.cooldown || 0)));

        const render = () => {
            if (remaining > 0) {
                button.disabled = true;
                button.style.backgroundColor = '#6b7280';
                button.style.border = '1px solid #6b7280';
                button.style.color = '#ffffff';
                button.style.boxShadow = 'none';
                button.style.cursor = 'not-allowed';
                label.textContent = `Send again in ${Math.ceil(remaining)}s`;
                return;
            }

            button.disabled = false;
            button.style.backgroundColor = '';
            button.style.border = '';
            button.style.color = '';
            button.style.boxShadow = '';
            button.style.cursor = '';
            button.classList.add('cursor-pointer', 'bg-primary', 'hover:bg-primary/90', 'shadow-md', 'shadow-primary/25');
            label.textContent = 'Reset Password';
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
<!-- Footer -->
</body></html>
