<?php

namespace App\Http\Controllers;

use App\Caissier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaissierController extends Controller
{
    public function sellProduct() {
        return view('caissier_vendre_produits');
    }
}
