<?php $__env->startSection('content'); ?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto+Slab:wght@400;700;900&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-blue: #003366;
        --brand-green: #22C55E;
        --pure-white: #ffffff;
        --soft-blue: #f0f4f8;
    }

    body { 
        font-family: 'Open Sans', sans-serif; 
        color: var(--brand-blue); 
        line-height: 1.6;
        background-color: var(--pure-white);
    }

    h1, h2, h3, h4, h5, h6 { 
        font-family: 'Roboto Slab', serif; 
        font-weight: 700;
    }

    /* 1. HERO SECTION STYLES */
    .hero-quality-redesign {
        position: relative;
        height: 550px;
        display: flex;
        align-items: center;
        background: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .hero-overlay-blue {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0, 51, 102, 0.95) 30%, rgba(0, 51, 102, 0.4) 100%);
        z-index: 1;
    }

    .hero-container {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .hero-tagline {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: var(--brand-green);
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 0.85rem;
        margin-bottom: 1.5rem;
    }

    .hero-line {
        height: 2px;
        width: 40px;
        background-color: var(--brand-green);
    }

    .hero-title-main {
        color: var(--pure-white);
        font-size: clamp(2.5rem, 6vw, 4rem);
        line-height: 1.1;
        font-weight: 900;
        margin-bottom: 1.5rem;
    }

    .hero-accent-text {
        color: var(--brand-green);
        font-style: italic;
    }

    .hero-sub-para {
        max-width: 550px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        font-weight: 500;
        border-left: 3px solid var(--brand-green);
        padding-left: 1.5rem;
        margin-bottom: 2rem;
    }

    /* 2. BUTTON STYLE */
    .btn-logistics {
        background-color: var(--brand-green);
        color: var(--pure-white);
        padding: 1rem 2.5rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 2px solid var(--brand-green);
        transition: all 0.4s ease;
        display: inline-block;
        text-decoration: none;
    }

    .btn-logistics:hover {
        background-color: transparent;
        color: var(--brand-green);
        transform: translateY(-3px);
    }

    /* 3. CONTENT STYLES */
    .policy-card {
        background: var(--pure-white);
        border: 1px solid var(--soft-blue);
        border-top: 5px solid var(--brand-green);
    }

    .solution-box {
        background: var(--brand-blue);
        color: var(--pure-white);
        border-radius: 4px;
        position: relative;
    }

    .fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<main>
    <!-- HERO SECTION -->
    <section class="hero-quality-redesign">
        <div class="hero-overlay-blue"></div>
        
        <div class="hero-container">
            <div class="fade-in-up">
                <div class="hero-tagline">
                    <span class="hero-line"></span>
                    <span>International Standards</span>
                </div>

                <h1 class="hero-title-main">
                    Committed to <br>
                    <span class="hero-accent-text">Unrivaled Quality</span>
                </h1>

                <p class="hero-sub-para">
                    Instilling excellence as a daily habit. We provide world-class logistics solutions 
                    driven by a compact and dedicated professional team.
                </p>

                <div class="mt-8">
                   <a href="<?php echo e(route('compliance.index')); ?>" class="btn-logistics">
                   Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                   </a>
                </div>
            </div>
        </div>

        <!-- Decorative Award Icon -->
        <div class="absolute bottom-10 right-10 z-10 hidden lg:block opacity-20">
            <i class="fas fa-award text-white text-9xl"></i>
        </div>
    </section>

    <!-- MAIN CONTENT SECTION -->
    <section id="quality-policy" class="py-24 px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <!-- Quality Policy Column -->
                <div class="space-y-8">
                    <div class="inline-block">
                        <h2 class="text-3xl md:text-4xl font-black uppercase italic text-brand-blue">
                            Our Quality Policy
                        </h2>
                        <div class="h-1.5 w-full bg-brand-green mt-2"></div>
                    </div>

                    <p class="text-lg font-semibold text-gray-600 italic leading-relaxed border-l-4 border-brand-green pl-6">
                        SE GLOBAL LOGISTICS is committed to being at the forefront of Quality Management. We instil the quality policy to be our daily habits so that Logistics service can be provided as a result of a compact working team.
                    </p>

                    <div class="policy-card p-8 rounded-lg shadow-lg">
                        <h4 class="text-brand-green font-black uppercase text-sm mb-6 flex items-center">
                            <i class="fas fa-bullseye mr-2"></i> Key Objectives
                        </h4>
                        <ul class="space-y-5">
                            <li class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-brand-green mt-1"></i>
                                <span class="font-bold text-brand-blue">Understanding Customer Requirements</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-brand-green mt-1"></i>
                                <span class="font-bold text-brand-blue">Empowering Professional Employees</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-brand-green mt-1"></i>
                                <span class="font-bold text-brand-blue">Continuous Process Improvement</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- One-Stop Solution Column -->
                <div class="solution-box p-10 md:p-14 shadow-2xl overflow-hidden self-start">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <i class="fas fa-ship text-9xl"></i>
                    </div>
                    
                    <h2 class="text-white text-3xl font-black uppercase italic mb-8 flex items-center relative z-10">
                        <i class="fas fa-globe-africa mr-4 text-brand-green"></i>
                        One-Stop Solution
                    </h2>

                    <div class="space-y-6 relative z-10">
                        <p class="text-blue-100 font-medium text-lg leading-relaxed">
                            Whether you are looking to relocate goods across the region or move an offshore drilling platform across the seas, SE Global Logistics has the capability and expertise to make it happen.
                        </p>
                        
                        <div class="bg-white/10 p-6 rounded border border-white/20 italic">
                            <p class="text-white font-bold">
                                "You get personalized service at every level because we are truly independent and specialized in our home market."
                            </p>
                        </div>

                        <div class="pt-8">
                            <a href="#contact" class="btn-logistics border-white bg-transparent hover:bg-white hover:text-brand-blue">
                                Contact Our Team
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aspirations Tagline Section -->
            <div class="mt-24 border-t-2 border-soft-blue pt-12">
                <div class="flex flex-wrap justify-center gap-6 md:gap-12">
                    <?php $__currentLoopData = ['Market Leader', '100% On-Time', 'Ethical Standards', 'Global Innovation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-star text-brand-green text-xs"></i>
                        <span class="text-xs font-black uppercase tracking-widest text-brand-blue"><?php echo e($tag); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/pages/quality.blade.php ENDPATH**/ ?>