<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALEXAS ENGINEERING SERVICES</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Global Animations */
        .liquid-btn .liquid-bg {
            transition: transform 0.6s cubic-bezier(0.85, 0, 0.15, 1);
        }

        .input-focus-glow:focus {
            border-color: #3b82f6 !important;
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.15);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-icon {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 font-sans antialiased">

    <nav class="bg-white/70 backdrop-blur-xl border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/products/logoo.png') }}" alt="Alexa Logo"
                    class="h-10 w-10 rounded-full object-cover">
                <div class="flex flex-col leading-none">
                    <span class="text-xl font-black text-slate-800 uppercase">ALEXAS</span>
                    <span class="text-[10px] font-bold text-blue-500 uppercase tracking-widest">Engineering
                        Services</span>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-8 font-bold text-sm text-slate-600 uppercase tracking-widest">
                <a href="{{ url('/') }}"
                    class="{{ request()->is('/') ? 'text-blue-600' : '' }} hover:text-blue-600 transition">Home</a>
                <a href="{{ url('/services') }}"
                    class="{{ request()->is('services') ? 'text-blue-600' : '' }} hover:text-blue-600 transition">Solutions</a>
                <a href="{{ url('/products') }}"
                    class="{{ request()->is('products') ? 'text-blue-600' : '' }} hover:text-blue-600 transition">Meters</a>
                <a href="{{ url('/') }}#contact"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 shadow-lg transition-all normal-case tracking-normal">Direct
                    Inquiry</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @stack('scripts')
</body>

</html>