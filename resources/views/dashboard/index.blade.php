@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-50">
    
    <!-- Main Content Area -->
    <main class="flex-1 p-6 md:p-12">
        <div class="max-w-6xl mx-auto">
            
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 space-y-4 md:space-y-0">
                <div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-[#003366] uppercase tracking-tight">
                        Client <span class="text-[#28a745]">Dashboard</span>
                    </h1>
                    <p class="text-gray-500 text-sm font-medium">Karibu tena, hapa unaweza kufuatilia mizigo yako.</p>
                </div>
                
                <!-- Action Button -->
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 bg-[#28a745] text-white font-bold rounded-xl hover:bg-[#218838] transition-all shadow-md group">
                    <i class="fas fa-plus-circle mr-2 group-hover:rotate-90 transition-transform"></i>
                    Request New Quote
                </a>
            </div>

            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <!-- Stat 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Active Shipments</p>
                            <h3 class="text-2xl font-black text-[#003366]">04</h3>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 text-[#003366] rounded-xl flex items-center justify-center">
                            <i class="fas fa-ship"></i>
                        </div>
                    </div>
                </div>
                <!-- Stat 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Pending Quotes</p>
                            <h3 class="text-2xl font-black text-[#003366]">02</h3>
                        </div>
                        <div class="w-12 h-12 bg-green-50 text-[#28a745] rounded-xl flex items-center justify-center">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
                <!-- Stat 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-1">Completed</p>
                            <h3 class="text-2xl font-black text-[#003366]">12</h3>
                        </div>
                        <div class="w-12 h-12 bg-gray-50 text-gray-400 rounded-xl flex items-center justify-center">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Shipments Table -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-50 flex items-center justify-between">
                    <h4 class="font-extrabold text-[#003366] uppercase text-sm tracking-widest">Recent Activity</h4>
                    <button class="text-[#28a745] text-xs font-bold hover:underline">View All</button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 text-gray-400 text-[10px] uppercase font-bold tracking-[0.2em]">
                            <tr>
                                <th class="px-6 py-4">Reference ID</th>
                                <th class="px-6 py-4">Cargo Details</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4 font-bold text-[#003366] text-sm">#SEG-8821</td>
                                <td class="px-6 py-4">
                                    <span class="block text-sm font-bold text-gray-700">Electronics Spare Parts</span>
                                    <span class="text-[10px] text-gray-400 uppercase font-medium italic">Dubai to Dar es Salaam</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-[#003366] text-[10px] font-black uppercase rounded-full">In Transit</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="p-2 text-gray-400 hover:text-[#003366]"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4 font-bold text-[#003366] text-sm">#SEG-7740</td>
                                <td class="px-6 py-4">
                                    <span class="block text-sm font-bold text-gray-700">Industrial Machinery</span>
                                    <span class="text-[10px] text-gray-400 uppercase font-medium italic">China to Mwanza</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-[10px] font-black uppercase rounded-full">Clearing</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="p-2 text-gray-400 hover:text-[#003366]"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</div>

<style>
    /* Styling kidogo ya kurekebisha dashboard ionekane kama App */
    body {
        background-color: #f9fafb;
    }
</style>
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