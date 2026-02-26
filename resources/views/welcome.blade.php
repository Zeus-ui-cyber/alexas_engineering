@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --deep-blue: #0f172a;
            --tech-cyan: #22d3ee;
            --action-blue: #3b82f6;
        }

        /* 1. Surface Water Light Effect */
        .water-surface-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 40vh;
            background: linear-gradient(180deg, rgba(34, 211, 238, 0.1) 0%, transparent 100%);
            pointer-events: none;
            z-index: 40;
        }

        /* 2. Enhanced Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* 3. Hero & Liquid Shape */
        .water-hero {
            background: radial-gradient(circle at 50% -20%, #e0f2fe 0%, #ffffff 60%);
            position: relative;
            overflow: hidden;
        }

        .liquid-shape {
            width: 100%;
            aspect-ratio: 1/1;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            animation: morphing 8s infinite ease-in-out;
            overflow: hidden;
            border: 8px solid white;
            filter: drop-shadow(0 25px 40px rgba(59, 130, 246, 0.25));
        }

        @keyframes morphing {

            0%,
            100% {
                border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            }

            50% {
                border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
            }
        }

        .eng-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-bottom: 4px solid var(--action-blue);
        }

        /* 4. Landscape Video Swiper Styles */
        .video-reel-container {
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: 2rem;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: #000;
            position: relative;
        }

        .video-card video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: #000;
        }

        .mute-btn {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            z-index: 50;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem;
            border-radius: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .mute-btn:hover {
            background: var(--action-blue);
            transform: scale(1.1);
        }

        .video-content-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9), transparent);
            z-index: 10;
        }

        /* 5. Scrollable Details */
        .details-scroll-area {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 1rem;
            scrollbar-width: thin;
            scrollbar-color: var(--action-blue) transparent;
        }

        .details-scroll-area::-webkit-scrollbar {
            width: 4px;
        }

        .details-scroll-area::-webkit-scrollbar-thumb {
            background: var(--action-blue);
            border-radius: 10px;
        }

        .map-container iframe {
            filter: grayscale(100%) invert(92%) contrast(85%);
        }
    </style>

    <div class="water-surface-overlay"></div>

    <section class="water-hero min-h-screen flex items-center pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="reveal">
                <div
                    class="inline-flex items-center gap-3 bg-blue-50 text-blue-700 px-5 py-2 rounded-full text-[10px] font-black uppercase tracking-widest mb-8 border border-blue-100">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    Digital Infrastructure Overview
                </div>
                <h1 class="text-7xl lg:text-9xl font-black text-slate-900 leading-[0.8] mb-8">
                    ALEXA'S<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">SWIM
                        SYSTEM</span>
                </h1>
                <p class="text-xl text-slate-500 mb-10 leading-relaxed max-w-lg">
                    Explore the technical architecture behind our next-generation smart water metering ecosystem.
                </p>
                <a href="#overview"
                    class="inline-block bg-slate-900 text-white px-12 py-5 rounded-2xl font-bold text-sm hover:bg-blue-600 transition-all shadow-2xl tracking-widest uppercase">
                    See Features
                </a>
            </div>

            <div class="relative reveal" style="transition-delay: 0.3s">
                <div class="liquid-shape">
                    <img src="{{ asset('images/products/logoo.png') }}" alt="Alexas Logo"
                        class="w-full h-full object-cover scale-110">
                </div>
                <div class="absolute -bottom-10 -right-10 eng-panel p-8 rounded-[2.5rem] shadow-2xl min-w-[300px]">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-12 w-12 rounded-xl bg-blue-600 flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[10px] font-black text-blue-500 uppercase tracking-tighter">Status</h4>
                            <p class="text-xl font-black text-slate-800 uppercase">Operational</p>
                        </div>
                    </div>
                    <div class="space-y-3 text-[10px] font-bold text-slate-400 uppercase">
                        <div class="flex justify-between"><span>Tech Stack</span><span class="text-blue-600">IoT
                                Verified</span></div>
                        <div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-600 to-cyan-400 w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        :root {
            --palette-vibrant: #007bff;
            --palette-cyan: #00d4ff;
            --palette-deep: #005cff;
            --glow-strength: rgba(0, 212, 255, 0.4);
        }

        /* 3D Video Perspective */
        .perspective-container {
            perspective: 2000px;
        }

        .video-reel-3d {
            transform: rotateY(10deg) rotateX(5deg);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow:
                -20px 20px 60px rgba(0, 0, 0, 0.5),
                0 0 40px rgba(0, 123, 255, 0.2);
        }

        .video-reel-3d:hover {
            transform: rotateY(0deg) rotateX(0deg) scale(1.02);
            box-shadow:
                0 30px 80px rgba(0, 123, 255, 0.4),
                0 0 50px var(--glow-strength);
        }

        /* Glowy Feature Cards */
        .glow-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .glow-card:hover {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 212, 255, 0.3);
            transform: translateY(-10px) translateZ(20px);
        }

        .glow-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(0, 212, 255, 0.1), transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .glow-card:hover::before {
            opacity: 1;
        }

        /* Floating Animation for Icons */
        .floating-icon {
            animation: floating 3s infinite ease-in-out;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* Scanline Effect for Video */
        .video-reel-container::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%),
                linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
            background-size: 100% 4px, 3px 100%;
            pointer-events: none;
            z-index: 5;
        }
    </style>

    <style>
        :root {
            --palette-vibrant: #007bff;
            --palette-cyan: #00d4ff;
            --palette-deep: #005cff;
            --glow-strength: rgba(0, 212, 255, 0.4);
        }

        /* 3D Video Perspective */
        .perspective-container {
            perspective: 2000px;
        }

        .video-reel-3d {
            transform: rotateY(10deg) rotateX(5deg);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow:
                -20px 20px 60px rgba(0, 0, 0, 0.5),
                0 0 40px rgba(0, 123, 255, 0.2);
            position: relative;
        }

        .video-reel-3d:hover {
            transform: rotateY(0deg) rotateX(0deg) scale(1.02);
            box-shadow:
                0 30px 80px rgba(0, 123, 255, 0.4),
                0 0 50px var(--glow-strength);
        }

        /* Scanline Effect Overlay */
        .video-reel-3d::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.15) 50%),
                linear-gradient(90deg, rgba(0, 123, 255, 0.05), rgba(0, 212, 255, 0.02));
            background-size: 100% 4px, 3px 100%;
            pointer-events: none;
            z-index: 5;
            border-radius: 3rem;
        }

        /* Glowy Feature Cards */
        .glow-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .glow-card:hover {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 212, 255, 0.4);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 123, 255, 0.1);
        }

        .floating-icon {
            animation: floating 3s infinite ease-in-out;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }
    </style>

<section id="overview" class="py-32 bg-slate-950 text-white relative overflow-hidden">
  <div
      class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none">
  </div>
  <div
      class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[120px] pointer-events-none">
  </div>

  <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="text-center mb-24 reveal">
          <h2 class="text-cyan-400 font-black text-xs uppercase tracking-[0.5em] mb-4">Architecture</h2>
          <h3 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-none">
              System <br>
              <span
                  class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-400 to-cyan-300">Intelligence.</span>
          </h3>
      </div>

      <div class="grid lg:grid-cols-12 gap-16 items-start perspective-container">
          <div class="lg:col-span-7 reveal">
              <div class="video-reel-3d video-reel-container rounded-[3rem] border border-white/10 overflow-hidden">
                  <button id="global-mute-btn" class="mute-btn z-50">
                      <svg id="mute-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636" />
                      </svg>
                  </button>

                  <div class="swiper vertical-video-swiper h-full">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="video-card">
                                  <!-- UPDATED: video embed (renders reliably) -->
                                  <iframe
                                      class="reel-video"
                                      src="https://drive.google.com/file/d/1ggTin8i7SIa3pOWOeXx9FjSJlxKysw3M/preview"
                                      allow="autoplay"
                                      allowfullscreen
                                      frameborder="0">
                                  </iframe>

                                  <div class="video-content-overlay">
                                      <div class="flex items-center gap-2 mb-3">
                                          <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                                          <span
                                              class="text-[10px] font-black uppercase tracking-widest text-white/70">Live
                                              Feed 01</span>
                                      </div>
                                      <h4 class="text-3xl font-black uppercase italic tracking-tighter">Operational
                                          Showcase</h4>
                                  </div>
                              </div>
                          </div>

                          <div class="swiper-slide">
                              <div class="video-card">
                                  <!-- UPDATED: video embed (renders reliably) -->
                                  <iframe
                                      class="reel-video"
                                      src="https://drive.google.com/file/d/1qTxD23KOUYNbJHu2AMVRdnAgxQp4q6QA/preview"
                                      allow="autoplay"
                                      allowfullscreen
                                      frameborder="0">
                                  </iframe>

                                  <div class="video-content-overlay">
                                      <div class="flex items-center gap-2 mb-3">
                                          <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                                          <span
                                              class="text-[10px] font-black uppercase tracking-widest text-white/70">Telemetry
                                              Data</span>
                                      </div>
                                      <h4 class="text-3xl font-black uppercase italic tracking-tighter">IoT Telemetry
                                      </h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-pagination"></div>
                  </div>
              </div>

              <p class="text-center text-blue-500/50 text-[10px] font-black uppercase mt-8 tracking-[0.4em]">
                  Swipe Vertically to Switch Stream
              </p>
          </div>

          <div class="lg:col-span-5 reveal" style="transition-delay: 0.2s">
              <div class="details-scroll-area space-y-8">

                  <div class="glow-card p-10 rounded-[2.5rem] group border-l-4 border-l-blue-600">
                      <div
                          class="floating-icon w-14 h-14 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl flex items-center justify-center text-white mb-6">
                          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z" />
                          </svg>
                      </div>
                      <h4 class="text-xl font-black uppercase italic mb-3">Real-Time Monitoring</h4>
                      <p class="text-slate-400 text-sm leading-relaxed">Our sensors provide millisecond-precision
                          data, ensuring every drop is accounted for on your dashboard.</p>
                  </div>

                  <div class="glow-card p-10 rounded-[2.5rem] group border-l-4 border-l-cyan-400">
                      <div
                          class="floating-icon w-14 h-14 bg-gradient-to-br from-cyan-500 to-blue-400 rounded-2xl flex items-center justify-center text-white mb-6">
                          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                          </svg>
                      </div>
                      <h4 class="text-xl font-black uppercase italic mb-3">Scalable Infrastructure</h4>
                      <p class="text-slate-400 text-sm leading-relaxed">From single households to city-wide networks,
                          Alexa's system scales without performance drops.</p>
                  </div>

              </div>
          </div>
      </div>
  </div>
</section>

    <style>
        :root {
            /* Colors extracted from your blue palette */
            --palette-vibrant: #007bff;
            --palette-cyan: #00d4ff;
            --palette-deep: #005cff;
            --palette-soft: #e0f2fe;
        }

        /* 3D Map Container Effect */
        .map-wrapper-3d {
            perspective: 1000px;
            transition: transform 0.5s ease;
        }

        .map-inner-3d {
            transform: rotateY(-5deg) rotateX(5deg);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow:
                -20px 20px 50px rgba(0, 123, 255, 0.2),
                0 0 20px rgba(0, 212, 255, 0.1);
        }

        .map-wrapper-3d:hover .map-inner-3d {
            transform: rotateY(0deg) rotateX(0deg) scale(1.02);
            box-shadow:
                0 30px 60px rgba(0, 123, 255, 0.4),
                0 0 40px rgba(0, 212, 255, 0.2);
        }

        /* Vibrant Glassmorphism for HQ Panel */
        .glass-hq-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 212, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .glass-hq-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(0, 123, 255, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        /* Colorful Navigation Button */
        .btn-nav-vibrant {
            background: linear-gradient(90deg, var(--palette-deep), var(--palette-cyan));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
        }

        .btn-nav-vibrant::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--palette-deep), var(--palette-cyan));
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
        }

        .btn-nav-vibrant:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        /* Map Iframe saturation boost */
        .vibrant-map {
            filter: saturate(1.5) contrast(1.1) brightness(1.1);
        }
    </style>

    <style>
        :root {
            /* Colors extracted from your blue palette */
            --palette-vibrant: #007bff;
            --palette-cyan: #00d4ff;
            --palette-deep: #005cff;
            --palette-soft: #e0f2fe;
            --map-pin-red: #ff3b30;
            /* Red from your earth map reference */
        }

        /* 3D Map Container Effect */
        .map-wrapper-3d {
            perspective: 1200px;
            transition: transform 0.5s ease;
        }

        .map-inner-3d {
            transform: rotateY(-8deg) rotateX(6deg);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow:
                -30px 30px 60px rgba(0, 92, 255, 0.25),
                0 0 30px rgba(0, 212, 255, 0.15);
            position: relative;
        }

        .map-wrapper-3d:hover .map-inner-3d {
            transform: rotateY(0deg) rotateX(0deg) scale(1.03);
            box-shadow:
                0 40px 80px rgba(0, 92, 255, 0.45),
                0 0 50px rgba(0, 212, 255, 0.25);
        }

        /* Exact 3D Pin Point Marker */
        .custom-pin {
            position: absolute;
            top: 50%;
            /* Adjust these to match the exact HQ location on the map */
            left: 50%;
            transform: translate(-50%, -100%);
            z-index: 20;
            pointer-events: none;
        }

        .pin-head {
            width: 40px;
            height: 40px;
            background: var(--map-pin-red);
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .pin-head::after {
            content: '';
            width: 14px;
            height: 14px;
            background: white;
            border-radius: 50%;
            transform: rotate(45deg);
        }

        .pin-pulse {
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 10px;
            background: rgba(255, 59, 48, 0.4);
            border-radius: 50%;
            animation: pulse-ring 2s infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: translateX(-50%) scale(0.5);
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) scale(3);
                opacity: 0;
            }
        }

        /* Vibrant Glassmorphism Panel */
        .glass-hq-panel {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 212, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .btn-nav-vibrant {
            background: linear-gradient(90deg, var(--palette-deep), var(--palette-cyan));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 900;
            transition: all 0.3s ease;
        }

        .btn-nav-vibrant:hover {
            letter-spacing: 0.1em;
            opacity: 0.8;
        }

        .vibrant-map {
            filter: saturate(1.6) contrast(1.1) brightness(1.05);
        }
    </style>

    <section class="py-32 bg-slate-950 border-t border-white/5 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-3 gap-16 items-center">

                <div class="reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="h-[2px] w-12 bg-gradient-to-r from-blue-600 to-cyan-400"></div>
                        <h2 class="text-cyan-400 font-black text-xs uppercase tracking-[0.5em]">Geospatial Intelligence</h2>
                    </div>

                    <h3 class="text-6xl font-black text-white uppercase tracking-tighter mb-8 leading-[0.9]">
                        Command <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-400 to-cyan-300">Center.</span>
                    </h3>

                    <p class="text-slate-400 text-lg leading-relaxed mb-10">
                        Real-time network oversight for Alexa's Engineering Services, operating from our central hub in
                        Laguna.
                    </p>

                    <div class="glass-hq-panel p-10 rounded-[3rem] group border-l-4 border-l-blue-500">
                        <div class="flex items-center gap-5 mb-6">
                            <div
                                class="h-12 w-12 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-black uppercase tracking-widest text-[10px]">Operations HQ</h4>
                                <p class="text-blue-400 text-xs font-bold uppercase">Calauan Hub</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm italic mb-8">26 Purok Brgy. Imok, Calauan, Laguna</p>
                        <a href="https://maps.app.goo.gl/UkRpQ27F6aaCDcrE7" target="_blank"
                            class="btn-nav-vibrant uppercase tracking-widest text-[11px]">
                            Start Live Navigation →
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 reveal map-wrapper-3d" style="transition-delay: 0.2s">
                    <div class="map-inner-3d relative h-[550px] rounded-[4.5rem] overflow-hidden border border-white/10">

                        <div class="custom-pin">
                            <div class="pin-pulse"></div>
                            <div class="pin-head"></div>
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent pointer-events-none z-10">
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15477.58169970923!2d121.3129!3d14.1524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5ba71e41d8e9%3A0x6e8a8b1a8a8a8a8a!2sCalauan%2C%20Laguna!5e0!3m2!1sen!2sph!4v1700000000000"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            class="vibrant-map">
                        </iframe>

                        <div
                            class="absolute top-8 left-8 z-20 bg-black/50 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                <span class="text-[9px] text-white font-black uppercase tracking-widest">Live
                                    Sat-Feed</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        :root {
            --palette-vibrant: #007bff;
            --palette-cyan: #00d4ff;
            --palette-deep: #005cff;
        }

        /* 3D Form Floating Effect */
        .contact-perspective {
            perspective: 1500px;
        }

        .glass-form-3d {
            transform: rotateX(5deg);
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 212, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .glass-form-3d:hover {
            transform: rotateX(0deg) translateY(-10px);
            border: 1px solid rgba(0, 212, 255, 0.3);
            box-shadow: 0 40px 80px -15px rgba(0, 123, 255, 0.2);
        }

        /* Animated Input Fields */
        .input-group-3d {
            position: relative;
            overflow: hidden;
        }

        .modern-input {
            background: rgba(0, 0, 0, 0.4) !important;
            border: 1px solid rgba(255, 255, 255, 0.05) !important;
            transition: all 0.3s ease;
        }

        .modern-input:focus {
            border-color: var(--palette-cyan) !important;
            box-shadow: 0 0 15px rgba(0, 212, 255, 0.1);
            transform: translateX(5px);
        }

        /* Cyber Button Effect */
        .btn-cyber {
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            background: linear-gradient(90deg, var(--palette-deep), var(--palette-cyan));
        }

        .btn-cyber:hover {
            letter-spacing: 0.3em;
            box-shadow: 0 0 30px rgba(0, 212, 255, 0.4);
            transform: scale(1.02);
        }

        .btn-cyber::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-cyber:hover::before {
            left: 100%;
        }
    </style>

    <section id="contact" class="py-32 bg-slate-950 border-t border-white/5 relative overflow-hidden">
        <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-blue-600/10 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-6 reveal text-center contact-perspective">
            <div class="mb-16">
                <h2 class="text-6xl font-black text-white uppercase mb-4 tracking-tighter">
                    Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Us</span>
                </h2>
                <p class="text-slate-500 uppercase tracking-[0.3em] text-[10px] font-bold">Initiate Communication Protocol
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST"
                class="glass-form-3d p-12 rounded-[4rem] text-left space-y-8 relative z-10">
                @csrf

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="input-group-3d">
                        <label class="text-[10px] font-black text-blue-400 uppercase tracking-widest ml-4 mb-2 block">Full
                            Name</label>
                        <input type="text" name="name" placeholder="Juan Dela Cruz" required
                            class="modern-input w-full rounded-2xl px-6 py-4 text-white outline-none">
                    </div>

                    <div class="input-group-3d">
                        <label
                            class="text-[10px] font-black text-blue-400 uppercase tracking-widest ml-4 mb-2 block">Contact
                            Number</label>
                        <input type="text" name="contact_number" placeholder="+63 900 000 0000" required
                            class="modern-input w-full rounded-2xl px-6 py-4 text-white outline-none">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="input-group-3d">
                        <label class="text-[10px] font-black text-blue-400 uppercase tracking-widest ml-4 mb-2 block">Email
                            Address</label>
                        <input type="email" name="email" placeholder="alexas@tech.com" required
                            class="modern-input w-full rounded-2xl px-6 py-4 text-white outline-none">
                    </div>

                    <div class="input-group-3d">
                        <label
                            class="text-[10px] font-black text-blue-400 uppercase tracking-widest ml-4 mb-2 block">Subject</label>
                        <input type="text" name="subject" placeholder="Project Inquiry" required
                            class="modern-input w-full rounded-2xl px-6 py-4 text-white outline-none">
                    </div>
                </div>

                <div class="input-group-3d">
                    <label class="text-[10px] font-black text-blue-400 uppercase tracking-widest ml-4 mb-2 block">Message
                        Details</label>
                    <textarea name="message" rows="4" placeholder="How can we help with your water systems?" required
                        class="modern-input w-full rounded-3xl px-6 py-4 text-white outline-none"></textarea>
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="btn-cyber w-full text-white font-black py-6 rounded-2xl uppercase tracking-widest text-sm">
                        Transmit Message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Horizontal Feedback Swiper
            new Swiper('.feedback-swiper', {
                slidesPerView: 1, spaceBetween: 30, loop: true, autoplay: { delay: 5000 },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 768: { slidesPerView: 2 } }
            });

            // Vertical Video Reel Swiper
            const videoSwiper = new Swiper('.vertical-video-swiper', {
                direction: 'vertical', slidesPerView: 1, spaceBetween: 0, mousewheel: true,
                pagination: { el: '.swiper-pagination', clickable: true },
                on: {
                    slideChange: function () {
                        const allVideos = document.querySelectorAll('.reel-video');
                        const isGlobalMuted = document.getElementById('global-mute-btn').classList.contains('is-unmuted') === false;

                        allVideos.forEach(v => v.pause());
                        const activeVideo = this.slides[this.activeIndex].querySelector('video');
                        if (activeVideo) {
                            activeVideo.muted = isGlobalMuted;
                            activeVideo.play();
                        }
                    }
                }
            });

            // Global Mute Toggle Logic
            const muteBtn = document.getElementById('global-mute-btn');
            const muteIcon = document.getElementById('mute-icon');

            muteBtn.addEventListener('click', function () {
                const allVideos = document.querySelectorAll('.reel-video');
                const activeSlide = document.querySelector('.swiper-slide-active video');

                if (muteBtn.classList.contains('is-unmuted')) {
                    // Mute all
                    allVideos.forEach(v => v.muted = true);
                    muteBtn.classList.remove('is-unmuted');
                    muteIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636" />';
                } else {
                    // Unmute all
                    allVideos.forEach(v => v.muted = false);
                    muteBtn.classList.add('is-unmuted');
                    muteIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />';
                }
            });

            handleReveal();
        });

        function handleReveal() {
            const reveals = document.querySelectorAll(".reveal");
            const windowHeight = window.innerHeight;
            reveals.forEach(el => {
                const elementTop = el.getBoundingClientRect().top;
                if (elementTop < windowHeight - 100) el.classList.add("active");
            });
        }
        window.addEventListener("scroll", handleReveal);
    </script>
@endsection