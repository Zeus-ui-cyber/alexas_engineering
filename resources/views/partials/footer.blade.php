<footer class="bg-slate-950 pt-24 pb-12 border-t border-white/5 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0"
            style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mb-20">

            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/products/logoo.png') }}" alt="Alexas Logo"
                        class="h-12 w-12 rounded-full object-cover border border-blue-500/30">
                    <div class="flex flex-col leading-none">
                        <span class="text-2xl font-black tracking-tighter text-white uppercase">Alexas</span>
                        <span class="text-[10px] font-bold text-blue-500 uppercase tracking-widest">Engineering
                            Services</span>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-xs">
                    Smart IoT water meter solutions for modern infrastructure. Track and manage water consumption with
                    SWIM technology.
                </p>
            </div>

            <div class="md:justify-self-center">
                <h3 class="text-blue-500 font-black uppercase tracking-[0.2em] text-[10px] mb-8">Navigation</h3>
                <ul class="space-y-4 text-sm font-bold uppercase tracking-widest">
                    <li><a href="{{ url('/') }}" class="text-slate-300 hover:text-cyan-400 transition-colors">Home</a>
                    </li>
                    <li><a href="{{ url('/services') }}"
                            class="text-slate-300 hover:text-cyan-400 transition-colors">Solutions</a></li>
                    <li><a href="{{ url('/products') }}"
                            class="text-slate-300 hover:text-cyan-400 transition-colors">Meters</a></li>
                </ul>
            </div>

            <div class="md:justify-self-end">
                <h3 class="text-blue-500 font-black uppercase tracking-[0.2em] text-[10px] mb-8">Contact Us</h3>
                <ul class="space-y-5 text-sm font-medium">
                    <li class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-blue-600/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="text-slate-300">alexasengineering@gmail.com</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-cyan-600/10 flex items-center justify-center text-cyan-500 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="flex flex-col text-slate-300 leading-tight">
                            <span>0922-4074-861</span>
                            <span>0495-340-457</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-cyan-600/10 flex items-center justify-center text-cyan-500 group-hover:bg-cyan-500 group-hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                        </div>
                        <span class="text-slate-300">26 Purok Brgy. Imok, Calauan, Laguna</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div
                            class="w-10 h-10 rounded-xl bg-blue-600/10 flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </div>
                        <a href="https://www.facebook.com/share/1AiNc1rPzY/" target="_blank"
                            class="text-slate-300 hover:text-blue-400 transition-colors">Alexas
                            Engineering Services</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.3em]">
                    &copy; {{ date('Y') }} Alexas Engineering. All systems operational.
                </p>
            </div>

            <div class="flex items-center gap-2">
                <div class="h-[1px] w-8 bg-slate-800"></div>
                <span class="text-[10px] font-mono text-slate-700">v2.0.26_SWIM</span>
                <div class="h-[1px] w-8 bg-slate-800"></div>
            </div>
        </div>
    </div>
</footer>