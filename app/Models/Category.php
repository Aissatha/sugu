<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',          // Si tu veux garder les URLs SEO
        'image_url',
        'is_active',
    ];

    // 🔁 Une catégorie a plusieurs sous-catégories
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    // 🔁 Une catégorie peut avoir plusieurs produits
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
