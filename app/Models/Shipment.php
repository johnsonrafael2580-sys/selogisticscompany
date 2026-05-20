<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    use HasFactory;

    protected $table = 'shipments'; // Hakikisha table jina lake ni herufi ndogo

    protected $fillable = [
        'customer_id',      // MUHIMU: Ongeza hii ili kuunganisha na Customer
        'tracking_number',
        'client_name',
        'cargo_type',
        'origin',
        'destination',
        'status',
        'shipped_at',
    ];

    protected $casts = [
        'shipped_at' => 'datetime',
    ];

    /**
     * Uhusiano: Mzigo huu ni wa mteja gani?
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}