<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'nom',
        'slug',
        'description',
        'localisation',
        'logo',
        'justificatif',
        'statut', // en_attente, valide, refuse
    ];

    // ✅ Une boutique appartient à un vendeur
    public function vendor()
    {
        return $this->belongsTo(\App\Models\User::class, 'vendor_id');
    }

    // ✅ Une boutique a plusieurs produits
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // ✅ Accessor utile (optionnel)
    public function getStatusLabelAttribute()
    {
        return match ($this->statut) {
            'valide' => 'Validée',
            'refuse' => 'Refusée',
            default  => 'En attente',
        };
    }
}
