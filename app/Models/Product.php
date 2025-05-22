<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'name',
        'description',
        'price',
        'stock',
        'image_url',
        'status',
        'category_id',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',

    ];

    // 🔁 Relation avec le vendeur (User avec rôle vendeur)
    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    // 🔁 Alias backward-compatible (optionnel)
    public function shop()
    {
        return $this->vendor();
    }

    // 🔁 Catégorie du produit
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(\App\Models\SubCategory::class, 'subcategory_id');

    }

    // 🔁 Tags liés au produit (many-to-many)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // 🔎 Scope : produits avec faible stock
    public function scopeLowStock($query, $threshold = 5)
    {
        return $query->where('stock', '<', $threshold);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

}
