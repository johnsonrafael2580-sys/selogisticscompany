<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shipment; // Hakikisha una Model ya Shipment

class DashboardController extends Controller
{
    /**
     * Show the Client Dashboard.
     */
    public function index()
    {
        // 1. Pata ID ya mteja aliyelogin
        $userId = Auth::id();

        // 2. Chukua taarifa za mizigo ya huyu mteja pekee
        // Hapa tunachukua mizigo michache ya hivi karibuni (Recent activity)
        $recentShipments = Shipment::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // 3. Pata idadi ya mizigo kulingana na status (kwa ajili ya vile vibox vya juu)
        $stats = [
            'active'    => Shipment::where('user_id', $userId)->where('status', 'in-transit')->count(),
            'pending'   => Shipment::where('user_id', $userId)->where('status', 'pending')->count(),
            'completed' => Shipment::where('user_id', $userId)->where('status', 'delivered')->count(),
        ];

        // 4. Rudisha view ikiwa na hizi data
        return view('dashboard.index', compact('recentShipments', 'stats'));
    }
}