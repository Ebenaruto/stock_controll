<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $table = 'produit';
    protected $fillable = [
        'nom', 'categorie', 'prix_unitaire', 'quantité'
    ];
}
