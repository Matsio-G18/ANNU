<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    //
    public function aff_dep(){
        // $tb_departements=tb_Departement::all();
        return view('departement.index');
    }
    
    public function ajout_dep(){
        return view('departement.ajouter');
    }
}
