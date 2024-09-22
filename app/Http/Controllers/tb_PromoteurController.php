<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tb_PromoteurController extends Controller
{
    //
    public function aff_pro(){
        return view('promoteur.index');
    }
}
