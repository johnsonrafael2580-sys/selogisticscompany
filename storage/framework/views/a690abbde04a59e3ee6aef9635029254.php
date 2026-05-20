<?php $__env->startSection('content'); ?>
<div class="flex flex-col min-h-screen bg-white">

    <div class="relative h-[300px] md:h-[400px] flex items-center justify-center overflow-hidden bg-custom-blue">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-20" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-custom-blue/50 via-custom-blue to-custom-blue"></div>
        </div>

        <div class="relative z-10 text-center px-4" data-aos="zoom-in">
            <div class="flex justify-center items-center space-x-3 mb-4">
                <div class="h-[2px] w-8 bg-custom-green"></div>
                <span class="text-custom-green font-black tracking-[0.4em] uppercase text-xs">Visual Documentation</span>
                <div class="h-[2px] w-8 bg-custom-green"></div>
            </div>
            <h1 class="text-white text-5xl md:text-7xl font-black italic tracking-tighter uppercase drop-shadow-2xl">
                Media <span class="text-custom-green">Gallery</span>
            </h1>
        </div>
    </div>

    <section class="py-24 px-6 bg-[#f8fafc] relative">
        <i class="fas fa-camera-retro absolute top-10 right-10 text-custom-blue opacity-[0.03] text-[200px] -z-0"></i>

        <div class="max-w-7xl mx-auto relative z-10">
            
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <span class="px-6 py-2 bg-custom-blue text-custom-green font-black italic text-xs uppercase transform -skew-x-12 cursor-pointer shadow-lg">All Photos</span>
                <span class="px-6 py-2 bg-white text-custom-blue font-black italic text-xs uppercase transform -skew-x-12 hover:bg-custom-green transition-colors cursor-pointer shadow-md">Port Ops</span>
                <span class="px-6 py-2 bg-white text-custom-blue font-black italic text-xs uppercase transform -skew-x-12 hover:bg-custom-green transition-colors cursor-pointer shadow-md">Logistics</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="relative group overflow-hidden bg-custom-blue h-[400px] shadow-2xl border-b-8 border-custom-green" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&q=80&w=1000" 
                         class="w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700" alt="Port">
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end bg-gradient-to-t from-custom-blue via-transparent to-transparent">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h4 class="text-white text-2xl font-black italic uppercase mb-2">Port Operations</h4>
                            <div class="h-1 w-12 bg-custom-green mb-4"></div>
                            <p class="text-custom-green font-black text-[10px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">Dar es Salaam Terminal</p>
                        </div>
                    </div>
                    <div class="absolute top-6 right-6 w-12 h-12 bg-custom-green flex items-center justify-center rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-10 group-hover:translate-x-0">
                        <i class="fas fa-search-plus text-custom-blue"></i>
                    </div>
                </div>

                <div class="relative group overflow-hidden bg-white h-[400px] shadow-xl border-b-8 border-custom-blue flex items-center justify-center p-12 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 opacity-[0.03] rotate-12">
                        <i class="fas fa-ship text-[250px]"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                             <i class="fas fa-image text-4xl text-custom-blue/20"></i>
                        </div>
                        <h4 class="text-black font-black uppercase text-sm tracking-widest">Ground Logistics</h4>
                        <p class="text-gray-400 text-[10px] font-bold italic mt-2">Media Content Pending Upload</p>
                    </div>
                </div>

                <div class="relative group overflow-hidden bg-custom-blue h-[400px] shadow-2xl border-b-8 border-custom-green" data-aos="fade-up" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?auto=format&fit=crop&q=80&w=1000" 
                         class="w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-40 transition-all duration-700" alt="Truck">
                    
                    <div class="absolute inset-0 p-8 flex flex-col justify-end bg-gradient-to-t from-custom-blue via-transparent to-transparent">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <h4 class="text-white text-2xl font-black italic uppercase mb-2">Fleet Management</h4>
                            <div class="h-1 w-12 bg-custom-green mb-4"></div>
                            <p class="text-custom-green font-black text-[10px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">Regional Distribution</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-20 text-center">
                <p class="text-custom-blue/30 font-black italic text-4xl md:text-6xl uppercase tracking-tighter opacity-20 select-none">
                    Excellence in Motion
                </p>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/pages/gallery.blade.php ENDPATH**/ ?>