<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Navigation -->
    <div class="flex justify-between items-center mb-6">
        <a href="<?php echo e(route('admin.shipments.index')); ?>" class="text-xs font-black uppercase tracking-widest text-slate-400 hover:text-[#003366] transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Cancel & Return
        </a>
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="bg-slate-100 text-slate-600 px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest hover:bg-slate-200 transition-all">
            Dashboard
        </a>
    </div>

    <!-- Alert Messages -->
    <?php if(session('success')): ?>
        <div class="mb-6 p-4 bg-emerald-100 border border-emerald-200 text-emerald-700 rounded-2xl font-bold text-sm">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-700 rounded-2xl font-bold text-sm">
            <ul class="list-disc list-inside">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="bg-white p-6 md:p-10 rounded-[2.5rem] shadow-xl border border-slate-100">
        <h2 class="text-2xl md:text-3xl font-black text-[#003366] mb-8 uppercase italic">
            Update Shipment: <span class="text-emerald-500"><?php echo e($shipment->tracking_number); ?></span>
        </h2>
        
        <form action="<?php echo e(route('admin.shipments.update', $shipment->id)); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Status Selection -->
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Status</label>
                    <select name="status" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E] font-bold text-slate-700">
                        <?php
                            $statuses = ['Pending', 'In Transit', 'Cleared', 'Delivered', 'On Hold', 'Cancelled'];
                        ?>
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status); ?>" <?php echo e($shipment->status == $status ? 'selected' : ''); ?>>
                                <?php echo e($status); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- Location Input -->
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Current Location</label>
                    <input type="text" name="current_location" 
                           value="<?php echo e(old('current_location', $shipment->current_location)); ?>" 
                           placeholder="e.g. Dar es Salaam, TZ"
                           class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E] font-bold text-slate-700">
                </div>
            </div>

            <!-- Additional Note (Optional) -->
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Internal Note / Remarks</label>
                <textarea name="remarks" rows="3" 
                          class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E] font-bold text-slate-700" 
                          placeholder="Short update about this shipment..."><?php echo e(old('remarks', $shipment->remarks ?? '')); ?></textarea>
            </div>

            <button type="submit" class="w-full bg-[#22C55E] text-white py-5 rounded-2xl font-black uppercase tracking-[0.2em] shadow-lg shadow-emerald-500/20 hover:bg-emerald-600 transition-all transform hover:-translate-y-1">
                Update Status
            </button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/admin/shipments/edit.blade.php ENDPATH**/ ?>