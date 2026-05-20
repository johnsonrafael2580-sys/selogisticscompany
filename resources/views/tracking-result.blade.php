@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 py-12 px-4 font-sans">
    <div class="max-w-4xl mx-auto">
        
        <div class="flex items-center justify-between mb-8">
            <a href="{{ url('/') }}" class="group flex items-center text-navy font-bold hover:text-emerald transition-all">
                <div class="bg-white p-2 rounded-lg shadow-sm mr-3 group-hover:bg-emerald group-hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </div>
                GO BACK
            </a>
            <div class="flex items-center">
                <span class="relative flex h-3 w-3 mr-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald"></span>
                </span>
                <span class="text-navy font-black text-xs uppercase tracking-widest">Live System Status</span>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-navy/10 overflow-hidden border border-white">
            
            <div class="bg-navy p-10 text-white relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-emerald/10 rounded-full"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <p class="text-emerald font-bold text-xs uppercase tracking-[0.3em] mb-2">Verified Shipment</p>
                        <h2 class="text-4xl font-black tracking-tighter">{{ $shipment->tracking_number }}</h2>
                        <p class="text-slate-400 mt-1 text-sm">Last updated: {{ now()->format('d M, Y - H:i') }}</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/10 text-right">
                        <p class="text-slate-300 text-[10px] uppercase font-bold tracking-widest mb-1">Current Progress</p>
                        <span class="text-2xl font-black text-emerald">{{ strtoupper($shipment->status) }}</span>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-14">
                <div class="relative mb-20">
                    <div class="absolute left-0 top-5 w-full h-1.5 bg-slate-100 rounded-full"></div>
                    
                    @php
                        $width = '5%';
                        if($shipment->status == 'Pending') $width = '15%';
                        if($shipment->status == 'In Transit') $width = '55%';
                        if($shipment->status == 'Arrived at Port' || $shipment->status == 'Cleared') $width = '80%';
                        if($shipment->status == 'Delivered') $width = '100%';
                    @endphp
                    
                    <div class="absolute left-0 top-5 h-1.5 bg-emerald transition-all duration-1000 rounded-full shadow-[0_0_15px_rgba(16,185,129,0.5)]" style="width: {{ $width }}"></div>

                    <div class="relative z-10 flex items-center justify-between">
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-2xl {{ in_array($shipment->status, ['Pending', 'In Transit', 'Delivered', 'Arrived at Port', 'Cleared']) ? 'bg-emerald text-white shadow-lg shadow-emerald/30' : 'bg-white text-slate-300 border-2 border-slate-100' }} flex items-center justify-center transition-all duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                            </div>
                            <p class="mt-4 text-center text-[10px] font-black uppercase tracking-tighter {{ in_array($shipment->status, ['Pending', 'In Transit', 'Delivered']) ? 'text-navy' : 'text-slate-400' }}">Order<br>Processed</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-2xl {{ in_array($shipment->status, ['In Transit', 'Delivered', 'Arrived at Port', 'Cleared']) ? 'bg-emerald text-white shadow-lg shadow-emerald/30' : 'bg-white text-slate-300 border-2 border-slate-100' }} flex items-center justify-center transition-all duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <p class="mt-4 text-center text-[10px] font-black uppercase tracking-tighter {{ in_array($shipment->status, ['In Transit', 'Delivered']) ? 'text-navy' : 'text-slate-400' }}">On The<br>Way</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-2xl {{ $shipment->status == 'Delivered' ? 'bg-emerald text-white shadow-lg shadow-emerald/30' : 'bg-white text-slate-300 border-2 border-slate-100' }} flex items-center justify-center transition-all duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="mt-4 text-center text-[10px] font-black uppercase tracking-tighter {{ $shipment->status == 'Delivered' ? 'text-navy' : 'text-slate-400' }}">Successfully<br>Delivered</p>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-10 border-t border-slate-50">
                    
                    <div class="space-y-8">
                        <div>
                            <p class="text-slate-400 text-[10px] uppercase font-bold tracking-[0.2em] mb-2">Shipment For</p>
                            <p class="text-navy font-black text-xl">{{ $shipment->client_name ?? 'Valued Client' }}</p>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-slate-50 p-3 rounded-xl text-navy">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                            </div>
                            <div>
                                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Cargo Information</p>
                                <p class="text-navy font-bold">{{ $shipment->cargo_type ?? 'General Cargo' }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-emerald/5 p-3 rounded-xl text-emerald">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Transit Route</p>
                                <p class="text-navy font-bold flex items-center">
                                    {{ $shipment->origin }} 
                                    <svg class="w-4 h-4 mx-2 text-emerald" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    {{ $shipment->destination }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-navy/5 p-8 rounded-[2rem] border border-navy/5">
                        <div class="mb-8">
                            <p class="text-slate-500 text-[10px] uppercase font-bold tracking-widest mb-2">Live Location</p>
                            <div class="flex items-center text-navy">
                                <div class="bg-white p-2 rounded-lg shadow-sm mr-3">
                                    <svg class="w-5 h-5 text-emerald" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                </div>
                                <span class="text-xl font-black tracking-tight">{{ $shipment->current_location ?? 'Scanning...' }}</span>
                            </div>
                        </div>

                        <div>
                            <p class="text-slate-500 text-[10px] uppercase font-bold tracking-widest mb-2">Expected Arrival</p>
                            <div class="flex items-center text-navy font-black text-lg">
                                <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $shipment->estimated_delivery ? \Carbon\Carbon::parse($shipment->estimated_delivery)->format('d M, Y') : 'Processing...' }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bg-slate-50 p-6 text-center border-t border-slate-100">
                <p class="text-slate-400 text-xs font-medium">
                    Questions? Contact Global Logistics Support: 
                    <span class="text-navy font-bold ml-1">+255 700 000 000</span>
                </p>
            </div>
        </div>

        <div class="mt-8 flex justify-center gap-4">
            <button onclick="window.print()" class="bg-white text-navy px-6 py-3 rounded-xl font-bold text-sm shadow-sm hover:shadow-md transition-all flex items-center border border-slate-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                PRINT RECEIPT
            </a>
        </div>
    </div>
</div>
@endsection