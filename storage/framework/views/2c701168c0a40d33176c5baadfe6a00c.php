<?php $__env->startSection('content'); ?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">

<style>
    :root {
        --custom-blue: #003366;
        --custom-green: #28a745;
        --dark-navy: #00234b;
        --pure-black: #000000;
    }
    body { font-family: 'Inter', sans-serif; background-color: #fff; }

    /* Hero Section */
    .hero-warehouse {
        position: relative;
        min-height: 75vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(rgba(0, 35, 75, 0.85), rgba(0, 35, 75, 0.85)), 
                    url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        text-align: center;
        padding: 60px 20px;
    }

    .hero-content { position: relative; z-index: 10; max-width: 900px; }

    /* Cards */
    .service-card {
        transition: all 0.4s ease;
        border: 1px solid #f0f0f0;
        background: #fff;
    }
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 30px rgba(0,0,0,0.05);
        border-color: var(--custom-green);
    }

    /* CTA Section Visibility Fix */
    .cta-banner {
        background-color: #f4f7f9; /* Rangi ya kijivu hafifu ili maandishi meusi yaonekane */
        border-top: 1px solid #dee2e6;
        padding: 80px 20px;
    }
</style>

<main>
    <!-- 1. HERO SECTION -->
    <section class="hero-warehouse">
        <div class="hero-content">
            <div class="inline-block px-6 py-2 border-2 border-custom-green text-custom-green text-xs font-black uppercase tracking-[0.4em] mb-8 bg-white/5 backdrop-blur-sm">
                Inventory Excellence
            </div>
            
            <h1 class="text-white text-5xl md:text-8xl font-black uppercase italic leading-none mb-8 tracking-tighter">
                Warehousing <br>
                <span class="text-custom-green not-italic">&</span> Distribution
            </h1>
            
            <p class="text-blue-100 text-lg md:text-2xl max-w-2xl mx-auto font-light leading-relaxed">
                Safe, secure, and strategically located storage solutions designed to optimize your supply chain.
            </p>
        </div>
    </section>

    <!-- 2. SERVICES GRID -->
    <section class="max-w-7xl mx-auto py-24 px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="service-card p-10 rounded-2xl text-center">
                <i class="fas fa-shield-alt text-5xl text-custom-blue mb-6"></i>
                <h4 class="font-black text-xl uppercase mb-4 text-dark-navy">Maximum Safety</h4>
                <p class="text-gray-500 italic">24/7 high-definition surveillance and advanced fire suppression systems.</p>
            </div>
            <div class="service-card p-10 rounded-2xl text-center">
                <i class="fas fa-map-marked-alt text-5xl text-custom-green mb-6"></i>
                <h4 class="font-black text-xl uppercase mb-4 text-dark-navy">Prime Location</h4>
                <p class="text-gray-500 italic">Located near major ports and borders for seamless transit and fast dispatch.</p>
            </div>
            <div class="service-card p-10 rounded-2xl text-center">
                <i class="fas fa-boxes text-5xl text-custom-blue mb-6"></i>
                <h4 class="font-black text-xl uppercase mb-4 text-dark-navy">Handling Experts</h4>
                <p class="text-gray-500 italic">Specialized teams trained in handling diverse cargo from bulk to sensitive items.</p>
            </div>
        </div>
    </section>

    <!-- 3. CALL TO ACTION (MAREKEBISHO YA RANGI HAPA) -->
    <section class="cta-banner">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Maandishi yawe Dark Navy ili yaonekane vizuri -->
            <h3 class="text-dark-navy text-3xl md:text-6xl font-black uppercase italic mb-6">
                Ready to secure your cargo?
            </h3>
            
            <p class="text-gray-700 text-lg md:text-xl mb-10 font-bold italic max-w-2xl mx-auto">
                Setting the global standard in logistics through integrity, speed, and innovation.
            </p>

            <!-- Kitufe kimekuwa cheusi kama ulivyoelekeza -->
            <a href="#contact" class="inline-block bg-black text-white px-14 py-5 font-black uppercase tracking-widest hover:bg-custom-green transition-all shadow-2xl transform hover:scale-105">
                Contact SE Logistics
            </a>
        </div>
    </section>
</main>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/pages/warehousing.blade.php ENDPATH**/ ?>