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
<form class="flex flex-col gap-5" action="{{ route('password.email') }}" method="POST">
@csrf
<label class="flex flex-col gap-2">
<span class="text-sm font-semibold text-slate-700 dark:text-slate-200">Email Address</span>
<div class="relative">
<input class="w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 px-4 py-3 pl-11 text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all" placeholder="name@example.com" type="email"/>
<div class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
<i class="bx bx-envelope !text-xl"></i>
</div>
</div>
</label>
<button class="w-full cursor-pointer flex items-center justify-center rounded-lg h-12 bg-primary hover:bg-primary/90 text-white font-bold text-sm shadow-md shadow-primary/25 transition-all active:scale-[0.98]" type="submit">
                        Reset Password
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
<!-- Footer -->
</body></html>
