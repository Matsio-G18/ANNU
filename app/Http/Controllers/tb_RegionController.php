<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_region;

class tb_RegionController extends Controller
{
    //
    public function aff_reg(){
        $tb_regions=tb_region::all();
        return view('region.index', compact('tb_regions'));
    }
    
    //Ajouter une region
    public function ajout_reg(){
        return view('region.ajouter');
    }

    public function recherche_reg(Request $request)
    {
        // Obtenir la requête de recherche
        $search = $request->input('search');

        // Rechercher les départements correspondants
        $tb_regions = tb_Region::query()
            ->when($search, function ($query, $search) {
                return $query->where('tb_libelle_reg', 'like', "%{$search}%");
            })
            ->get();

        // Retourner la vue avec les résultats de recherche
        return view('search', compact('tb_regions'));
    }
}
