@extends('layouts.app')

@section('content')
    <style>
        /* Liquid Button rising water effect */
        .liquid-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .liquid-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        /* Glow pulse for input focus */
        .input-focus-glow:focus {
            border-color: #3b82f6 !important;
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.15);
            background: rgba(15, 23, 42, 0.8) !important;
        }

        /* Custom dropdown arrow */
        .custom-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%233b82f6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1.5rem center;
            background-size: 1.25rem;
        }

        .error-glow {
            border-color: #ef4444 !important;
            box-shadow: 0 0 15px rgba(239, 68, 68, 0.2);
        }
    </style>

    <nav class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-xl border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="logo-gauge">
                    <img src="{{ asset('images/products/logoo.png') }}" alt="Alexas Logo"
                        class="h-10 w-10 rounded-full object-cover">
                </div>
                <div class="flex flex-col leading-none">
                    <span class="text-xl font-black tracking-tighter text-slate-800 uppercase">Alexas</span>
                    <span class="text-[10px] font-bold text-blue-500 uppercase tracking-widest">Engineering Services</span>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-8 font-bold text-sm text-slate-600 uppercase tracking-widest">
                <a href="{{ url('/services') }}" class="hover:text-blue-600 transition">Solutions</a>
                <a href="{{ url('/products') }}" class="hover:text-blue-600 transition">Meters</a>
                <a href="#contact"
                    class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 shadow-lg transition-all">
                    Direct Inquiry
                </a>
            </div>
        </div>
    </nav>

    <section id="contact" class="relative bg-slate-950 py-32 overflow-hidden mt-20">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <div class="space-y-10">
                    <div class="space-y-6">
                        <div
                            class="inline-flex items-center gap-3 bg-blue-500/10 border border-blue-500/20 px-4 py-2 rounded-full">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                            </span>
                            <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">Transmission
                                Ready</span>
                        </div>
                        <h2 class="text-6xl font-black text-white leading-tight">
                            Let's Talk <br /> <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Engineering.</span>
                        </h2>
                        <p class="text-slate-400 text-lg leading-relaxed">
                            Deploying smart infrastructure requires precision. Fill out the operational brief below to
                            connect with our technical department.
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <div
                            class="p-6 rounded-3xl bg-slate-900/50 border border-slate-800 hover:border-blue-500/50 transition-all group">
                            <div
                                class="w-12 h-12 bg-blue-600/20 rounded-2xl flex items-center justify-center text-blue-400 mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white font-bold mb-1">Email Channel</h4>
                            <p class="text-slate-500 text-sm">contact@alexas.com</p>
                        </div>
                        <div
                            class="p-6 rounded-3xl bg-slate-900/50 border border-slate-800 hover:border-blue-500/50 transition-all group">
                            <div
                                class="w-12 h-12 bg-cyan-600/20 rounded-2xl flex items-center justify-center text-cyan-400 mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white font-bold mb-1">HQ Location</h4>
                            <p class="text-slate-500 text-sm">San Pablo City, Laguna</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-4 bg-blue-600/20 blur-3xl rounded-[4rem] -z-10"></div>

                    @if(session('success'))
                        <div class="success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}">
                        @error('name') <div class="error">{{ $message }}</div> @enderror

                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}">
                        @error('email') <div class="error">{{ $message }}</div> @enderror

                        <label>Contact Number</label>
                        <input type="text" name="contact_number" value="{{ old('contact_number') }}">
                        @error('contact_number') <div class="error">{{ $message }}</div> @enderror

                        <label>Subject</label>
                        <input type="text" name="subject" value="{{ old('subject') }}">
                        @error('subject') <div class="error">{{ $message }}</div> @enderror

                        <label>Message</label>
                        <textarea name="message" rows="5">{{ old('message') }}</textarea>
                        @error('message') <div class="error">{{ $message }}</div> @enderror

                        <button type="submit">Send Message</button>
                    </form>

                </div>

            </div>
        </div>
    </section>

    <footer class="bg-slate-950 py-12 border-t border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-slate-600 text-sm font-medium">
                &copy; {{ date('Y') }} <span class="text-white">Alexas Engineering Services.</span> All systems operational.
            </p>
        </div>
    </footer>
@endsection