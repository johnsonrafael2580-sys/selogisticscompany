<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shipments | SE Global Logistics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Montserrat', sans-serif; }
        .bg-navy { background-color: #003366; }
        .text-emerald { color: #22C55E; }
        .bg-emerald { background-color: #22C55E; }
    </style>
</head>
<body class="bg-gray-50">

    <div class="min-h-screen">
        <nav class="bg-navy p-4 text-white shadow-lg">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-lg font-black tracking-tight uppercase">SE <span class="text-emerald">Logistics</span></span>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                    <span class="text-xs font-bold uppercase hidden md:block italic text-gray-300">Customer: {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-emerald px-3 py-1 rounded text-[10px] font-black uppercase hover:bg-emerald/80 transition">Logout</button>
                    </form>
                    @endauth
                </div>
            </div>
        </nav>

        <main class="container mx-auto p-6">
            <div class="mb-8">
                <h1 class="text-2xl font-black text-navy uppercase">Your <span class="text-emerald">Shipments</span></h1>
                <p class="text-gray-500 text-sm">Real-time status of your goods being transported with us.</p>
            </div>

            <div class="bg-white rounded-3xl shadow-sm overflow-hidden border border-gray-100">
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <h3 class="font-black text-navy uppercase italic">Recent Shipments</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50 text-[10px] uppercase tracking-widest text-gray-400">
                                <th class="px-6 py-4">Tracking ID</th>
                                <th class="px-6 py-4">Origin</th>
                                <th class="px-6 py-4">Destination</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Details</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 text-sm">
                            @forelse($shipments as $shipment)
                            <tr class="hover:bg-gray-50/80 transition">
                                <td class="px-6 py-4 font-black text-navy">#{{ $shipment->tracking_number }}</td>
                                <td class="px-6 py-4 text-gray-600 font-medium">{{ $shipment->origin }}</td>
                                <td class="px-6 py-4 text-gray-600 font-medium">{{ $shipment->destination }}</td>
                                <td class="px-6 py-4">
                                    @if($shipment->status == 'Cleared')
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">Arrived</span>
                                    @elseif($shipment->status == 'On Transit')
                                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">In Transit</span>
                                    @else
                                        <span class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">{{ $shipment->status ?? 'Pending' }}</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('shipments.show', $shipment->id) }}" class="text-emerald hover:underline font-bold text-xs italic">VIEW</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-400 italic text-sm">You currently have no shipments in the system.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="mt-10 text-center">
                <a href="{{ route('home') }}" class="text-xs font-bold text-gray-400 hover:text-navy transition uppercase tracking-widest">← Back to Website</a>
            </div>
        </main>
    </div>
</body>
</html>