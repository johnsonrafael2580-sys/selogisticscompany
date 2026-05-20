<?php $__env->startSection('content'); ?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --custom-blue: #003366;
        --custom-green: #28a745;
    }
    body { font-family: 'Inter', sans-serif; }

    .hero-overlay-center {
        /* Giza la kutosha katikati ili maandishi meupe yasomeke juu ya picha */
        background: radial-gradient(circle, rgba(0, 51, 102, 0.85) 0%, rgba(0, 51, 102, 0.6) 100%);
    }

    .struct-card {
        transition: all 0.3s ease;
    }

    .box-glow:hover {
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        border-color: var(--custom-green);
        transform: translateY(-5px);
    }
</style>

<div class="flex flex-col min-h-screen bg-white">
    <!-- Hero Section -->
    <div class="relative h-[350px] md:h-[450px] flex items-center justify-center text-center overflow-hidden bg-custom-blue">
        <div class="absolute inset-0 z-0">
            <!-- Picha inaonekana vizuri sasa -->
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=2070" 
                 class="w-full h-full object-cover opacity-60" alt="Teamwork">
            <div class="absolute inset-0 hero-overlay-center"></div>
        </div>

        <div class="relative z-10 w-full max-w-4xl mx-auto px-6">
            <span class="text-custom-green font-bold tracking-[0.5em] uppercase text-xs md:text-sm mb-4 block">
                SE Global Hierarchy
            </span>
            <h1 class="text-white text-4xl md:text-7xl font-extrabold tracking-tight uppercase leading-tight">
                Organizational <br>
                <span class="text-custom-green">Structure</span>
            </h1>
            <div class="h-1.5 w-24 bg-custom-green mx-auto mt-8 rounded-full shadow-lg"></div>
        </div>
        
        <!-- Wave Divider -->
        <div class="absolute bottom-0 w-full leading-none z-20">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-[60px]">
                <path d="M1200 120L0 120 0 0C150 60 450 120 600 120C750 120 1050 60 1200 0V120Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <!-- Hierarchy Section -->
    <section class="pt-32 pb-24 px-6 md:px-12">
        <div class="max-w-6xl mx-auto">
            
            <div class="relative flex flex-col items-center">
                
                <!-- Level 1: Board of Directors -->
                <div class="w-full max-w-sm mb-12 struct-card" data-aos="fade-down">
                    <div class="bg-[#003366] border-b-4 border-custom-green text-white p-10 text-center rounded-2xl shadow-2xl box-glow">
                        <span class="text-custom-green text-[10px] font-bold uppercase tracking-[0.3em] block mb-2">Top Tier</span>
                        <h3 class="text-2xl font-extrabold uppercase tracking-tight">Board of Directors</h3>
                    </div>
                    <div class="w-1 h-12 bg-gray-200 mx-auto"></div>
                </div>

                <!-- Level 2: Managing Director -->
                <div class="w-full max-w-sm mb-12 struct-card" data-aos="fade-down" data-aos-delay="200">
                    <div class="bg-white border border-gray-100 border-t-4 border-t-custom-green p-8 text-center rounded-2xl shadow-lg box-glow">
                        <span class="text-[#003366] text-[10px] font-bold uppercase tracking-[0.3em] block mb-2">Executive</span>
                        <h3 class="text-xl font-extrabold text-[#003366] uppercase tracking-tight">Managing Director</h3>
                    </div>
                    <div class="w-1 h-12 bg-gray-200 mx-auto"></div>
                </div>

                <!-- Horizontal Connector Line (Desktop Only) -->
                <div class="hidden md:block w-full max-w-4xl h-0.5 bg-gray-200 rounded-full"></div>

                <!-- Level 3: Departments -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
                    
                    <!-- Operations -->
                    <div class="struct-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="hidden md:block w-0.5 h-10 bg-gray-200 mx-auto"></div>
                        <div class="bg-gray-50 border border-gray-100 p-8 text-center rounded-2xl hover:bg-white transition-all shadow-sm box-glow">
                            <div class="w-12 h-12 bg-blue-50 text-custom-blue rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-truck-loading text-xl"></i>
                            </div>
                            <h4 class="font-extrabold text-custom-blue uppercase text-sm mb-2">Operations</h4>
                            <p class="text-[10px] font-bold text-custom-green uppercase">Clearing & Forwarding</p>
                        </div>
                    </div>

                    <!-- HR -->
                    <div class="struct-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="hidden md:block w-0.5 h-10 bg-gray-200 mx-auto"></div>
                        <div class="bg-gray-50 border border-gray-100 p-8 text-center rounded-2xl hover:bg-white transition-all shadow-sm box-glow">
                            <div class="w-12 h-12 bg-green-50 text-custom-green rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users-cog text-xl"></i>
                            </div>
                            <h4 class="font-extrabold text-custom-blue uppercase text-sm mb-2">Human Resources</h4>
                            <p class="text-[10px] font-bold text-custom-green uppercase">Talent & Culture</p>
                        </div>
                    </div>

                    <!-- Finance -->
                    <div class="struct-card" data-aos="fade-up" data-aos-delay="600">
                        <div class="hidden md:block w-0.5 h-10 bg-gray-200 mx-auto"></div>
                        <div class="bg-gray-50 border border-gray-100 p-8 text-center rounded-2xl hover:bg-white transition-all shadow-sm box-glow">
                            <div class="w-12 h-12 bg-blue-50 text-custom-blue rounded-xl flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-file-invoice-dollar text-xl"></i>
                            </div>
                            <h4 class="font-extrabold text-custom-blue uppercase text-sm mb-2">Finance & Admin</h4>
                            <p class="text-[10px] font-bold text-custom-green uppercase">Audit & Compliance</p>
                        </div>
                    </div>

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/pages/structure.blade.php ENDPATH**/ ?>