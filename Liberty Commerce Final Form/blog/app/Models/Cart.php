<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'Cart';

    protected $fillable = [
        'id',
        'Photo',
        'Produit',
        'Quantite',
        'Prix',


    ];

      public function cart()
{
    return $this->hasMany('App\Model\Product');
    return $this->hasOne('App\Model\User');
}
}
