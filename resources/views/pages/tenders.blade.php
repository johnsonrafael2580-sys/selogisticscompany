@extends('layouts.app')

@section('content')
<div class="flex flex-col min-h-screen bg-[#f4f7f9]">

    <div class="relative h-[250px] md:h-[350px] flex items-center justify-center overflow-hidden bg-custom-blue">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[#001a35] opacity-80"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#00ff96 1px, transparent 1px), linear-gradient(90deg, #00ff96 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>

        <div class="relative z-10 text-center px-4" data-aos="fade-down">
            <span class="text-custom-green font-black tracking-[0.5em] uppercase text-[10px] mb-3 block">Procurement Portal</span>
            <h1 class="text-white text-5xl md:text-7xl font-black italic tracking-tighter uppercase">
                Active <span class="text-custom-green">Tenders</span>
            </h1>
            <div class="h-1.5 w-32 bg-custom-green mx-auto mt-6"></div>
        </div>
    </div>

    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
                <div class="border-l-4 border-custom-green pl-6">
                    <h2 class="text-black text-2xl font-black uppercase italic leading-none">Current Opportunities</h2>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest mt-2">Last Updated: May 08, 2026</p>
                </div>
                <div class="bg-white p-4 shadow-sm border border-gray-100 flex items-center space-x-6">
                    <div class="text-center">
                        <span class="block text-custom-blue font-black text-xl leading-none">01</span>
                        <span class="text-[9px] font-black uppercase text-gray-400">Open Bids</span>
                    </div>
                    <div class="h-8 w-px bg-gray-100"></div>
                    <div class="text-center">
                        <span class="block text-black font-black text-xl leading-none">00</span>
                        <span class="text-[9px] font-black uppercase text-gray-400">Closed</span>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.05)] overflow-hidden border-t-8 border-custom-blue">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <th class="p-8 text-black font-black uppercase text-xs tracking-tighter">Reference Number</th>
                                <th class="p-8 text-black font-black uppercase text-xs tracking-tighter">Tender Description</th>
                                <th class="p-8 text-black font-black uppercase text-xs tracking-tighter">Status</th>
                                <th class="p-8 text-black font-black uppercase text-xs tracking-tighter">Closing Date</th>
                                <th class="p-8 text-right text-black font-black uppercase text-xs tracking-tighter">Documentation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-custom-blue/[0.02] transition-colors group">
                                <td class="p-8">
                                    <span class="text-custom-blue font-black italic text-sm tracking-widest">SEGL/TND/2026/01</span>
                                </td>
                                <td class="p-8">
                                    <h4 class="text-black font-black uppercase text-sm mb-1">Supply of Heavy Duty Transport Vehicles</h4>
                                    <p class="text-gray-400 text-[10px] font-bold italic uppercase">Category: Fleet Logistics</p>
                                </td>
                                <td class="p-8">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-custom-green/10 text-custom-green text-[10px] font-black uppercase italic border border-custom-green/20">
                                        <span class="w-1.5 h-1.5 bg-custom-green rounded-full mr-2 animate-pulse"></span>
                                        Active
                                    </span>
                                </td>
                                <td class="p-8">
                                    <div class="flex flex-col">
                                        <span class="text-black font-black text-sm">May 25, 2026</span>
                                        <span class="text-red-500 text-[9px] font-black uppercase tracking-tighter mt-1">17 Days Remaining</span>
                                    </div>
                                </td>
                                <td class="p-8 text-right">
                                    <a href="#" class="inline-flex items-center space-x-3 bg-black hover:bg-custom-green text-white hover:text-black px-6 py-3 font-black italic uppercase text-[10px] transition-all transform group-hover:-translate-y-1 shadow-lg">
                                        <i class="fas fa-file-pdf"></i>
                                        <span class="tracking-widest">Download Bid Docs</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="bg-gray-50 p-6 border-t border-gray-100">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-info-circle text-custom-blue"></i>
                        <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wide">
                            All bids must be submitted electronically via <span class="text-custom-blue underline">tenders@segloballogistics.com</span> before 16:00 EAT on the closing date.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 border-l-4 border-gray-200">
                    <h5 class="text-black font-black uppercase text-xs mb-2">Ethics & Compliance</h5>
                    <p class="text-gray-400 text-xs leading-relaxed italic">
                        SE Global Logistics maintains a zero-tolerance policy towards corruption. Any attempt to influence the bidding process will lead to immediate disqualification.
                    </p>
                </div>
                <div class="bg-custom-blue p-8 flex items-center justify-between">
                    <div>
                        <h5 class="text-custom-green font-black uppercase text-xs mb-1 italic">Questions?</h5>
                        <p class="text-white text-[10px] font-bold uppercase">Contact our procurement office</p>
                    </div>
                    <i class="fas fa-headset text-white/20 text-3xl"></i>
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