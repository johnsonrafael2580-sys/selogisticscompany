<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Customer;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Inaonyesha orodha ya mizigo yote.
     */
    public function index()
    {
        // Eager loading ya 'customer' inasaidia kupata jina la mteja bila client_name column
        $shipments = Shipment::with('customer')->latest()->paginate(10);
        return view('admin.shipments.index', compact('shipments'));
    }

    /**
     * Inafungua fomu ya kuongeza mzigo ikiwa na Dropdown ya wateja.
     */
    public function create()
    {
        // Tunachukua wateja wote ili wajaze dropdown
        $customers = Customer::all();
        return view('admin.shipments.create', compact('customers'));
    }

    /**
     * Inahifadhi mzigo mpya.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'cargo_type' => 'required|string',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'estimated_delivery' => 'nullable|date',
        ]);

        // 1. Tafuta mteja
        $customer = Customer::findOrFail($validated['customer_id']);

        // 2. Kutengeneza Tracking Number
        $tracking_number = 'LOG-' . strtoupper(substr(uniqid(), 7));

        // 3. Hifadhi Mzigo (Tumeondoa client_name kwa sababu ipo kwenye Relation)
        Shipment::create([
            'customer_id' => $customer->id,
            'user_id' => auth()->id(), // Admin aliyelogin sasa hivi ndio muundaji wa record
            'tracking_number' => $tracking_number,
            'cargo_type' => $validated['cargo_type'],
            'origin' => $validated['origin'],
            'destination' => $validated['destination'],
            'status' => 'Pending',
            'current_location' => $validated['origin'],
            'estimated_delivery' => $validated['estimated_delivery'],
        ]);

        return redirect()->route('admin.shipments.index')
            ->with('success', 'Mzigo umeongezwa kwa mteja: ' . $customer->name);
    }

    /**
     * Inafungua fomu ya kuhariri.
     */
    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);
        $customers = Customer::all();
        return view('admin.shipments.edit', compact('shipment', 'customers'));
    }

    /**
     * Inasajili mabadiliko.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'current_location' => 'required',
        ]);

        $shipment = Shipment::findOrFail($id);
        
        $shipment->update([
            'status' => $request->status,
            'current_location' => $request->current_location,
            'estimated_delivery' => $request->estimated_delivery ?? $shipment->estimated_delivery,
        ]);

        return redirect()->route('admin.shipments.index')
            ->with('success', 'Hali ya mzigo ' . $shipment->tracking_number . ' imesasishwa!');
    }

    /**
     * Kufuta mzigo.
     */
    public function destroy($id)
    {
        $shipment = Shipment::findOrFail($id);
        $shipment->delete();
        return redirect()->back()->with('success', 'Mzigo umefutwa kikamilifu.');
    }
}