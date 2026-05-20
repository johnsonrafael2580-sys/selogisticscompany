@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Navigation -->
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('admin.shipments.index') }}" class="text-xs font-black uppercase tracking-widest text-slate-400 hover:text-[#003366] transition-all flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Inventory
        </a>
        <a href="{{ route('admin.dashboard') }}" class="bg-slate-100 text-slate-600 px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest hover:bg-slate-200 transition-all">
            Dashboard
        </a>
    </div>

    <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100">
        <h2 class="text-3xl font-black text-[#003366] mb-8 uppercase italic">Register New Shipment</h2>
        
        <form action="{{ route('admin.shipments.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Customer Selection Dropdown -->
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Select Customer (Owner)</label>
                <select name="customer_id" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E] appearance-none" required>
                    <option value="" disabled selected>-- Choose a registered customer --</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">
                            {{ $customer->name }} ({{ $customer->phone ?? 'No Phone' }})
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tracking Number - Sasa hivi controller inaweza ku-generate yenyewe, 
                     lakini unaweza kuacha hapa kama unataka admin aandike mwenyewe -->
                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Tracking Number</label>
                    <input type="text" name="tracking_number" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E]" placeholder="LOG-XXXXX" required>
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Cargo Type</label>
                    <input type="text" name="cargo_type" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E]" placeholder="Electronics, Clothes, etc." required>
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Origin</label>
                    <input type="text" name="origin" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E]" required>
                </div>

                <div>
                    <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Destination</label>
                    <input type="text" name="destination" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E]" required>
                </div>
            </div>

            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">Estimated Delivery Date</label>
                <input type="date" name="estimated_delivery" class="w-full bg-slate-50 border-none rounded-xl p-4 focus:ring-2 focus:ring-[#22C55E]">
            </div>

            <button type="submit" class="w-full bg-[#003366] text-white py-5 rounded-2xl font-black uppercase tracking-[0.2em] shadow-lg shadow-blue-900/20 hover:bg-[#002244] transition-all">
                Save Shipment
            </button>
        </form>
    </div>
</div>
@endsection