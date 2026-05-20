@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-10">
    <div class="max-w-3xl mx-auto px-4">
        
        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-black text-[#003366] uppercase">Shipment Details</h1>
            <a href="{{ route('shipments.index') }}" class="text-sm font-bold text-gray-500 hover:text-[#003366] transition">← GO BACK</a>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="bg-[#003366] p-6 text-white">
                <p class="text-[10px] font-bold uppercase tracking-widest opacity-70">Tracking Number</p>
                <h2 class="text-3xl font-black mt-1">{{ $shipment->tracking_number }}</h2>
            </div>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Origin</p>
                            <p class="text-lg font-bold text-[#003366]">{{ $shipment->origin }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Destination</p>
                            <p class="text-lg font-bold text-[#003366]">{{ $shipment->destination }}</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Weight</p>
                            <p class="text-lg font-bold text-[#003366]">{{ $shipment->weight }} KG</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Status</p>
                            <span class="inline-block mt-1 px-4 py-1 rounded-full text-xs font-black uppercase {{ $shipment->status == 'Cleared' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">
                                {{ $shipment->status }}
                            </span>
                        </div>
                    </div>
                </div>

                <hr class="my-8 border-gray-50">

                <div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Shipping Date</p>
                    <p class="text-sm font-medium text-gray-600">
                        {{ $shipment->shipped_at ? \Carbon\Carbon::parse($shipment->shipped_at)->format('d M, Y - H:i') : 'Not yet shipped' }}
                    </p>
                </div>
            </div>
            
            <div class="bg-gray-50 p-6 border-t border-gray-100 text-center">
                <p class="text-xs text-gray-400 italic">If you encounter any issues, please contact SE Logistics customer service.</p>
            </div>
        </div>
    </div>
</div>
@endsection