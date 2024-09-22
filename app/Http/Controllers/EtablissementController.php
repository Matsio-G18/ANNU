<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    //
    public function aff_etab(){

        return view('etablissement.index');
    }
}
