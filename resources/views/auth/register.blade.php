<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Registration - Apex Hire</title>
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
        .text-red-500 {
            color: #ef4444 !important;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased">

    <main class="flex-1 flex flex-col items-center justify-start py-10 px-4 sm:px-6">
        <div class="w-full max-w-3xl flex flex-col gap-8">

            {{-- Title --}}
            <div class="flex flex-col gap-2 text-center sm:text-left">
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Create your account</h1>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Join thousands of professionals and companies finding their perfect match.</p>
            </div>

            <form id="register-form" class="flex flex-col gap-6" action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Role Cards --}}
                <div class="flex flex-col gap-6">
                    <h3 class="text-xl font-bold">I want to...</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <label class="group relative cursor-pointer">
                            <input checked class="peer sr-only" name="account_type" type="radio" value="seeker"/>
                            <div class="flex flex-col h-full rounded-xl border-2 border-slate-100 bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md peer-checked:border-primary peer-checked:bg-primary/5 dark:bg-slate-800 dark:border-slate-700 dark:peer-checked:bg-slate-800">
                                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                                    <i class="bx bx-user text-3xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="mb-2 text-lg font-bold text-slate-900 dark:text-slate-100">Find a Job</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Search thousands of job listings, apply instantly, and find your dream career path with ease.</p>
                                </div>
                                <div class="mt-6 flex items-center justify-end">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-400 transition-colors group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white dark:bg-slate-700">
                                        <i class="bx bx-check text-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </label>

                        <label class="group relative cursor-pointer">
                            <input class="peer sr-only" name="account_type" type="radio" value="employer"/>
                            <div class="flex flex-col h-full rounded-xl border-2 border-slate-100 bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md peer-checked:border-primary peer-checked:bg-primary/5 dark:bg-slate-800 dark:border-slate-700 dark:peer-checked:bg-slate-800">
                                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400">
                                    <i class="bx bx-briefcase text-3xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="mb-2 text-lg font-bold text-slate-900 dark:text-slate-100">Hire Talent</h4>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Post jobs, search resumes, and find the best talent to grow your business effectively.</p>
                                </div>
                                <div class="mt-6 flex items-center justify-end">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-400 transition-colors group-hover:bg-primary group-hover:text-white peer-checked:bg-primary peer-checked:text-white dark:bg-slate-700">
                                        <i class="bx bx-check text-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </label>

                    </div>
                </div>

                {{-- Basic Info --}}
                <div class="mt-4 rounded-xl bg-white p-6 shadow-sm border border-slate-100 dark:bg-slate-800 dark:border-slate-700">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold mb-1">Account Details</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Use your email and password to create an account.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Email --}}
                        <div class="space-y-1 md:col-span-2">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="email">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-3 flex items-center justify-center text-slate-400 pointer-events-none leading-none">
                                    <i class="bx bx-envelope block text-[18px] leading-none"></i>
                                </span>
                                <input
                                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pl-10 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('email') field-error @enderror"
                                    id="email" name="email" type="email"
                                    placeholder="name@company.com" value="{{ old('email') }}"
                                    data-rules="required|email" data-label="Email"
                                />
                            </div>
                            <p class="text-xs text-red-500 hidden mt-1" data-error="email"></p>
                            @error('email')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="password">
                                Password <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input
                                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pr-12 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white @error('password') field-error @enderror"
                                    id="password" name="password" type="password"
                                    placeholder="Min. 8 characters"
                                    data-rules="required|min:8" data-label="Password"
                                />
                                <button class="absolute right-0 top-0 flex h-full w-12 items-center justify-center px-0 text-slate-400 hover:text-primary transition-colors leading-none" type="button" data-toggle-password data-target="password" aria-label="Toggle password visibility">
                                    <i class="bx bx-hide block text-[20px] leading-none"></i>
                                </button>
                            </div>
                            <p class="text-xs text-red-500 hidden mt-1" data-error="password"></p>
                            @error('password')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

	                        {{-- Confirm Password --}}
	                        <div class="space-y-1">
	                            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="password_confirmation">
	                                Confirm Password <span class="text-red-500">*</span>
	                            </label>
                            <div class="relative">
                                <input
                                    class="w-full rounded-lg border border-slate-300 bg-slate-50 p-3 pr-12 text-sm transition-all focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/30 dark:border-slate-600 dark:bg-slate-900 dark:text-white"
                                    id="password_confirmation" name="password_confirmation" type="password"
                                    placeholder="Repeat your password"
                                    data-rules="required|matches:password" data-label="Confirm password"
                                />
                                <button class="absolute right-0 top-0 flex h-full w-12 items-center justify-center px-0 text-slate-400 hover:text-primary transition-colors leading-none" type="button" data-toggle-password data-target="password_confirmation" aria-label="Toggle confirm password visibility">
                                    <i class="bx bx-hide block text-[20px] leading-none"></i>
                                </button>
                            </div>
	                            <p class="text-xs text-red-500 hidden mt-1" data-error="password_confirmation"></p>
	                        </div>
	
	                    </div>
	
	                    {{-- Actions --}}
	                    <div class="flex items-center justify-end gap-4 mt-6 pt-6 border-t border-slate-200 dark:border-slate-700">
	                        <a class="inline-flex items-center justify-center rounded-xl px-6 py-2.5 text-sm font-bold text-slate-600 hover:bg-slate-100 transition-colors dark:text-slate-300 dark:hover:bg-slate-800" href="{{ route('home') }}" role="button">
	                            Cancel
	                        </a>
	                        <button class="flex items-center justify-center gap-2 rounded-xl bg-primary px-8 py-3 text-sm font-bold text-white shadow-lg shadow-primary/30 transition-all hover:bg-primary-dark hover:shadow-xl focus:ring-4 focus:ring-primary/20" type="submit">
	                            <span>Create Account</span>
	                            <i class="bx bx-check text-lg"></i>
	                        </button>
	                    </div>
	                </div>
	
	                <p class="mt-6 text-sm text-slate-500 dark:text-slate-400 text-center">
	                    Already have an account?
	                    <a class="font-semibold text-primary hover:text-primary-dark" href="{{ route('login') }}">Log in</a>
	                </p>
	            </form>
        </div>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('register-form');
        if (!form) return;

        const runRules = (input) => {
            const rules = (input.dataset.rules || '').split('|').filter(Boolean);
            const label = input.dataset.label || 'This field';
            const value = input.value.trim();

            for (const rule of rules) {
                if (rule === 'required' && value.length === 0) {
                    return `${label} is required.`;
                }
                if (rule.startsWith('min:')) {
                    const min = parseInt(rule.split(':')[1], 10);
                    if (value.length > 0 && value.length < min) {
                        return `${label} must be at least ${min} characters.`;
                    }
                }
                if (rule === 'email' && value.length > 0) {
                    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        return 'Please enter a valid email address.';
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

            if (errorMessage) {
                input.classList.add('field-error');
                if (errorEl) {
                    errorEl.textContent = errorMessage;
                    errorEl.classList.remove('hidden');
                }
            } else {
                input.classList.remove('field-error');
                if (errorEl) {
                    errorEl.textContent = '';
                    errorEl.classList.add('hidden');
                }
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
                if (touched) validateField(input);

                if (input.id === 'password') {
                    const confirm = document.getElementById('password_confirmation');
                    if (confirm && confirm.value.trim().length > 0) {
                        validateField(confirm);
                    }
                }
            };

            input.addEventListener('blur', onValidate);
            input.addEventListener('input', onInput);
            input.addEventListener('change', onInput);
        };

        form.querySelectorAll('input[data-rules]').forEach(attachLiveValidation);

        form.addEventListener('submit', (e) => {
            const fields = form.querySelectorAll('input[data-rules]');
            let allValid = true;
            fields.forEach((input) => {
                if (!validateField(input)) allValid = false;
            });

            const roleSelected = !!document.querySelector('input[name="account_type"]:checked');
            if (!roleSelected) allValid = false;

            if (!allValid) e.preventDefault();
        });

    });
    </script>

</body>
</html>
