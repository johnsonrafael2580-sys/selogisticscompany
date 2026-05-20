@extends('layouts.app')

@section('content')
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --custom-blue: #003366;
        --custom-green: #28a745;
    }
    body { font-family: 'Inter', sans-serif; }

    .hero-overlay-center {
        background: radial-gradient(circle, rgba(0, 51, 102, 0.85) 0%, rgba(0, 51, 102, 0.6) 100%);
    }

    .service-card {
        transition: all 0.3s ease;
    }

    .service-card:hover {
        border-color: var(--custom-green);
        background: white;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* Kuhakikisha button inaonekana na ina animation nzuri */
    .btn-quote {
        display: block;
        width: 100%;
        padding: 1rem;
        background-color: var(--custom-blue);
        color: white;
        text-align: center;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        border: 2px solid var(--custom-blue);
    }

    .btn-quote:hover {
        background-color: var(--custom-green);
        border-color: var(--custom-green);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(40, 167, 69, 0.2);
    }
</style>

<div class="flex flex-col min-h-screen bg-white">
    <!-- Hero Section -->
    <div class="relative h-[350px] md:h-[450px] flex items-center justify-center text-center overflow-hidden bg-custom-blue">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=2000" 
                 class="w-full h-full object-cover opacity-60" alt="Customs Clearance">
            <div class="absolute inset-0 hero-overlay-center"></div>
        </div>

        <div class="relative z-10 w-full max-w-4xl mx-auto px-6">
            <span class="text-custom-green font-bold tracking-[0.5em] uppercase text-xs md:text-sm mb-4 block">
                SE Global Logistics Solutions
            </span>
            <h1 class="text-white text-4xl md:text-7xl font-extrabold tracking-tight uppercase leading-tight">
                Customs <br>
                <span class="text-custom-green">Clearance</span>
            </h1>
            <div class="h-1.5 w-24 bg-custom-green mx-auto mt-8 rounded-full"></div>
        </div>
        
        <!-- Wave Divider -->
        <div class="absolute bottom-0 w-full leading-none z-20">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-[50px]">
                <path d="M1200 120L0 120 0 0C150 60 450 120 600 120C750 120 1050 60 1200 0V120Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="py-24 px-6 md:px-12 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                
                <!-- Left Side -->
                <div class="lg:col-span-7" data-aos="fade-right">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-1 bg-custom-green"></div>
                        <span class="text-custom-blue font-bold uppercase tracking-widest text-xs">Reliable Handling</span>
                    </div>
                    <h2 class="text-custom-blue text-3xl md:text-5xl font-extrabold mb-8 leading-tight">
                        Expert Customs <span class="text-custom-green">Compliance</span>
                    </h2>
                    
                    <p class="text-gray-600 leading-relaxed text-lg mb-10">
                        Navigating international trade requires <span class="text-custom-blue font-bold">strategic precision</span>. SE Global bridges the gap between global regulations and your supply chain, ensuring your goods clear borders with zero friction.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 service-card">
                            <i class="fas fa-check-double text-custom-green text-xl mb-4"></i>
                            <h4 class="font-bold text-custom-blue uppercase text-xs tracking-widest mb-2">Compliance</h4>
                            <p class="text-gray-500 text-sm">Full regulatory adherence for all cargo types.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 service-card">
                            <i class="fas fa-shipping-fast text-custom-blue text-xl mb-4"></i>
                            <h4 class="font-bold text-custom-blue uppercase text-xs tracking-widest mb-2">Efficiency</h4>
                            <p class="text-gray-500 text-sm">Rapid processing to avoid port storage costs.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side (Stats & Button) -->
                <div class="lg:col-span-5 space-y-8" data-aos="fade-left">
                    
                    <!-- 100% Card -->
                    <div class="bg-custom-blue p-10 rounded-2xl shadow-xl relative overflow-hidden group">
                        <div class="relative z-10 text-center">
                            <div class="text-custom-green text-6xl font-black mb-2">100%</div>
                            <p class="text-white font-bold uppercase text-xs tracking-[0.2em]">Accurate Documentation</p>
                        </div>
                        <i class="fas fa-file-invoice absolute -bottom-6 -right-6 text-white/10 text-9xl"></i>
                    </div>

                    <!-- CTA Box - Button is now very visible -->
                    <div class="bg-gray-50 border-2 border-dashed border-gray-200 p-10 rounded-2xl text-center">
                        <h4 class="text-custom-blue font-extrabold uppercase text-xl mb-6 tracking-tight">
                            Ready to Start <br><span class="text-custom-green">Your Shipment?</span>
                        </h4>
                        
                        <!-- Fixed Button -->
                        <div class="relative z-30">
                           <a href="{{ route('dashboard') }}" class="btn-quote inline-block">
                            Get a Quote Now
                           </a>
                           </div>
                            

                        
                        <div class="flex items-center justify-center space-x-4 mt-6">
                            <div class="h-[1px] w-8 bg-gray-300"></div>
                            <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Fast Response</span>
                            <div class="h-[1px] w-8 bg-gray-300"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
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