<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nom', 'email', 'statut', 'justificatifs'];
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function shopRequests()
    {
        return $this->hasMany(ShopRequest::class);
    }
}
