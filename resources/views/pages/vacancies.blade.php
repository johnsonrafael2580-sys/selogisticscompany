@extends('layouts.app')

@section('content')
<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 30s linear infinite;
    }
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

<div class="flex flex-col min-h-screen bg-white overflow-x-hidden">

    <!-- Hero Section -->
    <div class="relative h-[400px] md:h-[600px] flex items-center overflow-hidden bg-[#00234b]">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 w-2/3 h-full bg-custom-green opacity-10 skew-x-12 translate-x-32"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, #00ff96 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full" data-aos="fade-right">
            <div class="flex items-center space-x-4 mb-6">
                <div class="h-1 w-12 bg-custom-green"></div>
                <span class="text-custom-green font-black tracking-[0.5em] uppercase text-xs">Career Gateway</span>
            </div>
            <h1 class="text-white text-6xl md:text-9xl font-black italic tracking-tighter uppercase leading-[0.85]">
                Future <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-custom-green to-white">Talent</span>
            </h1>
            <p class="mt-8 text-white/70 font-bold uppercase tracking-[0.2em] text-xs max-w-md italic border-l-2 border-custom-green pl-4">
                Building the next generation of logistics excellence in East Africa.
            </p>
        </div>
        
        <div class="absolute -bottom-16 -right-10 text-white/[0.03] text-[250px] md:text-[400px] font-black italic select-none pointer-events-none">SEGL</div>
    </div>

    <!-- Main Content -->
    <section class="py-24 px-6 relative bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- Main Registry Card -->
                <div class="lg:col-span-8 bg-[#00234b] p-8 md:p-16 shadow-2xl relative overflow-hidden group" data-aos="fade-up">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-custom-green transform rotate-45 translate-x-16 -translate-y-16 transition-transform group-hover:scale-110"></div>
                    
                    <div class="relative z-10">
                        <h2 class="text-white text-4xl md:text-6xl font-black uppercase italic leading-none mb-8">
                            Vacancy <span class="text-custom-green underline decoration-8 underline-offset-4">Registry</span>
                        </h2>
                        
                        <div class="flex items-center mb-10">
                            <span class="bg-custom-green text-[#00234b] px-6 py-2 text-[11px] font-black uppercase italic tracking-widest shadow-xl">
                                Status: Zero Active Openings
                            </span>
                        </div>

                        <div class="bg-white p-8 md:p-12 border-l-[12px] border-custom-green shadow-2xl">
                            <p class="text-gray-800 font-bold text-lg leading-relaxed mb-10">
                                We are currently operating at peak efficiency with a full team. However, <span class="text-[#00234b]">SE Global Logistics</span> is a dynamic environment. We maintain a <span class="text-[#00234b] italic font-black uppercase">Priority Talent Pool</span> for upcoming port projects.
                            </p>

                            <a href="mailto:careers@segloballogistics.com" class="group relative inline-flex items-center focus:outline-none">
                                <div class="absolute inset-0 bg-[#00234b] transform -skew-x-12 translate-x-2 translate-y-2 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                <div class="relative bg-custom-green text-[#00234b] px-10 py-5 font-black italic uppercase transition-all transform -skew-x-12 border-2 border-custom-green group-hover:bg-[#00234b] group-hover:text-white">
                                    <span class="inline-block skew-x-12 tracking-widest flex items-center">
                                        Join the Talent Pool <i class="fas fa-paper-plane ml-4 group-hover:translate-x-2 transition-transform"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Stats -->
                <div class="lg:col-span-4 flex flex-col gap-8">
                    <div class="bg-white p-8 flex-1 border-b-8 border-[#00234b] shadow-xl group hover:bg-[#00234b] transition-all duration-500" data-aos="fade-left">
                        <h4 class="text-[#00234b] group-hover:text-custom-green font-black uppercase text-xs tracking-widest mb-12 transition-colors">Our Ecosystem</h4>
                        <div class="space-y-12">
                            <div>
                                <span class="block text-6xl font-black text-black group-hover:text-white italic leading-none transition-colors">2026</span>
                                <span class="text-[10px] font-black text-[#00234b] group-hover:text-custom-green/70 uppercase tracking-widest">Strategy Phase</span>
                            </div>
                            <div>
                                <span class="block text-6xl font-black text-black group-hover:text-white italic leading-none transition-colors">100%</span>
                                <span class="text-[10px] font-black text-[#00234b] group-hover:text-custom-green/70 uppercase tracking-widest">Safety Record</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-custom-green p-8 flex flex-col justify-between h-[240px] shadow-xl relative overflow-hidden" data-aos="fade-left" data-aos-delay="200">
                        <i class="fas fa-project-diagram absolute -right-4 -top-4 text-[#00234b] text-8xl opacity-10"></i>
                        <i class="fas fa-project-diagram text-[#00234b] text-4xl opacity-30"></i>
                        <div>
                            <h4 class="text-[#00234b] font-black uppercase text-2xl italic leading-none">Project <br>Consultancy</h4>
                            <div class="h-1.5 w-12 bg-[#00234b] mt-4 mb-3"></div>
                            <p class="text-[#00234b]/80 text-[11px] font-black uppercase tracking-widest">Bidding Status: <span class="underline decoration-2">Closed</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Banner -->
    <div class="bg-white py-14 overflow-hidden border-y-2 border-gray-100">
        <div class="animate-marquee opacity-20">
            @for ($i = 0; $i < 10; $i++)
            <div class="flex items-center space-x-12 px-6">
                <span class="text-black font-black italic uppercase text-3xl tracking-tighter">Excellence in Human Resources</span>
                <span class="text-[#00234b] font-black italic uppercase text-3xl tracking-tighter">SE Global Logistics</span>
            </div>
            @endfor
        </div>
    </div>
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