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
<form id="reset-password-form" class="flex flex-col gap-6" action="{{ route('password.store') }}" method="POST">
@csrf
<!-- New Password Field -->
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main dark:text-slate-200" for="new-password">New Password</label>
<div class="relative group">
<input class="w-full h-12 px-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-slate-800 text-text-main dark:text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all pr-12" id="new-password" placeholder="Enter new password" type="password"/>
<button class="absolute right-0 top-0 h-full px-4 text-text-muted hover:text-primary transition-colors flex items-center justify-center" type="button" data-toggle-password>
<i class="bx bx-hide text-[20px]"></i>
</button>
</div>
<!-- Dynamic Checklist (Visual Mockup) -->
<div class="mt-3 p-4 bg-background-light dark:bg-slate-900/50 rounded-xl border border-border-light dark:border-border-dark/50">
<p class="text-xs font-semibold text-text-muted dark:text-slate-400 uppercase tracking-wider mb-3">Password must contain:</p>
<ul class="space-y-2">
<li class="flex items-center gap-2 text-sm text-green-600 dark:text-green-400">
<i class="bx bx-check-circle text-[18px]"></i>
<span>At least 8 characters</span>
</li>
<li class="flex items-center gap-2 text-sm text-text-muted dark:text-slate-500">
<i class="bx bx-circle text-[18px]"></i>
<span>One uppercase letter</span>
</li>
<li class="flex items-center gap-2 text-sm text-text-muted dark:text-slate-500">
<i class="bx bx-circle text-[18px]"></i>
<span>One number</span>
</li>
<li class="flex items-center gap-2 text-sm text-text-muted dark:text-slate-500">
<i class="bx bx-circle text-[18px]"></i>
<span>One special character (!@#$%)</span>
</li>
</ul>
</div>
</div>
<!-- Confirm Password Field -->
<div class="space-y-2">
<label class="block text-sm font-bold text-text-main dark:text-slate-200" for="confirm-password">Confirm Password</label>
<div class="relative group">
<input class="w-full h-12 px-4 rounded-xl border border-border-light dark:border-border-dark bg-white dark:bg-slate-800 text-text-main dark:text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all pr-12" id="confirm-password" placeholder="Re-enter password" type="password"/>
<button class="absolute right-0 top-0 h-full px-4 text-text-muted hover:text-primary transition-colors flex items-center justify-center" type="button" data-toggle-password>
<i class="bx bx-hide text-[20px]"></i>
</button>
</div>
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
</body></html>
