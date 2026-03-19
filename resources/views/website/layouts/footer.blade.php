<footer class="bg-white dark:bg-background-dark border-t border-neutral-light dark:border-neutral-dark py-12 px-10">
  <div class="max-w-[960px] mx-auto flex flex-col md:flex-row justify-between gap-8">
    <div class="flex flex-col gap-4">
      <a class="flex items-center" href="{{ route('home') }}">
  <img src="{{ asset('website/assets/images/logo-white.png') }}" alt="Apex Hire logo" class="h-12 w-auto"/>
</a>
      <p class="text-slate-500 dark:text-slate-400 text-sm max-w-xs">
        Connecting the world's professionals to make them more productive and successful.
      </p>
    </div>
    <div class="flex gap-16 flex-wrap">
      <div class="flex flex-col gap-3">
        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Explore</h4>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('home') }}">Home</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('browse') }}">Find Jobs</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('success') }}">Success Stories</a>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Company</h4>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('about') }}">About Us</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('contact') }}">Contact Us</a>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Legal</h4>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('terms') }}">Terms</a>
        <a class="text-slate-500 dark:text-slate-400 hover:text-primary text-sm" href="{{ route('privacy') }}">Privacy</a>
      </div>
    </div>
  </div>
  <div class="max-w-[960px] mx-auto mt-12 pt-8 border-t border-neutral-light dark:border-neutral-dark flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-400">
    <p>© 2023 Apex Hire Inc. All rights reserved.</p>
    <div class="flex gap-4">
      <a class="hover:text-primary transition-colors" href="{{ route('about') }}"><i class="bx bx-globe text-xl"></i></a>
      <a class="hover:text-primary transition-colors" href="{{ route('contact') }}"><i class="bx bx-at text-xl"></i></a>
    </div>
  </div>
</footer>
