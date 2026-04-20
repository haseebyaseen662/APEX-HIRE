<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reset Password - Apex Hire</title>
  <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
<!-- Google Fonts -->
<!-- Boxicons -->

<!-- Tailwind CSS -->
<!-- Theme Configuration -->
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
<body class="bg-background-light dark:bg-background-dark font-display text-text-main dark:text-slate-100 min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<!-- Main Content Area -->
<main class="flex-grow flex flex-col items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">
<!-- Decorative Background Elements -->
<div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
<div class="absolute top-1/4 -left-20 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute bottom-1/4 -right-20 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
</div>
<div class="w-full max-w-[480px] z-10">
<!-- Card Container -->
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl shadow-xl shadow-primary/5 border border-border-light dark:border-border-dark p-6 sm:p-8 md:p-10">
<!-- Header -->
<div class="text-center mb-8">
<div class="size-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5 text-primary">
<i class="bx bx-lock-open text-[28px]"></i>
</div>
<h1 class="text-2xl sm:text-3xl font-bold text-text-main dark:text-white mb-3">Reset Password</h1>
<p class="text-text-muted dark:text-slate-400 text-sm sm:text-base leading-relaxed">
                        Please enter your new password below. Ensure it meets the security requirements.
                    </p>
</div>
<!-- Form -->
<form id="reset-password-form" class="flex flex-col gap-6" action="{{ route('password.store') }}" method="POST" novalidate>
@csrf
<input name="token" type="hidden" value="{{ $request->route('token') }}"/>
<input name="email" type="hidden" value="{{ old('email', $request->email) }}"/>
<!-- New Password Field -->
<div class="flex flex-col gap-1.5">
<label class="text-slate-900 dark:text-white text-sm font-medium leading-normal" for="new-password">New Password</label>
<div class="flex w-full items-center rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary overflow-hidden h-12 transition-all" data-field-wrapper="new-password">
<div class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 dark:text-slate-500 leading-none">
<i class="bx bx-lock block text-[20px] leading-none"></i>
</div>
<input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-0 text-sm px-3" data-label="Password" data-rules="required|min:8" id="new-password" name="password" placeholder="Enter your password" type="password"/>
<button class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 transition-colors hover:text-slate-600 dark:text-slate-500 dark:hover:text-slate-300 leading-none" type="button" data-toggle-password>
<i class="bx bx-hide block text-[20px] leading-none"></i>
</button>
</div>
<p class="field-error-text hidden text-sm font-medium" data-error="new-password"></p>
@error('password')
<p class="field-error-text text-sm font-medium">{{ $message }}</p>
@enderror
@error('email')
<p class="field-error-text text-sm font-medium">{{ $message }}</p>
@enderror
</div>
<!-- Confirm Password Field -->
<div class="flex flex-col gap-1.5">
<label class="text-slate-900 dark:text-white text-sm font-medium leading-normal" for="confirm-password">Confirm Password</label>
<div class="flex w-full items-center rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary overflow-hidden h-12 transition-all" data-field-wrapper="confirm-password">
<div class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 dark:text-slate-500 leading-none">
<i class="bx bx-lock block text-[20px] leading-none"></i>
</div>
<input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-0 text-sm px-3" data-label="Confirm password" data-rules="required|matches:new-password" id="confirm-password" name="password_confirmation" placeholder="Re-enter your password" type="password"/>
<button class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 transition-colors hover:text-slate-600 dark:text-slate-500 dark:hover:text-slate-300 leading-none" type="button" data-toggle-password>
<i class="bx bx-hide block text-[20px] leading-none"></i>
</button>
</div>
<p class="field-error-text hidden text-sm font-medium" data-error="confirm-password"></p>
</div>
<!-- Submit Button -->
<button class="w-full h-12 mt-2 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl shadow-lg shadow-primary/25 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
<span>Reset Password</span>
<i class="bx bx-arrow-forward text-[20px]"></i>
</button>
<!-- Back to Login -->
<div class="text-center mt-2">
<a class="inline-flex items-center gap-2 text-sm font-semibold text-text-muted hover:text-primary transition-colors" href="{{ route('login') }}">
<i class="bx bx-arrow-back text-[16px]"></i>
<span>Back to Sign In</span>
</a>
</div>
</form>
</div>
<!-- Footer/Help Link -->
<p class="text-center mt-8 text-sm text-text-muted dark:text-slate-500">
                Having trouble? <a class="font-semibold text-primary hover:underline" href="{{ route('contact') }}">Contact Support</a>
</p>
</div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('reset-password-form');

        if (!form) {
            return;
        }

        const fields = form.querySelectorAll('input[data-rules]');

        const runRules = (input) => {
            const value = input.value.trim();
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) {
                    return `${label} is required.`;
                }

                if (rule.startsWith('min:')) {
                    const min = Number(rule.split(':')[1]);

                    if (value.length > 0 && value.length < min) {
                        return `${label} must be at least ${min} characters.`;
                    }
                }

                if (rule.startsWith('matches:')) {
                    const targetId = rule.split(':')[1];
                    const target = document.getElementById(targetId);

                    if (target && value !== target.value.trim()) {
                        return 'Passwords do not match.';
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

        const attachLiveValidation = (input) => {
            let touched = false;

            const onValidate = () => {
                touched = true;
                validateField(input);
            };

            const onInput = () => {
                if (touched) {
                    validateField(input);
                }

                if (input.id === 'new-password') {
                    const confirm = document.getElementById('confirm-password');

                    if (confirm && confirm.value.trim().length > 0) {
                        validateField(confirm);
                    }
                }
            };

            input.addEventListener('blur', onValidate);
            input.addEventListener('input', onInput);
            input.addEventListener('change', onInput);
        };

        fields.forEach(attachLiveValidation);

        form.addEventListener('submit', (event) => {
            let allValid = true;

            fields.forEach((input) => {
                if (!validateField(input)) {
                    allValid = false;
                }
            });

            if (!allValid) {
                event.preventDefault();
            }
        });
    });
</script>
</body></html>
