<?php $__env->startSection('content'); ?>
<!-- Google Fonts & FontAwesome -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=JetBrains+Mono:wght@500&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-blue: #003366;
        --brand-green: #22C55E;
        --ui-bg: #F8FAFC;
        --pure-white: #ffffff;
        --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    body { font-family: 'Inter', sans-serif; background-color: var(--ui-bg); margin: 0; }

    /* Header with Background Image */
    .dashboard-header {
        position: relative;
        padding: 6rem 2rem 12rem;
        background: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .header-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 51, 102, 0.95) 0%, rgba(0, 26, 51, 0.85) 100%);
        z-index: 1;
    }

    .header-content { position: relative; z-index: 10; }

    .status-badge {
        background: rgba(34, 197, 94, 0.2);
        color: var(--brand-green);
        padding: 6px 16px;
        border-radius: 99px;
        font-size: 0.7rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border: 1px solid var(--brand-green);
    }

    .metric-card {
        background: var(--pure-white);
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: var(--card-shadow);
    }

    .metric-card:hover { transform: translateY(-8px); border-color: var(--brand-green); }

    .audit-row {
        background: var(--pure-white);
        border: 1px solid #e2e8f0;
        border-left: 4px solid var(--brand-blue);
        transition: all 0.3s;
    }

    .audit-row:hover { border-left-color: var(--brand-green); background: #f1f5f9; }

    .mono-text { font-family: 'JetBrains Mono', monospace; }

    .btn-action {
        background-color: var(--brand-green);
        color: var(--brand-blue);
        font-weight: 900;
        transition: all 0.3s;
        border: none;
    }

    .btn-action:hover { background-color: #1ba94c; transform: scale(1.02); }

    .sticky-side { position: sticky; top: 2rem; }
</style>

<main class="min-h-screen pb-20">
    <!-- TOP HEADER SECTION -->
    <section class="dashboard-header overflow-hidden">
        <div class="header-overlay"></div>
        <div class="max-w-7xl mx-auto header-content">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div>
                    <span class="status-badge mb-6 inline-block">System Status: Operational</span>
                    <h1 class="text-white text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
                        Compliance <span class="text-brand-green">&</span> <br>Operations Dashboard
                    </h1>
                    <p class="text-blue-100 mt-4 font-medium max-w-2xl text-lg opacity-90">
                        Real-time verification of SE Global Logistics quality standards and regulatory adherence across regional networks.
                    </p>
                </div>
                <div class="text-right hidden md:block border-l-2 border-brand-green pl-6">
                    <p class="text-blue-300 text-xs uppercase font-black tracking-widest mb-1">Current Audit Window</p>
                    <p class="text-white text-xl mono-text font-bold"><?php echo e(date('H:i')); ?> <span class="text-brand-green">EAT</span></p>
                    <p class="text-blue-200 text-sm opacity-80"><?php echo e(date('d M, Y')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT SECTION -->
    <div class="max-w-7xl mx-auto px-6 -mt-20 relative z-30">
        
        <!-- TOP METRICS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <?php
                $metrics = [
                    ['Safety Integrity', '99.8%', 'fas fa-shield-alt', 'Incident-free operations'],
                    ['Operational Uptime', '100%', 'fas fa-route', 'Delivery schedule accuracy'],
                    ['Quality Standard', 'ISO 9001', 'fas fa-award', 'Verified global standards']
                ];
            ?>

            <?php $__currentLoopData = $metrics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="metric-card p-8">
                <div class="flex items-center justify-between mb-4">
                    <div class="h-12 w-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue">
                        <i class="<?php echo e($m[2]); ?> text-xl"></i>
                    </div>
                    <span class="text-brand-green text-xs font-black uppercase tracking-widest">Live</span>
                </div>
                <p class="text-gray-500 text-[10px] font-black uppercase mb-1"><?php echo e($m[0]); ?></p>
                <h3 class="text-4xl font-extrabold text-brand-blue tracking-tight"><?php echo e($m[1]); ?></h3>
                <p class="text-gray-400 text-xs mt-4 font-medium"><?php echo e($m[3]); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- LOWER SECTION (8+4 Layout) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT: AUDIT LOG (8 Columns) -->
            <div class="lg:col-span-8 bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h3 class="text-brand-blue text-xl font-black uppercase tracking-tight">Operational Audit Trail</h3>
                        <p class="text-gray-400 text-xs font-bold mt-1">SOP ADHERENCE MONITORING</p>
                    </div>
                    <i class="fas fa-ellipsis-h text-gray-300"></i>
                </div>

                <div class="space-y-4">
                    <?php $__currentLoopData = [
                        ['Pre-Loading Inspection', '100%', 'Verified', 'bg-brand-green'],
                        ['Driver Health & Safety', '95%', 'In Progress', 'bg-blue-400'],
                        ['Route Risk Analysis', '100%', 'Verified', 'bg-brand-green'],
                        ['Cargo Securement Audit', '100%', 'Verified', 'bg-brand-green']
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="audit-row p-6 rounded-xl flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <i class="fas fa-check-circle <?php echo e($audit[1] == '100%' ? 'text-brand-green' : 'text-blue-300'); ?> text-xl"></i>
                            <span class="font-bold text-brand-blue uppercase text-sm tracking-tight"><?php echo e($audit[0]); ?></span>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="text-right">
                                <p class="mono-text text-sm font-black text-brand-blue"><?php echo e($audit[1]); ?></p>
                                <p class="text-[9px] uppercase font-bold text-gray-400 tracking-widest"><?php echo e($audit[2]); ?></p>
                            </div>
                            <div class="h-10 w-1 <?php echo e($audit[3]); ?> rounded-full"></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- RIGHT: REGULATORY (4 Columns) -->
            <div class="lg:col-span-4 sticky-side">
                <div class="space-y-6">
                    <div class="bg-brand-blue rounded-2xl p-8 shadow-2xl">
                        <h3 class="text-brand-green font-black uppercase tracking-tight mb-8 border-b border-white/10 pb-4 flex items-center">
                            <i class="fas fa-fingerprint mr-3 text-brand-green"></i> Regulatory
                        </h3>
                        
                        <div class="space-y-3">
                            <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-xl border border-brand-green/20 hover:bg-white/10 transition-all group">
                                <span class="text-xs font-bold uppercase tracking-widest text-brand-green">TPA Portal</span>
                                <i class="fas fa-chevron-right text-[10px] text-brand-green group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-xl border border-brand-green/20 hover:bg-white/10 transition-all group">
                                <span class="text-xs font-bold uppercase tracking-widest text-brand-green">Customs Systems</span>
                                <i class="fas fa-chevron-right text-[10px] text-brand-green group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                        
                        <div class="mt-10 pt-6 border-t border-white/10">
                            <p class="text-[11px] text-brand-green leading-relaxed mb-6 italic opacity-90">
                                "System integration verified. All regional transport permits are currently valid and active."
                            </p>
                            <button class="btn-action w-full py-4 rounded-xl text-xs uppercase tracking-widest shadow-lg">
                                <i class="fas fa-download mr-2"></i> Audit Report
                            </button>
                        </div>
                    </div>

                    <!-- Eco Box -->
                    <div class="bg-white border border-gray-200 p-6 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div class="h-10 w-10 bg-green-50 rounded-lg flex items-center justify-center">
                            <i class="fas fa-leaf text-brand-green"></i>
                        </div>
                        <div>
                            <p class="text-xs font-black text-brand-blue uppercase">Eco-Logistics</p>
                            <p class="text-[10px] text-gray-500 font-bold">Emissions within limits.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vol12_3/infinityfree.com/if0_40168482/selogisticscompany.66ghz.com/htdocs/resources/views/pages/compliance-dashboard.blade.php ENDPATH**/ ?>