<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE Global Logistics | Your Trusted Partner in Trade</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..1000;1,300..1000&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-blue': '#003366',
                        'custom-green': '#22C55E',
                    }
                }
            }
        }
    </script>

  <style>
    /* Fonti za Kiserikali (Inspired by Ministry of Water) */
    body { 
        font-family: 'Open Sans', sans-serif; 
        color: #333;
        line-height: 1.6;
    }

    /* Roboto Slab inaleta muonekano wa 'Seriousness' na 'Professionalism' kwenye vichwa vya habari */
    h1, h2, h3, h4, h5, h6 { 
        font-family: 'Roboto Slab', serif; 
        font-weight: 700;
        letter-spacing: -0.02em; /* Inafanya maneno yaonekane yameshibana vizuri */
    }

    /* Rangi ya Bluu ya Kiserikali (Deep Navy) */
    .hero-gradient { 
        background: linear-gradient(rgba(0, 31, 63, 0.92), rgba(0, 31, 63, 0.8)); 
    }

    /* Animation ya Menu */
    #mobile-menu { 
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1); 
    }
    .menu-open { 
        transform: translateX(0) !important; 
    }

    /* Kadi za Huduma - Smoother Elevation */
    .service-card:hover, .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        border-bottom: 4px solid #22C55E; /* Inaongeza msisitizo wa rangi ya kijani unapogusa */
    }

    /* Gallery */
    .gallery-item { 
        overflow: hidden; 
        position: relative; 
        border-radius: 8px; /* Curve kubwa kidogo kwa muonekano wa kisasa */
        cursor: pointer; 
    }
    .gallery-item img { 
        transition: transform 0.6s ease; 
    }
    .gallery-item:hover img { 
        transform: scale(1.08); 
    }
    
    /* Footer Links */
    .footer-link { 
        transition: all 0.3s ease; 
        display: inline-flex; 
        align-items: center; 
        font-weight: 500;
    }
    .footer-link:hover { 
        color: #22C55E; 
        transform: translateX(5px); 
    }

    /* Floating Animation kwa ajili ya Stats */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }
    .stat-card { 
        animation: float 5s ease-in-out infinite; 
        border: 1px solid rgba(0,0,0,0.05);
    }
    .stat-card:nth-child(even) { 
        animation-delay: 2.5s; 
    }

    /* Ziada: Italics kwa ajili ya Motto/Quotes */
    .motto-text {
        font-family: 'Roboto Slab', serif;
        font-style: italic;
        font-weight: 400;
    }
</style>
</head>
<body class="bg-white text-gray-900 overflow-x-hidden">

    <!-- Top Contact Bar -->
    <div class="bg-custom-blue text-white py-2 px-4 md:px-12 flex justify-between items-center text-[10px] font-bold fixed top-0 w-full z-[70]">
        <div class="flex space-x-4">
            <span><i class="fas fa-phone text-custom-green mr-1"></i> +255 756 883 238</span>
            <span class="hidden md:inline"><i class="fas fa-envelope text-custom-green mr-1"></i> segloballogisticsltd@gmail.com</span>
        </div>
        <div class="flex space-x-4">
            <a href="#" class="hover:text-custom-green"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/segloball_"><i class="hover:text-custom-green"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-custom-green"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

   <!-- Navigation -->

  <nav class="fixed w-full top-[34px] z-50 bg-white py-2 px-4 md:px-12 flex justify-between items-center shadow-lg">
    <div class="flex items-center">
        <a href="/" class="flex items-center">
            <img src="<?php echo e(asset('public/assets/images/logo.jpeg')); ?>" alt="SE Global Logistics" class="h-12 md:h-20 w-auto object-contain">
        </a>
    </div>

    <div class="hidden xl:flex items-center space-x-6 font-bold text-[10px] tracking-[0.15em] text-custom-blue">
        <a href="#" class="hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1">HOME</a>

        <div class="relative group">
            <button class="flex items-center hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">
                ABOUT <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
            </button>
            <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-2 border-custom-green z-[60]">
                <a href="/about/overview" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Overview</a>
                <a href="/about/management" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Management</a>
                <a href="/about/structure" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green">Organization Structure</a>
            </div>
        </div>

        <div class="relative group">
            <button class="flex items-center hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">
                SERVICES <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
            </button>
            <div class="absolute left-0 mt-0 w-56 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-2 border-custom-green z-[60]">
                <a href="/services/customs" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Customs Clearance</a>
                <a href="/services/freight" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Freight Forwarding</a>
                <a href="/services/warehousing" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green">Warehousing Solutions</a>
            </div>
        </div>

        <a href="#why-us" class="hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">WHY US</a>
        <a href="#customers" class="hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">CUSTOMERS</a>

        <div class="relative group">
            <button class="flex items-center hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">
                POLICY <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
            </button>
            <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-2 border-custom-green z-[60]">
                <a href="/policy/quality" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Quality Policy</a>
                <a href="/policy/safety" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Health & Safety</a>
                <a href="/policy/privacy" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green">Privacy Policy</a>
            </div>
        </div>

        <div class="relative group">
            <button class="flex items-center hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">
                NEWS & UPDATES <i class="fas fa-chevron-down ml-1 text-[8px]"></i>
            </button>
            <div class="absolute left-0 mt-0 w-48 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-2 border-custom-green z-[60]">
                <a href="/news/tenders" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Tenders</a>
                <a href="/gallery" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green border-b border-gray-100">Gallery</a>
                <a href="/news/vacancies" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-custom-green">Vacancies & Projects</a>
            </div>
        </div>

        <a href="#contact" class="hover:text-custom-green transition border-b-2 border-transparent hover:border-custom-green py-1 uppercase">CONTACT</a>

        <a href="/login" class="bg-custom-blue text-white px-5 py-2.5 rounded-sm text-[10px] font-black shadow-lg hover:bg-custom-green transition transform -skew-x-12">
            <span class="inline-block skew-x-12 uppercase italic">LOGIN</span>
        </a>
    </div>

    <button onclick="toggleMenu()" class="xl:hidden text-custom-blue p-2 focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
    </button>
</nav>
 <div id="mobile-menu" class="fixed inset-0 z-[100] bg-custom-blue/95 backdrop-blur-md transform translate-x-full xl:hidden transition-transform duration-500 ease-in-out">
    
    <div class="flex justify-between items-center p-6 border-b border-white/10">
        <img src="<?php echo e(asset('public/assets/images/logo.jpeg')); ?>" alt="Logo" class="h-10 w-auto">
        <button onclick="toggleMenu()" class="text-white hover:text-custom-green transition">
            <i class="fas fa-times text-3xl"></i>
        </button>
    </div>

    <div class="flex flex-col h-full overflow-y-auto pb-32 px-8 pt-6 space-y-4">
        
        <a href="/" onclick="toggleMenu()" class="text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green transition border-b border-white/5 pb-2">
            Home
        </a>

        <div class="border-b border-white/5 pb-2">
            <button onclick="toggleAccordion('mobile-about')" class="w-full flex justify-between items-center text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green">
                About Us <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobile-about" class="hidden flex-col mt-4 ml-4 space-y-3 border-l-2 border-custom-green pl-4">
                <a href="/about/overview" onclick="toggleMenu()" class="text-white/80 text-lg italic">Overview</a>
                <a href="/about/management" onclick="toggleMenu()" class="text-white/80 text-lg italic">Management</a>
                <a href="/about/structure" onclick="toggleMenu()" class="text-white/80 text-lg italic">Organization Structure</a>
            </div>
        </div>

        <div class="border-b border-white/5 pb-2">
            <button onclick="toggleAccordion('mobile-services')" class="w-full flex justify-between items-center text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green">
                Services <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobile-services" class="hidden flex-col mt-4 ml-4 space-y-3 border-l-2 border-custom-green pl-4">
                <a href="/services/customs" onclick="toggleMenu()" class="text-white/80 text-lg italic">Customs Clearance</a>
                <a href="/services/freight" onclick="toggleMenu()" class="text-white/80 text-lg italic">Freight Forwarding</a>
                <a href="/services/warehousing" onclick="toggleMenu()" class="text-white/80 text-lg italic">Warehousing Solutions</a>
            </div>
        </div>

        <a href="#why-us" onclick="toggleMenu()" class="text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green border-b border-white/5 pb-2">
            Why Us
        </a>
        
        <a href="#customers" onclick="toggleMenu()" class="text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green border-b border-white/5 pb-2">
            Customers
        </a>

        <div class="border-b border-white/5 pb-2">
            <button onclick="toggleAccordion('mobile-policy')" class="w-full flex justify-between items-center text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green">
                Policy <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobile-policy" class="hidden flex-col mt-4 ml-4 space-y-3 border-l-2 border-custom-green pl-4">
                <a href="/policy/quality" onclick="toggleMenu()" class="text-white/80 text-lg italic">Quality Policy</a>
                <a href="/policy/safety" onclick="toggleMenu()" class="text-white/80 text-lg italic">Health & Safety</a>
                <a href="/policy/privacy" onclick="toggleMenu()" class="text-white/80 text-lg italic">Privacy Policy</a>
            </div>
        </div>

        <div class="border-b border-white/5 pb-2">
            <button onclick="toggleAccordion('mobile-news')" class="w-full flex justify-between items-center text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green">
                News & Updates <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobile-news" class="hidden flex-col mt-4 ml-4 space-y-3 border-l-2 border-custom-green pl-4">
                <a href="/news/tenders" onclick="toggleMenu()" class="text-white/80 text-lg italic">Tenders</a>
                <a href="/gallery" onclick="toggleMenu()" class="text-white/80 text-lg italic">Gallery</a>
                <a href="/news/vacancies" onclick="toggleMenu()" class="text-white/80 text-lg italic">Vacancies & Projects</a>
            </div>
        </div>

        <a href="#contact" onclick="toggleMenu()" class="text-white text-xl font-bold italic uppercase tracking-widest hover:text-custom-green border-b border-white/5 pb-2">
            Contact
        </a>

        <div class="pt-6">
            <a href="/login" onclick="toggleMenu()" class="bg-custom-green text-custom-blue block text-center py-4 rounded-sm transform -skew-x-12 shadow-xl hover:bg-white transition-colors duration-300">
                <span class="inline-block skew-x-12 font-black uppercase text-xl">LOGIN</span>
            </a>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('translate-x-full');
        
        if (!menu.classList.contains('translate-x-full')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    function toggleAccordion(id) {
        const element = document.getElementById(id);
        const btn = element.previousElementSibling;
        const icon = btn.querySelector('.fa-chevron-down');
        
        // Funga accordions nyingine zilizowazi (Optional - kwa ajili ya usafi)
        // document.querySelectorAll('[id^="mobile-"]').forEach(el => {
        //     if(el.id !== id) el.classList.add('hidden');
        // });

        if (element.classList.contains('hidden')) {
            element.classList.remove('hidden');
            element.classList.add('flex');
            icon.style.transform = 'rotate(180deg)';
        } else {
            element.classList.add('hidden');
            element.classList.remove('flex');
            icon.style.transform = 'rotate(0deg)';
        }
    }
</script>

<style>
    #mobile-menu {
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    /* Hakikisha icon inazunguka vizuri */
    .fa-chevron-down {
        display: inline-block;
    }
</style>

        <!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center text-white pt-40 pb-20 overflow-hidden">
    <!-- Overlay Gradient kwa ajili ya kusoma maandishi vizuri -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent z-10"></div>
    
    <!-- Background Image -->
    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=2070" 
         class="absolute inset-0 w-full h-full object-cover" 
         alt="Logistics">
    
    <!-- Content Area -->
    <div class="relative z-20 text-center px-6 max-w-5xl" data-aos="zoom-out">
        <!-- Badge Juu -->
        <span class="bg-custom-green text-white px-6 py-2 transform -skew-x-12 text-[10px] md:text-xs font-black tracking-[0.2em] uppercase mb-8 inline-block shadow-lg">
            <span class="inline-block skew-x-12 italic">More Flexibility, More Coverage</span>
        </span>

        <!-- Main Heading -->
        <h1 class="text-4xl md:text-7xl font-black mb-6 leading-tight uppercase italic">
            YOUR TRUSTED <br> 
            <span id="typed-text" class="text-custom-green"></span>
        </h1>

        <!-- Subtext (Optional lakini inaleta muonekano mzuri) -->
        <p class="text-slate-200 text-sm md:text-lg mb-10 max-w-2xl mx-auto font-medium leading-relaxed">
            Leading the way in global logistics solutions with precision, speed, and reliability.
        </p>

      
</section>

<!-- Script ya Typed.js ili maandishi yajandike yenyewe -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#typed-text', {
        strings: ['PARTNER IN TRADE', 'LOGISTICS EXPERTS', 'FOWARDING PARTNER','CLEARING AGENT'],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true,
        backDelay: 2000
    });
</script>



    <!-- Stats Cards -->
    <div class="relative z-30 -mt-16 md:-mt-24 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="stat-card bg-white p-6 md:p-8 rounded-sm shadow-2xl text-center border-b-8 border-custom-blue hover:border-custom-green transition-colors duration-500" data-aos="fade-up">
                <h3 class="text-2xl md:text-4xl font-black text-custom-blue italic">100%</h3>
                <p class="text-[10px] uppercase font-black text-gray-500 mt-2 tracking-widest">On-Time Delivery</p>
            </div>
            <div class="stat-card bg-white p-6 md:p-8 rounded-sm shadow-2xl text-center border-b-8 border-custom-green hover:border-custom-blue transition-colors duration-500" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl md:text-4xl font-black text-custom-blue italic">GLOBAL</h3>
                <p class="text-[10px] uppercase font-black text-gray-500 mt-2 tracking-widest">Network Reach</p>
            </div>
            <div class="stat-card bg-white p-6 md:p-8 rounded-sm shadow-2xl text-center border-b-8 border-custom-blue hover:border-custom-green transition-colors duration-500" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl md:text-4xl font-black text-custom-blue italic">SECURE</h3>
                <p class="text-[10px] uppercase font-black text-gray-500 mt-2 tracking-widest">Cargo Handling</p>
            </div>
            <div class="stat-card bg-white p-6 md:p-8 rounded-sm shadow-2xl text-center border-b-8 border-custom-green hover:border-custom-blue transition-colors duration-500" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl md:text-4xl font-black text-custom-blue italic">24/7</h3>
                <p class="text-[10px] uppercase font-black text-gray-500 mt-2 tracking-widest">Client Support</p>
            </div>
        </div>
    </div>

   
    <!-- Services -->
    <section id="services" class="py-24 bg-gray-50 px-6 md:px-12">
        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-custom-blue text-4xl md:text-5xl font-black mb-4 uppercase italic">Our Core Services</h2>
            <div class="w-32 h-2 bg-custom-green mx-auto transform -skew-x-12"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <div class="service-card bg-white p-10 rounded-sm shadow-xl border-t-4 border-custom-blue transition-all" data-aos="fade-up">
                <div class="text-custom-green mb-6 text-4xl"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3 class="text-xl font-black text-custom-blue mb-4 uppercase italic">Customs Clearance</h3>
                <p class="text-gray-600 text-sm font-bold leading-relaxed">Expert handling of all port documentation and regulatory compliance to ensure swift cargo release.</p>
            </div>

            <div class="service-card bg-custom-blue p-10 rounded-sm shadow-xl text-white transform scale-105 z-10" data-aos="fade-up" data-aos-delay="100">
                <div class="text-custom-green mb-6 text-4xl"><i class="fas fa-ship"></i></div>
                <h3 class="text-xl font-black mb-4 uppercase italic">Freight Forwarding</h3>
                <p class="text-white/90 text-sm font-bold leading-relaxed">Seamless coordination of Sea, Air, and Land freight across major international trade routes.</p>
            </div>

            <div class="service-card bg-white p-10 rounded-sm shadow-xl border-t-4 border-custom-blue transition-all" data-aos="fade-up" data-aos-delay="200">
                <div class="text-custom-green mb-6 text-4xl"><i class="fas fa-warehouse"></i></div>
                <h3 class="text-xl font-black text-custom-blue mb-4 uppercase italic">Warehousing</h3>
                <p class="text-gray-600 text-sm font-bold leading-relaxed">Secure storage facilities and strategic distribution services for your inventory management.</p>
            </div>
        </div>
    </section>
     <!-- Why Choose Us -->
    <section class="py-24 px-6 md:px-12 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                
                <!-- Content Left -->
                <div class="lg:w-3/5" data-aos="fade-right">
                    <h2 class="text-custom-green text-3xl md:text-5xl font-black mb-10 uppercase italic tracking-tighter">
                        Why Choose Us
                    </h2>
                    
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Strategic location at Posta Samora for fast port access.</p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Experienced team with deep knowledge of customs procedures.</p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Strong network of international shipping partners.</p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Commitment to customer satisfaction and operational excellence.</p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base leading-relaxed">
                                We have offices at each border to facilitate clearance: 
                                <span class="text-custom-blue italic">HOLILI, HOROHORO, TUNDUMA, RUSUMU, MTUKULA, etc.</span>
                            </p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Fast clearance, clear communication, and safe cargo handling.</p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <i class="fas fa-check-circle text-custom-green mt-1 text-xl transition-transform group-hover:scale-125"></i>
                            <p class="text-gray-800 font-bold text-sm md:text-base">Competitive rates for all logistics scales.</p>
                        </li>
                    </ul>
                </div>

                <!-- Visuals Right -->
                <div class="lg:w-2/5 relative" data-aos="fade-left">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&q=80&w=800" 
                             alt="Logistics Transport" 
                             class="rounded-sm shadow-2xl border-r-8 border-custom-green transform hover:scale-105 transition-transform duration-500">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-custom-blue/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-custom-green/10 rounded-full blur-3xl"></div>
                </div>

            </div>
        </div>
    </section>
                                
                  <!-- Our Customers Section -->
    <section id="customers" class="py-24 px-6 md:px-12 bg-custom-blue text-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-black mb-4 uppercase italic">Our Customers</h2>
                <div class="w-24 h-2 bg-custom-green mx-auto transform -skew-x-12"></div>
                <p class="mt-8 text-white/80 max-w-3xl mx-auto font-bold italic leading-relaxed">
                    Our potential customers are companies to small business, private to state-owned companies that operate their business on both domestic and global scales.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Manufacturers -->
                <div class="bg-white/5 p-8 border-l-4 border-custom-green hover:bg-white/10 transition-all duration-300" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-industry text-custom-green text-3xl mr-4"></i>
                        <h3 class="text-xl font-black uppercase italic">Manufacturers</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed font-medium">
                        The original producers or factories that need to send products out to reach their target markets in both East Africa and other countries.
                    </p>
                </div>

                <!-- Wholesalers -->
                <div class="bg-white/5 p-8 border-l-4 border-custom-green hover:bg-white/10 transition-all duration-300" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-boxes-stacked text-custom-green text-3xl mr-4"></i>
                        <h3 class="text-xl font-black uppercase italic">Wholesalers</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed font-medium">
                        Companies that buy in large quantities from manufacturers and help distribute products to smaller businesses. With large warehouses and strong retailer networks, they are essential distribution partners.
                    </p>
                </div>

                <!-- Retailers -->
                <div class="bg-white/5 p-8 border-l-4 border-custom-green hover:bg-white/10 transition-all duration-300" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-store text-custom-green text-3xl mr-4"></i>
                        <h3 class="text-xl font-black uppercase italic">Retailers</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed font-medium">
                        Companies that purchase from wholesalers in smaller quantities to deliver products directly to end-users through their own store networks, increasing market coverage.
                    </p>
                </div>

                <!-- LSP -->
                <div class="bg-white/5 p-8 border-l-4 border-custom-green hover:bg-white/10 transition-all duration-300" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-handshake text-custom-green text-3xl mr-4"></i>
                        <h3 class="text-xl font-black uppercase italic">Logistics Providers (LSP)</h3>
                    </div>
                    <p class="text-sm text-white/70 leading-relaxed font-medium">
                        International logistics providers abroad that need a reliable third-party partner in Tanzania to assist with domestic distribution and local expertise.
                    </p>
                </div>
            </div>
        </div>
    </section>

 <!-- Swiper.js CSS (Weka hii ndani ya <head> yako kama haipo) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Gallery & Video Section -->
<section class="py-24 px-6 md:px-12 bg-custom-blue/5">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
            
            <!-- 1. Video Feature (Main Spotlight) -->
            <div class="lg:col-span-2 group relative rounded-sm overflow-hidden shadow-2xl h-[450px] bg-custom-blue" data-aos="zoom-in">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 z-10 opacity-30 pointer-events-none" 
                     style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 4px 4px;">
                </div>

                <!-- HTML5 Video -->
                <video autoplay loop muted playsinline 
                    class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:opacity-70 transition-opacity duration-1000 z-0">
                    <source src="https://cdn.pixabay.com/video/2016/09/21/5361-183764834_large.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Content Wrapper -->
                <div class="absolute inset-0 z-20 bg-gradient-to-t from-custom-blue via-custom-blue/40 to-transparent flex flex-col justify-end p-8 md:p-12">
                    <!-- Animated Badge -->
                    <div class="inline-flex items-center space-x-2 bg-custom-green/20 border border-custom-green/30 backdrop-blur-md px-3 py-1 rounded-full w-fit mb-6">
                        <span class="flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-custom-green opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-custom-green"></span>
                        </span>
                        <span class="text-custom-green text-[9px] font-black uppercase tracking-widest">Global Network Active</span>
                    </div>

                    <h3 class="text-white text-4xl md:text-6xl font-black uppercase italic leading-[0.9] tracking-tighter mb-6">
                        Moving <br> 
                        <span class="text-transparent" style="-webkit-text-stroke: 1px #22C55E;">World</span> Trade
                    </h3>

                    <div class="border-l-4 border-custom-green pl-6 py-2 max-w-lg">
                        <p class="text-white/80 text-sm font-bold italic leading-relaxed">
                            Our logistics infrastructure connects the dots between manufacturing and your doorstep, ensuring reliability in every mile.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2. Interactive Image Slider (Side) -->
            <div class="lg:col-span-1 h-[450px]" data-aos="fade-left">
                <div class="swiper mySwiper h-full rounded-sm shadow-2xl">
                    <div class="swiper-wrapper">
                        <!-- Slide 1: Port -->
                        <div class="swiper-slide relative">
                            <img src="<?php echo e(asset('public/assets/images/picha1.png')); ?>" alt="Port Clearance" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 bg-custom-blue/90 p-6 w-full z-10">
                                <p class="text-custom-green text-[10px] font-black uppercase tracking-widest mb-1">Step 01</p>
                                <h4 class="text-white text-lg font-black uppercase italic">SE SERVICES</h4>
                            </div>
                        </div>
                        <!-- Slide 2: Warehouse -->
                        <div class="swiper-slide relative">
                             <img src="<?php echo e(asset('public/assets/images/picha2.png')); ?>" alt="Smart Storage" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 bg-custom-green/90 p-6 w-full z-10">
                                <p class="text-custom-blue text-[10px] font-black uppercase tracking-widest mb-1">Step 02</p>
                                <h4 class="text-white text-lg font-black uppercase italic">SE SECURITY GUARD</h4>
                            </div>
                        </div>
                        <!-- Slide 3: Trucking -->
                        <div class="swiper-slide relative">
                             <img src="<?php echo e(asset('public/assets/images/picha3.png')); ?>" alt="Swift Transit" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 bg-custom-blue/90 p-6 w-full z-10">
                                <p class="text-custom-green text-[10px] font-black uppercase tracking-widest mb-1">Step 03</p>
                                <h4 class="text-white text-lg font-black uppercase italic">SE CARGOS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination z-20"></div>
                </div>
            </div>
        </div>

        <!-- 3. Bottom Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Item 1 -->
            <div class="h-64 group relative overflow-hidden rounded-sm shadow-xl border-b-4 border-custom-blue" data-aos="fade-up">
                 <img src="<?php echo e(asset('public/assets/images/picha3.png')); ?>" alt="Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-custom-blue/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-search-plus text-white text-3xl"></i>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="h-64 group relative overflow-hidden rounded-sm shadow-xl border-b-4 border-custom-green" data-aos="fade-up" data-aos-delay="100">
                 <img src="<?php echo e(asset('public/assets/images/picha4.png')); ?>" alt="Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-custom-green/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-search-plus text-white text-3xl"></i>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="h-64 group relative overflow-hidden rounded-sm shadow-xl border-b-4 border-custom-blue" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo e(asset('public/assets/images/picha5.png')); ?>" alt="Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-custom-blue/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-search-plus text-white text-3xl"></i>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="h-64 group relative overflow-hidden rounded-sm shadow-xl border-b-4 border-custom-green" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo e(asset('public/assets/images/picha7.png')); ?>" alt="Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-custom-green/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-search-plus text-white text-3xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>
             
        <!-- Project Logistics Section -->
<section id="project-logistics" class="py-24 px-6 md:px-12 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row items-stretch gap-16">
            
            <!-- Upande wa Maelezo -->
            <div class="lg:w-3/5" data-aos="fade-right">
                <h2 class="text-custom-green text-3xl md:text-5xl font-black mb-8 uppercase italic tracking-tighter">
                    Project Logistics
                </h2>
                
                <div class="space-y-6 text-gray-700 leading-relaxed font-medium">
                    <p class="text-lg">
                        Experience counts when it comes to handling complex projects and movements of oversized and heavylift cargoes. Managing complex transportation for large scale projects requires experienced, intelligent and knowledgeable personnel who are committed to researching all options, investigating each detail, surveying and identifying potential obstacles, physical and non-physical, and reacting to extraordinary circumstances with quick and decisive actions.
                    </p>
                    
                    <div class="border-l-4 border-custom-blue pl-6 py-2 bg-gray-50 italic">
                        <p>
                            Our approach is to break down project logistics and transport into essential elements, and then to assign direct supervision over each. 
                        </p>
                    </div>
                    
                    <p>
                        Advance trips by our Projects Operations Specialist to the key points in the project corridor ensure that <span class="text-custom-blue font-bold">SE Global Logistics</span> has the first-hand knowledge required to "make things happen". A Project Coordinator is then assigned to manage all facets of communication, logistics and transportation operations and becomes the direct liaison with the customer.
                    </p>
                </div>

                <!-- Baadhi ya icons za haraka -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10">
                    <div class="flex items-center space-x-3 text-custom-blue font-black text-[10px] uppercase">
                        <i class="fas fa-check-circle text-custom-green"></i>
                        <span>Oversized Cargo</span>
                    </div>
                    <div class="flex items-center space-x-3 text-custom-blue font-black text-[10px] uppercase">
                        <i class="fas fa-check-circle text-custom-green"></i>
                        <span>Heavy Lift</span>
                    </div>
                    <div class="flex items-center space-x-3 text-custom-blue font-black text-[10px] uppercase">
                        <i class="fas fa-check-circle text-custom-green"></i>
                        <span>Direct Liaison</span>
                    </div>
                </div>
            </div>

            <!-- Upande wa Picha/Visual -->
            <div class="lg:w-2/5 relative" data-aos="fade-left">
                <!-- Added 'group' and specific height classes to make the absolute image visible -->
                <div class="relative z-10 rounded-sm overflow-hidden shadow-2xl border-b-8 border-custom-green h-80 lg:h-full min-h-[450px] group">
                    <img src="<?php echo e(asset('public/assets/images/picha12.png')); ?>" alt="Port Clearance" class="absolute inset-0 w-full h-full object-cover">
                         alt="Project Logistics Operations" 
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                   
                
                <!-- Decorative element (Floating Box) -->
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-custom-blue/10 -z-0 pattern-dots"></div>
            </div>

        </div>
    </div>
</section>
     
      
<!-- Footer Section -->
<footer id="contact" class="relative z-50 w-full bg-[#00234b] text-white pt-24 pb-12 px-6 md:px-12 border-t-4 border-custom-green mt-auto"> 
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-20">
            
            <div class="space-y-8">
                <div class="inline-block bg-white p-3 rounded-sm shadow-xl">
                    <img src="<?php echo e(asset('public/assets/images/logo.jpeg')); ?>" alt="SE Global" class="h-20 w-auto object-contain">
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
                    <?php $__currentLoopData = ['NAMANGA', 'TUNDUMA', 'HOLILI', 'RUSUMU', 'MTUKULA', 'SIRARI']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $border): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center space-x-2 group cursor-default">
                        <div class="h-1.5 w-1.5 bg-custom-green rounded-full shadow-sm shadow-custom-green/50"></div>
                        <span class="text-[11px] font-black italic text-white/80 group-hover:text-custom-green transition-colors tracking-tighter"><?php echo e($border); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="pt-12 border-t border-white/10 mb-12">
            <h4 class="font-black text-custom-green uppercase mb-10 text-center text-[10px] tracking-[0.4em] opacity-70">Authorized & Regulated By</h4>
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-24">
                <div class="flex flex-col items-center group">
                    <img src="<?php echo e(asset('public/assets/images/tra_logo.png')); ?>" alt="TRA" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
                    <span class="text-[9px] font-bold mt-3 text-white/40 tracking-widest group-hover:text-white transition-colors">TRA CUSTOMS</span>
                </div>
                
                <div class="flex flex-col items-center group">
                    <img src="<?php echo e(asset('public/assets/images/tpa_logo.png')); ?>" alt="TPA" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
                    <span class="text-[9px] font-bold mt-3 text-white/40 tracking-widest group-hover:text-white transition-colors uppercase">Ports Authority</span>
                </div>

                <div class="flex flex-col items-center group">
                    <img src="<?php echo e(asset('public/assets/images/tasac_logo.png')); ?>" alt="TASAC" class="h-12 w-auto grayscale group-hover:grayscale-0 transition-all duration-500 hover:scale-105 transform">
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
    <!-- All Custom Styles -->
    <style>
        /* Sticky Footer Logic */
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        /* Hii inasukuma footer chini kabisa kama content ni kidogo */
        #contact {
            margin-top: auto;
        }

        /* Swiper Custom Pagination */
        .swiper-pagination-bullet-active {
            background: #22C55E !important; /* Rangi ya kijani ya custom-green */
            width: 25px !important;
            border-radius: 5px !important;
            transition: all 0.3s ease;
        }

        /* Mobile Menu Transition (Optional based on your JS) */
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }
        .menu-open {
            transform: translateX(0) !important;
        }
    </style>

    <!-- External Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Scripts -->
    <script>
        // Initialize AOS
        AOS.init({ once: true, duration: 1000, offset: 100 });

        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        // Toggle Mobile Menu
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('menu-open');
            
            if (menu.classList.contains('menu-open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        }
    </script>
</body>
</html><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/welcome.blade.php ENDPATH**/ ?>