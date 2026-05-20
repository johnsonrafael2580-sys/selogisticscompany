<?php $__env->startSection('content'); ?>
<!-- Custom Styles -->
<style>
    .bg-se-gradient {
        background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
    }
    .custom-shadow {
        box-shadow: 0 10px 40px -15px rgba(0,0,0,0.05);
    }
    .table-row-hover:hover {
        background-color: #f8fafc;
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
</style>

<div class="min-h-screen bg-[#f1f5f9] pb-12">
    <!-- Header Section -->
    <div class="bg-se-gradient text-white pb-24 pt-12 shadow-lg">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center">
                    <div class="bg-[#22C55E] p-3 rounded-2xl mr-4 shadow-xl shadow-emerald-900/20">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-3xl font-black tracking-tight uppercase">Customer Panel</h2>
                        <p class="text-blue-100/70 text-sm font-medium">Manage and track your global client database</p>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- BACK TO DASHBOARD BUTTON -->
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="hidden md:flex items-center space-x-2 bg-white/10 hover:bg-white/20 px-5 py-3 rounded-xl transition-all border border-white/20 font-bold text-xs uppercase tracking-widest">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- ADD NEW CUSTOMER BUTTON -->
                    <a href="<?php echo e(route('admin.customers.create')); ?>" class="group relative inline-flex items-center justify-center">
                        <div class="absolute -inset-1 bg-[#22C55E] rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-300"></div>
                        <button class="relative bg-white text-[#003366] px-8 py-3 rounded-xl font-black text-xs uppercase tracking-widest shadow-xl hover:bg-[#22C55E] hover:text-white transition-all active:scale-95 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                            Add New Customer
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="container mx-auto px-6 -mt-16">
        <div class="bg-white rounded-[2rem] shadow-2xl border border-white/20 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Client Info</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Contact Details</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest text-center">Shipments</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest">Address</th>
                            <th class="px-8 py-5 text-[11px] font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="table-row-hover group">
                            <!-- Info -->
                            <td class="px-8 py-6">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-2xl bg-[#003366] text-white flex items-center justify-center font-black shadow-lg shadow-blue-900/20 group-hover:scale-110 transition-transform">
                                        <?php echo e(strtoupper(substr($customer->name, 0, 1))); ?>

                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-black text-[#003366]"><?php echo e($customer->name); ?></div>
                                        <div class="text-[10px] text-[#22C55E] font-bold tracking-widest uppercase">ID: #<?php echo e($customer->id); ?></div>
                                    </div>
                                </div>
                            </td>
                            
                            <!-- Contact -->
                            <td class="px-8 py-6">
                                <div class="space-y-1">
                                    <div class="flex items-center text-xs text-slate-600 font-medium">
                                        <svg class="w-3.5 h-3.5 mr-2 text-[#003366] opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                        <?php echo e($customer->email ?? 'Not Available'); ?>

                                    </div>
                                    <div class="flex items-center text-xs text-slate-600 font-medium">
                                        <svg class="w-3.5 h-3.5 mr-2 text-[#22C55E] opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                        <?php echo e($customer->phone ?? 'N/A'); ?>

                                    </div>
                                </div>
                            </td>

                            <!-- Shipments -->
                            <td class="px-8 py-6 text-center">
                                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-[10px] font-black bg-emerald-50 text-[#22C55E] uppercase tracking-wider border border-emerald-100">
                                    <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-20L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                    <?php echo e($customer->shipments_count ?? 0); ?> Items
                                </span>
                            </td>

                            <!-- Address -->
                            <td class="px-8 py-6">
                                <div class="flex items-start max-w-[200px]">
                                    <svg class="w-3.5 h-3.5 mr-2 mt-0.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <p class="text-xs text-slate-500 leading-relaxed italic"><?php echo e(Str::limit($customer->address, 40)); ?></p>
                                </div>
                            </td>

                            <!-- Actions -->
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="<?php echo e(route('admin.customers.edit', $customer->id)); ?>" class="p-2.5 bg-blue-50 text-[#003366] rounded-xl hover:bg-[#003366] hover:text-white transition-all shadow-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                                    <form action="<?php echo e(route('admin.customers.destroy', $customer->id)); ?>" method="POST" onsubmit="return confirm('ARE YOU SURE? This will permanently delete this client.');" class="inline">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="p-2.5 bg-red-50 text-red-500 rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="py-20 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="bg-slate-50 p-6 rounded-full mb-4">
                                        <svg class="w-16 h-16 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                    </div>
                                    <h3 class="text-lg font-black text-[#003366]">No Records Found</h3>
                                    <p class="text-slate-400 text-sm mt-1">Start by adding your first client to the system.</p>
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="mt-8 flex flex-col md:flex-row justify-between items-center gap-4 px-4">
            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">
                Showing <span class="text-[#003366]"><?php echo e($customers->count()); ?></span> Registered Clients
            </p>
            <div class="flex items-center space-x-2 bg-white px-4 py-2 rounded-full shadow-sm border border-slate-100">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#22C55E] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#22C55E]"></span>
                </span>
                <span class="text-[10px] font-black text-slate-600 uppercase tracking-tighter">System Engine: Active</span>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/admin/customers/index.blade.php ENDPATH**/ ?>