<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitIndustrielController extends Controller
{
    //afficher les produits industriels
    public function aff_prod_ind(){
        return view('produit_industriel.index');
    }
}
