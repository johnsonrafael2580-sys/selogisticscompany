@extends('layouts.app')

@section('content')
<!-- Google Fonts & FontAwesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-blue: #003366;
        --brand-green: #22C55E;
        --ui-bg: #F8FAFC;
        --pure-white: #ffffff;
    }

    body { font-family: 'Inter', sans-serif; background-color: var(--ui-bg); }

    /* Hero Section */
    .safety-hero {
        position: relative;
        height: 450px;
        background: url('https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=2070');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .safety-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 51, 102, 0.5), var(--brand-blue));
    }

    .feature-card {
        background: var(--pure-white);
        border: 2px solid #e2e8f0;
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        border-color: var(--brand-green);
        box-shadow: 0 20px 25px -5px rgba(0, 51, 102, 0.1);
    }

    .section-title {
        font-weight: 900;
        letter-spacing: -0.05em;
        text-transform: uppercase;
        font-style: italic;
    }

    .icon-box {
        height: 60px;
        width: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 1.5rem;
        background-color: rgba(0, 51, 102, 0.05);
        color: var(--brand-blue);
    }
</style>

<div class="flex flex-col min-h-screen">

    <!-- HERO SECTION -->
    <div class="safety-hero">
        <div class="relative z-10 text-center max-w-4xl px-6">
            <span class="bg-brand-green/20 text-brand-green px-4 py-1 rounded text-xs font-black tracking-widest mb-4 inline-block">ISO 45001 STANDARDS</span>
            <h1 class="text-white text-5xl md:text-7xl section-title mb-6">
                HEALTH & <span class="text-brand-green">SAFETY</span>
            </h1>
            <p class="text-white text-lg md:text-xl font-medium max-w-2xl mx-auto">
                Our operations are built on a foundation of absolute protection and zero-compromise security protocols.
            </p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Intro Side -->
                <div class="lg:col-span-5">
                    <h2 class="text-brand-blue text-5xl section-title mb-8 leading-none">
                        Safety is not <br>
                        <span class="text-brand-green">Negotiable.</span>
                    </h2>
                    <p class="text-slate-700 text-lg leading-relaxed mb-8 font-medium">
                        At SE Global Logistics, we prioritize the physical integrity of our workforce and the absolute protection of your assets from receipt to delivery.
                    </p>
                    <div class="p-6 border-l-8 border-brand-green bg-white shadow-sm rounded-r-2xl">
                        <p class="text-brand-blue font-black italic">
                            "Our mission is to reach 'Zero Accidents' in every mile we cover."
                        </p>
                    </div>
                </div>

                <!-- Feature Grid -->
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div class="feature-card p-8">
                        <div class="icon-box">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3 class="text-xl font-black text-brand-blue uppercase italic mb-3">Staff Welfare</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Comprehensive health insurance, regular safety training, and mental wellness programs for our field operators.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="feature-card p-8">
                        <div class="icon-box">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3 class="text-xl font-black text-brand-blue uppercase italic mb-3">Cargo Security</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Advanced lashing techniques and impact-resistant handling protocols ensure your cargo remains pristine.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="feature-card p-8">
                        <div class="icon-box">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <h3 class="text-xl font-black text-brand-blue uppercase italic mb-3">SOP Adherence</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Strict Standard Operating Procedures (SOP) followed by every member of the logistics chain.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="feature-card p-8">
                        <div class="icon-box">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <h3 class="text-xl font-black text-brand-blue uppercase italic mb-3">Tech-Monitoring</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            24/7 AI-assisted monitoring of driver fatigue and vehicle health via real-time telemetry.
                        </p>
                    </div>
                </div>
            </div>

           <!-- STATISTICS FOOTER -->
<div class="mt-16 bg-brand-blue rounded-[32px] p-10 relative overflow-hidden shadow-2xl">
    <!-- Simple Geometric Pattern (White/Green) -->
    <div class="absolute top-0 right-0 w-32 h-full bg-brand-green opacity-20 skew-x-12"></div>

    <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
        <div>
            <!-- Green color applied here -->
            <h4 class="text-brand-green text-3xl font-black italic uppercase">Zero Accident Policy</h4>
            <p class="text-brand-green font-bold uppercase text-[10px] tracking-widest mt-2">
                Driven by Excellence, Protected by Standards
            </p>
        </div>

        <div class="flex gap-12">
            <div class="text-center">
                <!-- Green color applied to 100% and Compliant -->
                <span class="block text-brand-green text-5xl font-black italic">100%</span>
                <span class="text-brand-green text-[10px] font-black uppercase tracking-widest">Compliant</span>
            </div>
            <div class="text-center">
                <!-- Green color applied to 24/7 and Monitoring -->
                <span class="block text-brand-green text-5xl font-black italic">24/7</span>
                <span class="text-brand-green text-[10px] font-black uppercase tracking-widest">Monitoring</span>
            </div>
        </div>
    </div>
</div>
  </section>

<footer id="contact" class="relative z-50 w-full bg-[#00234b] text-white pt-24 pb-12 px-6 md:px-12 border-t-4 border-custom-green mt-auto"> 
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-20">
            
            <div class="space-y-8">
                <div class="inline-block bg-white p-3 rounded-sm shadow-xl">
                    <img src="{{ asset('public/assets/images/logo.jpeg') }}" alt="SE Global" class="h-20 w-auto object-contain">
                </div>
                <p class="text-white text-base font-bold italic leading-relaxed">
                    Setting the global standard in logistics through integrity, speed, and innovation.
                </p>
            </div>

            <div>
                <h4 class="font-black text-custom-green uppercase mb-8 text-sm tracking-widest border-b-2 border-white/20 pb-2 inline-block">Sitemap</h4>
                <ul class="space-y-4 text-sm font-black italic">
                    <li><a href="/" class="hover:text-custom-green transition-all flex items-center group"><span class="mr-2 group-hover:translate-x-1 transition-transform">›</span> HOME</a></li>
                    <li><a href="/about/overview" class="hover:text-custom-green transition-all flex items-center group"><span class="mr-2 group-hover:translate-x-1 transition-transform">›</span> ABOUT US</a></li>
                    <li><a href="/services/customs" class="hover:text-custom-green transition-all flex items-center group"><span class="mr-2 group-hover:translate-x-1 transition-transform">›</span> SERVICES</a></li>
                    <li><a href="/about/management" class="hover:text-custom-green transition-all flex items-center group"><span class="mr-2 group-hover:translate-x-1 transition-transform">›</span> LEADERSHIP</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-black text-custom-green uppercase mb-8 text-sm tracking-widest border-b-2 border-white/20 pb-2 inline-block">Contact Us</h4>
                <ul class="space-y-6 text-sm font-bold">
                    <li class="flex items-start space-x-4 italic text-base">
                        <i class="fas fa-map-marker-alt text-custom-green mt-1"></i>
                        <span>P.O.BOX 158 Himo, <br>Dar es Salaam, Tanzania.</span>
                    </li>
                    <li class="text-custom-green font-black flex items-center text-lg">
                        <i class="fas fa-phone mr-4"></i> +255 756 883 238
                    </li>
                    <li class="break-words text-white flex items-center text-[13px]">
                        <i class="fas fa-envelope mr-4 text-custom-green"></i> segloballogisticsltd@gmail.com
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-black text-custom-green uppercase mb-8 text-sm tracking-widest border-b-2 border-white/20 pb-2 inline-block">Border Operations</h4>
                <div class="grid grid-cols-2 gap-4">
                    @foreach(['NAMANGA', 'TUNDUMA', 'HOLILI', 'RUSUMU', 'MTUKULA', 'SIRARI'] as $border)
                    <div class="flex items-center space-x-2 group cursor-default">
                        <div class="h-1.5 w-1.5 bg-custom-green rounded-full shadow-sm shadow-custom-green/50"></div>
                        <span class="text-[11px] font-black italic text-white/80 group-hover:text-custom-green transition-colors tracking-tighter">{{ $border }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pt-12 border-t border-white/10 mb-12">
            <h4 class="font-black text-custom-green uppercase mb-10 text-center text-[10px] tracking-[0.4em] opacity-70">Authorized & Regulated By</h4>
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-24">
                <div class="flex flex-col items-center group">
                    <img src="{{ asset('public/assets/images/tra_logo.png') }}" alt="TRA" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
                    <span class="text-[9px] font-bold mt-3 text-white/40 tracking-widest group-hover:text-white transition-colors">TRA CUSTOMS</span>
                </div>
                
                <div class="flex flex-col items-center group">
                    <img src="{{ asset('public/assets/images/tpa_logo.png') }}" alt="TPA" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
                    <span class="text-[9px] font-bold mt-3 text-white/40 tracking-widest group-hover:text-white transition-colors uppercase">Ports Authority</span>
                </div>

                <div class="flex flex-col items-center group">
                    <img src="{{ asset('public/assets/images/tasac_logo.png') }}" alt="TASAC" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
                    <span class="text-[9px] font-bold mt-3 text-white/40 tracking-widest group-hover:text-white transition-colors uppercase">TASAC</span>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-8">
            <p class="text-white/50 text-[10px] md:text-[11px] font-black uppercase tracking-[0.3em] text-center md:text-left">
                &copy; 2026 SE GLOBAL LOGISTICS COMPANY LTD. ALL RIGHTS RESERVED.
            </p>
            <div class="flex space-x-8 text-white text-2xl">
                <a href="#" class="hover:text-custom-green hover:-translate-y-1 transition-all duration-300"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/segloball_" target="_blank" class="hover:text-custom-green hover:-translate-y-1 transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="hover:text-custom-green hover:-translate-y-1 transition-all duration-300"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</footer>

@endsection