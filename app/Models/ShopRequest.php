<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'nom_boutique',
        'description',
        'statut',
        'justification_refus'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
