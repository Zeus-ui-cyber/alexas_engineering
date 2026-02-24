@extends('layouts.app')

@section('content')
    <style>
        .service-icon-box {
            background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
        }

        .service-card {
            border-radius: 2.5rem;
            background: #ffffff;
            border: 1px solid #f1f5f9;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            background: #0f172a;
            /* Navy dark like the homepage footer */
        }

        .service-card:hover h3 {
            color: #ffffff;
        }

        .service-card:hover p {
            color: #94a3b8;
        }
    </style>

    <section class="pt-32 pb-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Specialized
                    <br /><span class="text-blue-600">Engineering.</span></h2>
                <p class="text-slate-500 max-w-xl mx-auto text-lg">Leading the Philippines in smart infrastructure
                    development and technical consulting.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="service-card p-10 group">
                    <div class="service-icon-box w-16 h-16 rounded-2xl flex items-center justify-center text-white mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-7h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tight transition-colors">Structural Design</h3>
                    <p class="text-slate-600 leading-relaxed transition-colors">Advanced structural analysis and
                        high-fidelity blueprints for modern, sustainable infrastructure projects.</p>
                </div>

                <div class="service-card p-10 group">
                    <div class="service-icon-box w-16 h-16 rounded-2xl flex items-center justify-center text-white mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tight transition-colors">Project Management</h3>
                    <p class="text-slate-600 leading-relaxed transition-colors">End-to-end oversight ensuring safety
                        protocols, strict timelines, and budget efficiency throughout construction.</p>
                </div>

                <div class="service-card p-10 group">
                    <div class="service-icon-box w-16 h-16 rounded-2xl flex items-center justify-center text-white mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-4 uppercase tracking-tight transition-colors">Technical Consulting
                    </h3>
                    <p class="text-slate-600 leading-relaxed transition-colors">Expert feasibility studies and technical
                        advice for industrial-scale engineering developments.</p>
                </div>
            </div>
        </div>
    </section>
@endsection