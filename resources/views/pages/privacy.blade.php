@extends('layouts.app')

@section('content')
<!-- Google Fonts & FontAwesome -->
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;700;900&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-blue: #003366;
        --brand-green: #22C55E;
        --pure-white: #ffffff;
        --soft-bg: #f0f4f8;
    }

    body { font-family: 'Inter', sans-serif; background-color: var(--soft-bg); }

    /* Modern Hero with Background Image */
    .hero-split {
        position: relative;
        padding: 120px 0;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);
        background-color: var(--brand-blue); /* Fallback */
        background-image: url('https://images.unsplash.com/photo-1520986606214-8b456906c813?q=80&w=2070&auto=format&fit=crop'); /* Logistics Port/Ship Image */
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Parallax effect */
    }

    /* Dark Overlay to make text pop */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 51, 102, 0.95) 0%, rgba(0, 26, 53, 0.8) 100%);
        z-index: 1;
    }

    .hero-pattern {
        position: absolute;
        inset: 0;
        opacity: 0.1;
        z-index: 2;
        background-image: radial-gradient(var(--brand-green) 1px, transparent 1px);
        background-size: 30px 30px;
    }

    /* Rest of your existing styles */
    .sidebar-sticky {
        background: var(--pure-white);
        border-radius: 24px;
        border: 1px solid rgba(0, 51, 102, 0.1);
        overflow: hidden;
    }

    .status-pill {
        background: rgba(34, 197, 94, 0.1);
        color: var(--brand-green);
        padding: 4px 12px;
        border-radius: 99px;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }

    .content-box {
        background: var(--pure-white);
        border-radius: 24px;
        padding: 60px;
        box-shadow: 0 20px 50px rgba(0, 32, 64, 0.05);
    }

    .section-title {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        letter-spacing: -1px;
        color: var(--brand-blue);
    }

    .data-grid-item {
        border: 2px solid var(--soft-bg);
        border-radius: 16px;
        transition: all 0.3s ease;
    }

    .data-grid-item:hover {
        border-color: var(--brand-green);
        transform: translateY(-5px);
    }

    .accent-quote {
        background: var(--brand-green);
        border-radius: 20px;
        position: relative;
    }

    h1, h2 { text-transform: uppercase; font-style: italic; font-weight: 900; }
</style>

<div class="min-h-screen pb-20">
    <!-- HERO SECTION WITH BACKGROUND IMAGE -->
    <div class="hero-split">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                <div class="w-2 h-2 bg-brand-green rounded-full animate-pulse"></div>
                <span class="text-white text-[10px] font-black uppercase tracking-[0.3em]">Corporate Compliance</span>
            </div>
            <h1 class="text-white text-5xl md:text-8xl mb-4 drop-shadow-lg">
                Privacy <span class="text-brand-green">Protocol</span>
            </h1>
            <p class="text-white/80 font-medium max-w-2xl mx-auto text-lg">
                Secure data management procedures for global cargo operations.
            </p>
        </div>
    </div>

    <!-- MAIN INTERFACE -->
    <div class="max-w-7xl mx-auto px-6 -mt-16 relative z-30">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- SIDEBAR -->
            <div class="lg:col-span-4">
                <div class="sticky top-8 space-y-6">
                    <div class="sidebar-sticky p-8 shadow-xl">
                        <div class="flex items-center justify-between mb-8">
                            <h4 class="text-brand-blue font-black text-xs uppercase tracking-tighter">Document Info</h4>
                            <span class="status-pill">Active</span>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex flex-col">
                                <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest">Version</span>
                                <span class="text-brand-blue font-black">2026 / 1.0.4</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest">System Integrity</span>
                                <span class="text-brand-green font-black italic uppercase">Secure / Encrypted</span>
                            </div>
                            <div class="pt-6 border-t border-gray-100">
                                <span class="text-gray-400 text-[10px] uppercase font-bold tracking-widest">Authorized By</span>
                                <p class="text-brand-blue text-xs font-bold mt-1 uppercase">SE Global Legal Directorate</p>
                            </div>
                        </div>
                    </div>

                    <!-- THE BLUE QUOTE BOX ON GREEN -->
                    <div class="accent-quote p-8 shadow-2xl">
                        <div class="mb-4">
                            <i class="fas fa-quote-left text-brand-blue/20 text-4xl"></i>
                        </div>
                        <p class="text-brand-blue font-black italic text-lg leading-snug">
                            "Our commitment to data integrity is as strong as our commitment to cargo security."
                        </p>
                    </div>
                </div>
            </div>

            <!-- CONTENT BODY -->
            <div class="lg:col-span-8">
                <div class="content-box">
                    <div class="mb-12">
                        <h2 class="section-title text-4xl mb-6">01. <span class="text-brand-green">Overview</span></h2>
                        <p class="text-slate-600 leading-relaxed text-lg font-medium">
                            At SE Global Logistics, we value your privacy. This policy outlines how we handle your personal information and ensure it remains secure during our logistics operations. We implement <span class="text-brand-blue font-bold border-b-2 border-brand-green">rigorous technical and organizational measures</span> to safeguard your data.
                        </p>
                    </div>

                    <div class="mb-12">
                        <h2 class="section-title text-4xl mb-8">02. <span class="text-brand-green">Collection</span></h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach([
                                'Consignee Names & Addresses' => 'fa-map-marker-alt',
                                'Contact Identification' => 'fa-id-badge',
                                'Customs Tax ID Details' => 'fa-file-invoice-dollar',
                                'Logistics Tracking Data' => 'fa-route'
                            ] as $label => $icon)
                            <div class="data-grid-item p-6 flex items-start gap-5">
                                <div class="w-12 h-12 bg-brand-blue flex items-center justify-center rounded-xl shrink-0 shadow-lg">
                                    <i class="fas {{ $icon }} text-brand-green"></i>
                                </div>
                                <div>
                                    <h5 class="text-brand-blue font-black text-[11px] uppercase tracking-wider mb-1">{{ $label }}</h5>
                                    <p class="text-gray-400 text-[10px] font-bold italic uppercase">Secure Log</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="border-2 border-brand-blue rounded-[30px] p-8 relative overflow-hidden bg-brand-blue/5">
                        <div class="absolute -top-10 -right-10 opacity-5">
                            <i class="fas fa-shield-check text-brand-blue text-[200px]"></i>
                        </div>
                        
                        <div class="relative z-10">
                            <h2 class="section-title text-4xl mb-4">03. <span class="text-brand-green">Security</span></h2>
                            <p class="text-slate-600 font-medium leading-relaxed mb-8 pr-12">
                                Your data is protected using industry-standard encryption (AES-256) and strict internal access controls. Data is never sold; it is only shared with authorized government agencies (TRA, TPA) for legal clearance.
                            </p>
                            
                            <div class="flex flex-col md:flex-row gap-6 items-center border-t border-brand-blue/10 pt-8">
                                <div class="flex -space-x-2">
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-brand-blue flex items-center justify-center text-brand-green text-[10px] font-black">TRA</div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-brand-blue flex items-center justify-center text-brand-green text-[10px] font-black">TPA</div>
                                    <div class="w-10 h-10 rounded-full border-2 border-white bg-brand-green flex items-center justify-center text-brand-blue text-xs shadow-lg">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <p class="text-brand-blue font-black text-[10px] uppercase tracking-[0.2em]">
                                    Compliance-Verified Data Pipeline
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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