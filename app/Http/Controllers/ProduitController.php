<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function aff_prod(){
        return view('produit.index');
    }
}
