<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{
    /**
     * Hii ni kwa ajili ya Mteja (User) kuona mizigo yake pekee.
     */
    public function index()
    {
        // 1. Mpate mteja (Customer profile) anayemilikiwa na huyu User
        $customer = auth()->user()->customer; 

        // Hakikisha hapa mteja amepatikana kuzuia error nyingine
        if (!$customer) {
            return "Hitilafu: Akaunti yako haijaunganishwa na wasifu wa mteja.";
        }

        // 2. Pata mizigo inayomuhusu huyu mteja pekee
        $shipments = Shipment::where('customer_id', $customer->id)->get();

        // Hakikisha jina la folder ni 'shipment' (bila s) kama ulivyosema
        return view('shipments.index', compact('shipments'));
    }

    /**
     * Angalia maelezo ya mzigo mmoja
     */
public function show($id)
{
    // Hapa variable inaitwa $shipment
    $shipment = \App\Models\Shipment::findOrFail($id);

    // Ulinzi: Hakikisha mteja haoni mzigo wa mtu mwingine
    if ($shipment->customer_id !== auth()->user()->customer->id) {
        abort(403, 'Huna ruhusa ya kuona mzigo huu.');
    }

    // KOSA LILIKUWA HAPA: Badilisha kutoka compact('show') kwenda compact('shipment')
    return view('shipments.show', compact('shipment'));
}
} // BANO LA KUFUNGA CLASS LINATAKIWA KUWA HAPA MWISHONI