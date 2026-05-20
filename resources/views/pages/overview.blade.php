@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

<style>
    :root {
        --custom-blue: #003366;
        --custom-green: #28a745;
    }
    body { font-family: 'Inter', sans-serif; }
    .hero-gradient { background: linear-gradient(rgba(0, 51, 102, 0.85), rgba(0, 51, 102, 0.85)); }
    .stat-card { transition: all 0.3s ease; border-left: 4px solid transparent; }
    .stat-card:hover { transform: translateY(-5px); border-left: 4px solid var(--custom-green); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
</style>

<!-- Hero Section Dynamic -->
<div class="relative h-[400px] md:h-[500px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        {{-- Picha inatoka kwenye database au default kama haipo --}}
        <img src="{{ asset($company->hero_image ?? 'public/assets/images/picha14.png') }}" 
             alt="Logistics Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="relative z-10 text-center px-4 max-w-4xl">
        <span class="text-custom-green font-semibold tracking-widest uppercase text-sm mb-4 block">
            {{ $company->tagline ?? 'Reliable Clearing & Forwarding' }}
        </span>
        <h1 class="text-white text-4xl md:text-6xl font-extrabold leading-tight mb-6">
            {{ $company->name ?? 'SE Global Logistics' }} <br> 
            <span class="text-custom-green">{{ $page_title ?? 'Company Overview' }}</span>
        </h1>
        <div class="h-1 w-20 bg-custom-green mx-auto rounded-full"></div>
    </div>

    <div class="absolute bottom-0 w-full leading-none z-20">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-[60px]">
            <path d="M1200 120L0 120 0 0C150 60 450 120 600 120C750 120 1050 60 1200 0V120Z" fill="#ffffff"></path>
        </svg>
    </div>
</div>

<!-- About Section Dynamic -->
<section id="about" class="py-24 px-6 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20 items-center">
        
        <div class="lg:w-1/2">
            <h2 class="text-[#003366] text-3xl md:text-4xl font-extrabold mb-6">
                {{ $about->title ?? 'Redefining Logistics' }}
            </h2>
            <p class="text-gray-600 text-lg mb-10 leading-relaxed border-l-4 border-[#28a745] pl-6 bg-gray-50 py-4">
                {{ $about->description ?? 'Maelezo ya kampuni hapa...' }}
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Mission Card --}}
                <div class="stat-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm">
                    <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-4 text-[#003366]">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="font-bold text-[#003366] uppercase text-sm mb-2">Our Mission</h4>
                    <p class="text-sm text-gray-500 leading-snug">{{ $company->mission }}</p>
                </div>

                {{-- Vision Card --}}
                <div class="stat-card bg-white p-6 rounded-lg border border-gray-100 shadow-sm">
                    <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center mb-4 text-[#28a745]">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="font-bold text-[#003366] uppercase text-sm mb-2">Our Vision</h4>
                    <p class="text-sm text-gray-500 leading-snug">{{ $company->vision }}</p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 relative">
            <div class="relative overflow-hidden rounded-2xl shadow-xl">
                <img src="{{ asset($about->image ?? 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d') }}" 
                     class="w-full h-[500px] object-cover" 
                     alt="Operations">
                <div class="absolute inset-0 bg-gradient-to-t from-[#003366]/60 to-transparent"></div>
            </div>

            <!-- Floating Values Loop -->
            <div class="absolute -bottom-6 -right-6 md:right-10 bg-white p-8 rounded-xl shadow-2xl border-t-4 border-[#28a745] w-full max-w-[280px]">
                <h5 class="text-[#003366] font-extrabold text-xl mb-6">Core Values</h5>
                <ul class="space-y-4">
                    @forelse($values as $value)
                        <li class="flex items-center text-gray-700 font-semibold text-sm">
                            <span class="w-2 h-2 bg-[#28a745] rounded-full mr-3"></span> 
                            {{ strtoupper($value->name) }}
                        </li>
                    @empty
                        <li class="text-gray-400">Hakuna value zilizowekwa.</li>
                    @endforelse
                </ul>
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
                    
                    
                    
                    
                 