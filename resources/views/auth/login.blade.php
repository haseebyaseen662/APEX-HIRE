<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - Apex Hire</title>
  <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>


  <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
  <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
  <script src="{{ asset('website/assets/js/main.js') }}" defer></script>
<style>
    .field-error-text {
        color: #ef4444 !important;
    }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display antialiased flex flex-col min-h-screen">
<!-- Top Navigation -->
<!-- Split Screen Content -->
    <main class="flex flex-1 w-full">
        <!-- Left Side: Image (Hidden on small screens) -->
        <div class="hidden lg:flex w-1/2 relative overflow-hidden bg-slate-100 dark:bg-slate-900">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="professional woman working in modern office" style="background-image: url('{{ asset("website/assets/images/login-hero.png") }}');"></div>
        <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
        <div class="absolute bottom-0 left-0 p-12 bg-gradient-to-t from-black/80 to-transparent w-full text-white">
        <h3 class="text-3xl font-bold mb-4">Find your dream career today.</h3>
        <p class="text-lg opacity-90">Join thousands of professionals who have found their perfect match through Apex Hire.</p>
        </div>
        </div>
        <!-- Right Side: Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 overflow-y-auto bg-background-light dark:bg-background-dark">
        <div class="w-full max-w-md flex flex-col gap-8">
        <div class="flex flex-col gap-2 text-center lg:text-left">
        <h1 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-[-0.033em] md:text-4xl">
                                Welcome Back
                            </h1>
        <h2 class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">
                                Log in to continue your job search journey.
                            </h2>
        </div>
        @if (session('status'))
        <div
        class="rounded-xl px-4 py-3 text-sm font-medium"
        style="border: 1px solid #bbf7d0; background-color: #f0fdf4; color: #15803d;"
        >
        {{ session('status') }}
        </div>
        @endif
        <!-- Email Login Form -->
        <form class="flex flex-col gap-5" action="{{ route('login') }}" method="POST">
        @csrf
        <!-- Email Field -->
        <div class="flex flex-col gap-1.5">
        <label class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Email Address</label>
        <div class="flex w-full items-center rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary overflow-hidden h-12 transition-all">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 dark:text-slate-500 leading-none">
        <i class="bx bx-envelope block text-[20px] leading-none"></i>
        </div>
        <input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-0 text-sm px-3" placeholder="name@example.com" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"/>
        </div>
        @error('email')
        <p class="field-error-text text-sm font-medium">{{ $message }}</p>
        @enderror
        </div>
        <!-- Password Field -->
        <div class="flex flex-col gap-1.5">
        <div class="flex justify-between items-center">
        <label class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Password</label>
        <a class="text-primary text-sm font-medium hover:underline" href="{{ route('password.request') }}">Forgot password?</a>
        </div>
        <div class="flex w-full items-center rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary overflow-hidden h-12 transition-all">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 dark:text-slate-500 leading-none">
        <i class="bx bx-lock block text-[20px] leading-none"></i>
        </div>
        <input class="w-full bg-transparent border-none text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:ring-0 text-sm px-3" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password"/>
        <button class="flex h-12 w-12 shrink-0 items-center justify-center self-stretch text-slate-400 dark:text-slate-500 hover:text-slate-600 dark:hover:text-slate-300 leading-none" type="button" data-toggle-password>
        <i class="bx bx-hide block text-[20px] leading-none"></i>
        </button>
        </div>
        @error('password')
        <p class="field-error-text text-sm font-medium">{{ $message }}</p>
        @enderror
        </div>
        <button class="mt-2 w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-primary hover:bg-primary/90 transition-colors text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/20" type="submit">
        <span class="truncate">Log In</span>
        </button>
        </form>
        <p class="text-center text-slate-500 dark:text-slate-400 text-sm">
                            Don't have an account? <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Sign up</a>
        </p>
        </div>
        </div>
    </main>
    </body>
</html>
