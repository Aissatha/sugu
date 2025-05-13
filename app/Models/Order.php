<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'vendor_id',
        'client_id',
        'items',
        'total_price',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
