<?php $__env->startSection('content'); ?>
<div class="flex flex-col md:flex-row min-h-screen bg-[#f8fafc]">
    
    <!-- Sidebar -->
    <div class="w-full md:w-72 bg-[#003366] text-white p-8 shadow-2xl z-10 flex flex-col">
        <!-- Logo Area -->
        <div class="mb-12 px-2">
            <div class="flex items-center">
                <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                    <img src="<?php echo e(asset('public/assets/images/logo.jpeg')); ?>" alt="SE Global Logistics" class="h-12 md:h-16 w-auto object-contain rounded-lg">
                </a>
            </div>
            <p class="text-[10px] text-slate-300 font-bold uppercase tracking-[0.2em] mt-3 ml-1 opacity-70">Management System</p>
        </div>
        
        <!-- Navigation -->
        <nav class="space-y-1.5 flex-grow">
            <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-4 ml-2">Main Menu</p>
            
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex items-center space-x-3 p-3.5 bg-gradient-to-r from-[#22C55E] to-[#16a34a] rounded-xl font-bold shadow-lg shadow-[#22C55E]/20 group transition-all">
                <svg class="w-5 h-5 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span>Dashboard</span>
            </a>

            <a href="<?php echo e(route('admin.shipments.index')); ?>" class="flex items-center space-x-3 p-3.5 hover:bg-white/5 rounded-xl transition-all text-slate-300 hover:text-white group">
                <svg class="w-5 h-5 group-hover:text-[#22C55E] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-20L4 7m8 4v10M4 7v10l8 4"></path></svg>
                <span class="font-medium">All Shipments</span>
            </a>

            <a href="<?php echo e(route('admin.customers.index')); ?>" class="flex items-center space-x-3 p-3.5 hover:bg-white/5 rounded-xl transition-all text-slate-300 hover:text-white group">
                <svg class="w-5 h-5 group-hover:text-[#22C55E] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <span class="font-medium">Customers</span>
            </a>
        </nav>

        <!-- Logout Section -->
        <div class="mt-auto pt-6 border-t border-white/10">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="w-full flex items-center space-x-3 p-3.5 hover:bg-red-500/10 rounded-xl transition-all text-red-400 hover:text-red-500 group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="font-bold uppercase text-xs tracking-widest">Logout</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6 md:p-12 overflow-y-auto">
        
        <!-- Header Section -->
        <div class="mb-12 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h2 class="text-4xl font-black text-[#003366] tracking-tight uppercase">Console</h2>
                <p class="text-slate-500 font-medium mt-1">Welcome back. Here is an overview of your operations today.</p>
            </div>
            <a href="<?php echo e(route('admin.shipments.create')); ?>" class="group relative inline-flex items-center justify-center">
                <div class="absolute -inset-1 bg-gradient-to-r from-[#22C55E] to-[#003366] rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <button class="relative bg-white border border-slate-100 px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest text-[#003366] transition-all flex items-center shadow-sm active:scale-95">
                    <svg class="w-5 h-5 mr-3 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    New Shipment
                </button>
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100/50 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-slate-50 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:bg-[#22C55E]/5"></div>
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-[#003366] mb-6 shadow-inner">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-1">Total Shipments</p>
                <h4 class="text-3xl font-black text-[#003366]"><?php echo e($stats['total']); ?></h4>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100/50 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50/30 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:bg-blue-50"></div>
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 shadow-inner">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-1">In Transit</p>
                <h4 class="text-3xl font-black text-[#003366]"><?php echo e($stats['transit']); ?></h4>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100/50 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50/30 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:bg-emerald-50"></div>
                <div class="w-14 h-14 bg-emerald-50 rounded-2xl flex items-center justify-center text-[#22C55E] mb-6 shadow-inner">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-1">Delivered</p>
                <h4 class="text-3xl font-black text-[#003366]"><?php echo e($stats['delivered']); ?></h4>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] border border-slate-100/50 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50/30 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:bg-amber-50"></div>
                <div class="w-14 h-14 bg-amber-50 rounded-2xl flex items-center justify-center text-amber-500 mb-6 shadow-inner">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-1">Pending</p>
                <h4 class="text-3xl font-black text-[#003366]"><?php echo e($stats['pending']); ?></h4>
            </div>
        </div>

        <!-- Recent Shipments Table -->
        <div class="bg-white rounded-[3rem] shadow-[0_20px_60px_-20px_rgba(0,0,0,0.03)] border border-slate-100 overflow-hidden">
            <div class="p-10 flex justify-between items-center border-b border-slate-50">
                <div>
                    <h3 class="text-xl font-black text-[#003366]">Recent Shipments</h3>
                    <p class="text-sm text-slate-400 font-medium">Tracking the latest logistics entries.</p>
                </div>
                <a href="<?php echo e(route('admin.shipments.index')); ?>" class="text-xs font-bold text-[#22C55E] bg-emerald-50 px-5 py-2.5 rounded-xl hover:bg-[#22C55E] hover:text-white transition-all">View All</a>
            </div>
            
            <div class="overflow-x-auto px-6 pb-8 pt-4">
                <table class="w-full text-left border-separate border-spacing-y-3">
                    <thead>
                        <tr>
                            <th class="px-6 py-2 text-[10px] uppercase font-black text-slate-400 tracking-widest">Tracking ID</th>
                            <th class="px-6 py-2 text-[10px] uppercase font-black text-slate-400 tracking-widest">Customer</th>
                            <th class="px-6 py-2 text-[10px] uppercase font-black text-slate-400 tracking-widest">Route</th>
                            <th class="px-6 py-2 text-[10px] uppercase font-black text-slate-400 tracking-widest">Status</th>
                            <th class="px-6 py-2 text-[10px] uppercase font-black text-slate-400 tracking-widest text-center">Action</th>
                        </tr>
                    </thead>
                    <!-- Sehemu ya Jedwali uliyohitaji kuongeza -->
                    <tbody>
                        <?php $__currentLoopData = $recent_shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="group transition-all duration-300">
                            <td class="bg-slate-50 group-hover:bg-white group-hover:shadow-xl px-6 py-5 rounded-l-2xl border-y border-l border-transparent group-hover:border-slate-100">
                                <span class="font-mono text-xs font-bold text-[#003366] bg-white px-3 py-1.5 rounded-lg shadow-sm border border-slate-100 group-hover:border-[#22C55E]/30"><?php echo e($shipment->tracking_number); ?></span>
                            </td>
                            <td class="bg-slate-50 group-hover:bg-white group-hover:shadow-xl px-6 py-5 border-y border-transparent group-hover:border-slate-100">
                                <!-- Kutumia client_name moja kwa moja kutoka kwenye database -->
                                <p class="text-sm font-bold text-[#003366]"><?php echo e($shipment->client_name); ?></p>
                            </td>
                            <td class="bg-slate-50 group-hover:bg-white group-hover:shadow-xl px-6 py-5 border-y border-transparent group-hover:border-slate-100">
                                <div class="flex items-center text-[11px] font-bold text-slate-500 uppercase tracking-tight">
                                    <?php echo e($shipment->origin); ?> 
                                    <svg class="w-3 h-3 mx-2 text-[#22C55E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    <?php echo e($shipment->destination); ?>

                                </div>
                            </td>
                            <td class="bg-slate-50 group-hover:bg-white group-hover:shadow-xl px-6 py-5 border-y border-transparent group-hover:border-slate-100">
                                <?php if($shipment->status == 'Delivered'): ?>
                                    <span class="bg-emerald-50 text-[#22C55E] px-3 py-1 rounded-full font-black text-[9px] uppercase tracking-wider inline-flex items-center">
                                        <span class="w-1.5 h-1.5 bg-[#22C55E] rounded-full mr-2"></span> Delivered
                                    </span>
                                <?php elseif($shipment->status == 'In Transit'): ?>
                                    <span class="bg-blue-50 text-blue-500 px-3 py-1 rounded-full font-black text-[9px] uppercase tracking-wider inline-flex items-center">
                                        <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-2"></span> In Transit
                                    </span>
                                <?php else: ?>
                                    <span class="bg-amber-50 text-amber-500 px-3 py-1 rounded-full font-black text-[9px] uppercase tracking-wider inline-flex items-center">
                                        <span class="w-1.5 h-1.5 bg-amber-500 rounded-full mr-2"></span> <?php echo e($shipment->status); ?>

                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="bg-slate-50 group-hover:bg-white group-hover:shadow-xl px-6 py-5 rounded-r-2xl border-y border-r border-transparent group-hover:border-slate-100 text-center">
                                <a href="<?php echo e(route('admin.shipments.edit', $shipment->id)); ?>" class="inline-flex p-2.5 bg-white text-slate-400 hover:text-[#22C55E] hover:shadow-md rounded-xl transition-all border border-slate-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>