<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormeJuridiqueController extends Controller
{
    //
    public function aff_form_jur(){
        return view('forme_juridique.index');
    }
}
