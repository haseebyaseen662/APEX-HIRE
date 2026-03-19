<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title') - Apex Hire</title>
  <link rel="icon" type="image/png" href="{{ asset('website/assets/images/favicon.png') }}"/>
  <link rel="stylesheet" href="{{ asset('website/assets/css/tailwind.css') }}"/>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"/>
  <link rel="stylesheet" href="{{ asset('website/assets/css/theme.css') }}"/>
  <script src="{{ asset('website/assets/js/main.js') }}" defer></script>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col overflow-x-hidden text-slate-900 dark:text-slate-100 font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
<div class="layout-container flex h-full grow flex-col">

    @include('website.layouts.header')

    @yield('content')

    @include('website.layouts.footer')

</div>
</div>

</body>
</html>

