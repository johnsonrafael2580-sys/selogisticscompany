@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

<style>
    :root {
        --custom-blue: #003366;
        --custom-green: #28a745;
    }
    body { font-family: 'Inter', sans-serif; }

    .hero-gradient {
        background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8));
    }

    .team-card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .team-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .image-circle {
        position: relative;
        z-index: 1;
    }

    .image-circle::after {
        content: '';
        position: absolute;
        inset: -5px;
        border: 2px solid var(--custom-green);
        border-radius: 50%;
        z-index: -1;
        opacity: 0;
        transition: 0.3s;
    }

    .team-card:hover .image-circle::after {
        opacity: 1;
        inset: -10px;
    }
</style>

<!-- Hero Section -->
<div class="relative h-[300px] md:h-[400px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('public/assets/images/picha13.png') }}" 
             alt="Management Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="relative z-10 text-center px-4">
        <span class="text-custom-green font-semibold tracking-widest uppercase text-sm mb-3 block">
            The Experts Behind Your Cargo
        </span>
        <h1 class="text-white text-4xl md:text-6xl font-extrabold uppercase tracking-tight">
            Our <span class="text-custom-green">Leadership</span>
        </h1>
        <div class="h-1.5 w-20 bg-custom-green mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- Professional Wave Divider -->
    <div class="absolute bottom-0 w-full leading-none z-20">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-[50px]">
            <path d="M1200 120L0 120 0 0C150 60 450 120 600 120C750 120 1050 60 1200 0V120Z" fill="#ffffff"></path>
        </svg>
    </div>
</div>

<!-- Management Section -->
<section id="management" class="py-24 px-6 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center mb-20">
            <h2 class="text-[#003366] text-3xl md:text-4xl font-extrabold mb-4">Dedicated Management Team</h2>
            <p class="text-gray-500 max-w-2xl mx-auto font-medium">
                Our leadership combines years of logistical expertise with a commitment to integrity and client satisfaction.
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            
            <!-- Managing Director -->
            <div class="team-card bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -z-10"></div>
                
                <div class="image-circle w-36 h-36 mx-auto mb-8">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                         alt="Lina Joseph Mshome" 
                         class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg bg-gray-50">
                </div>
                
                <h4 class="text-xl font-extrabold text-[#003366] mb-1">LINA JOSEPH MSHOME</h4>
                <p class="text-[#28a745] font-bold text-xs uppercase tracking-widest mb-6">Managing Director</p>
                <div class="w-10 h-1 bg-gray-200 mx-auto mb-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Visionary leader focused on making SE Global the #1 logistics partner in East Africa.
                </p>
            </div>

            <!-- Operations Team -->
            <div class="team-card bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-green-50 rounded-bl-full -z-10"></div>
                
                <div class="image-circle w-36 h-36 mx-auto mb-8">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                         alt="Operations" 
                         class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg bg-gray-50">
                </div>
                
                <h4 class="text-xl font-extrabold text-[#003366] mb-1">OPERATIONS TEAM</h4>
                <p class="text-[#28a745] font-bold text-xs uppercase tracking-widest mb-6">Logistics Experts</p>
                <div class="w-10 h-1 bg-gray-200 mx-auto mb-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dedicated specialists ensuring cargo moves through ports and borders with zero delay.
                </p>
            </div>

            <!-- Field Agents -->
            <div class="team-card bg-white rounded-2xl p-10 text-center border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -z-10"></div>
                
                <div class="image-circle w-36 h-36 mx-auto mb-8">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
                         alt="Field" 
                         class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg bg-gray-50">
                </div>
                
                <h4 class="text-xl font-extrabold text-[#003366] mb-1">FIELD AGENTS</h4>
                <p class="text-[#28a745] font-bold text-xs uppercase tracking-widest mb-6">Border Specialists</p>
                <div class="w-10 h-1 bg-gray-200 mx-auto mb-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Direct presence at Namanga, Tunduma, and Holili borders to inspect and clear your goods.
                </p>
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