@extends('layouts.app')

@section('content')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            border-color: rgba(59, 130, 246, 0.4);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.1);
        }

        .water-text-gradient {
            background: linear-gradient(to r, #2563eb, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <section class="pt-32 pb-20 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <div
                    class="inline-block px-4 py-1.5 mb-4 text-xs font-black tracking-widest text-blue-600 uppercase bg-blue-100 rounded-full">
                    Hardware Ecosystem
                </div>
                <h1 class="text-5xl lg:text-6xl font-black text-slate-900 mb-6">
                    Smart Water IoT Meter <span class="water-text-gradient">Solutions.</span>
                </h1>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">High-precision IoT hardware designed for seamless
                    integration into modern utility grids.</p>
            </div>

            <div class="glass-card rounded-[3rem] p-8 lg:p-12 mb-16 flex flex-col lg:flex-row gap-12 items-center">
                <div class="flex-1">
                    <h2 class="text-4xl font-black text-slate-900 mb-6">Smart Water IoT Meter (SWIM)</h2>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white shadow-sm border border-slate-50">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                                01</div>
                            <p class="font-bold text-slate-700 uppercase text-sm tracking-wider">Wifi Antenna & AC Adapter
                            </p>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white shadow-sm border border-slate-50">
                            <div
                                class="w-10 h-10 rounded-full bg-cyan-500 flex items-center justify-center text-white font-bold">
                                02</div>
                            <p class="font-bold text-slate-700 uppercase text-sm tracking-wider">Flow Rate Sensor
                                Integration</p>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-white shadow-sm border border-slate-50">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center text-white font-bold">
                                03</div>
                            <p class="font-bold text-slate-700 uppercase text-sm tracking-wider">Cloud Management App</p>
                        </div>
                    </div>
                    <a href="#contact"
                        class="ripple-btn inline-block bg-blue-600 text-white px-10 py-4 rounded-2xl font-bold shadow-xl shadow-blue-200">Request
                        Data Sheet</a>
                </div>
                <div class="flex-1 relative group overflow-hidden rounded-[2.5rem]">
                    <img src="{{ asset('images/products/image_46d896.jpg') }}" alt="SWM"
                        class="w-full transition duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-blue-900/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                        <p class="text-white font-bold text-xl px-10 text-center uppercase tracking-widest">Precision
                            Engineered</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="glass-card rounded-[2.5rem] overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/products/image_46d83a.jpg') }}" alt="Packaging"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-slate-900 mb-2 uppercase">Ready-to-Deploy Units</h3>
                        <p class="text-slate-500">Branded packaging including pre-configured hardware for rapid municipal
                            rollout.</p>
                    </div>
                </div>
                <div class="glass-card rounded-[2.5rem] overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/products/image_46d85d.jpg') }}" alt="Monitoring"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-black text-slate-900 mb-2 uppercase">Real-Time Telemetry</h3>
                        <p class="text-slate-500">High-precision sensors ensure accurate billing data transmitted via
                            secured Wifi protocols.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection