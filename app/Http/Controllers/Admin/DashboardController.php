<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment; // Hakikisha una Model ya Shipment
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Kuchukua takwimu
        $stats = [
            'total' => Shipment::count(),
            'pending' => Shipment::where('status', 'Pending')->count(),
            'transit' => Shipment::where('status', 'In Transit')->count(),
            'delivered' => Shipment::where('status', 'Delivered')->count(),
        ];

        // Mizigo ya hivi karibuni
        $recent_shipments = Shipment::latest()->take(10)->get();

        return view('admin.dashboard', compact('stats', 'recent_shipments'));
    }
}