<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Shipment;

class TrackingController extends Controller {
    public function track(Request $request) {
        $shipment = Shipment::where('tracking_number', $request->tracking_number)->first();
        
        if (!$shipment) {
            return back()->with('error', 'Tracking number not found!');
        }
        return view('tracking-result', compact('shipment'));
    }
}