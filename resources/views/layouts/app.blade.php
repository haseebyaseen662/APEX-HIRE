<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Apex Hire — The Curated Talent Network')</title>
    <meta name="description" content="Apex Hire is an invite-only network connecting vetted startup operators with founders. No bidding wars. No fake reviews. Just trust."/>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Unbounded:wght@800;900&display=swap" rel="stylesheet"/>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Inter', 'sans-serif'],
                        body:    ['Inter', 'sans-serif'],
                        brand:   ['Unbounded', 'sans-serif'],
                    }
                }
            }
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background: #100B00;
            color: #EFFFC8;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1, h2, h3, h4, .font-display {
            font-family: 'Inter', sans-serif;
        }

        /* ── Scroll Reveal ── */
        .reveal {
            opacity: 0;
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .reveal-up    { transform: translateY(40px); }
        .reveal-left  { transform: translateX(-30px); }
        .reveal-right { transform: translateX(30px); }
        .in-view {
            opacity: 1 !important;
            transform: translate(0, 0) !important;
        }

        /* Stagger delays */
        [data-delay="150"] { transition-delay: 150ms; }
        [data-delay="300"] { transition-delay: 300ms; }
        [data-delay="450"] { transition-delay: 450ms; }
        [data-delay="600"] { transition-delay: 600ms; }

        /* Pulsing dot */
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50%      { opacity: 0.4; transform: scale(0.85); }
        }
        .dot-pulse { animation: pulse-dot 2s ease-in-out infinite; }

        /* Form field base */
        .field-input {
            background: rgba(239,255,200,0.08);
            border: 1px solid rgba(239,255,200,0.20);
            color: #EFFFC8;
            border-radius: 0.5rem;
            outline: none;
            width: 100%;
            padding: 0.8rem 1rem;
            font-size: 0.875rem;
            font-family: 'Inter', sans-serif;
            transition: border-color 0.25s, box-shadow 0.25s;
        }
        .field-input::placeholder { color: rgba(239,255,200,0.50); }
        .field-input:focus {
            border-color: #85CB33;
            box-shadow: 0 0 0 1px #85CB33;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('in-view');
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
