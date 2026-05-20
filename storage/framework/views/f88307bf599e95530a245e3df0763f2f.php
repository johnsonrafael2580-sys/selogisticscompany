<?php $__env->startSection('content'); ?>
<div class="p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div class="flex items-center gap-4">
            <!-- Dashboard Button -->
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="p-3 bg-slate-50 rounded-xl hover:bg-slate-100 transition-all text-[#003366]" title="Go to Dashboard">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </a>
            <h2 class="text-2xl font-black text-[#003366] uppercase">Shipment Inventory</h2>
        </div>
        
        <a href="<?php echo e(route('admin.shipments.create')); ?>" class="bg-[#22C55E] text-white px-6 py-3 rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-emerald-600 transition-all shadow-md">
            + Add New Shipment
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-separate border-spacing-y-3">
            <thead>
                <tr class="text-slate-400 text-[10px] uppercase font-black tracking-widest">
                    <th class="px-6 py-4">Tracking ID</th>
                    <th class="px-6 py-4">Client</th>
                    <th class="px-6 py-4">Cargo Type</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300">
                    <td class="px-6 py-4 rounded-l-2xl font-mono font-bold text-[#003366]"><?php echo e($shipment->tracking_number); ?></td>
                    <td class="px-6 py-4 font-bold text-slate-600"><?php echo e($shipment->client_name); ?></td>
                    <td class="px-6 py-4 text-slate-500"><?php echo e($shipment->cargo_type); ?></td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-wider 
                            <?php echo e($shipment->status == 'Delivered' ? 'bg-emerald-50 text-emerald-500' : 'bg-blue-50 text-blue-500'); ?>">
                            <?php echo e($shipment->status); ?>

                        </span>
                    </td>
                    <td class="px-6 py-4 rounded-r-2xl text-center">
                        <a href="<?php echo e(route('admin.shipments.edit', $shipment->id)); ?>" class="text-blue-500 hover:underline font-bold text-xs uppercase">Edit</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/admin/shipments/index.blade.php ENDPATH**/ ?>