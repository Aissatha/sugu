<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id', 'nom', 'slug', 'description', 'localisation', 'statut'
    ];

 
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function vendor()
{
    return $this->belongsTo(\App\Models\User::class, 'vendor_id');
}

}
