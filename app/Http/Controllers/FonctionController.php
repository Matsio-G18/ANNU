<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FonctionController extends Controller
{
    //
    public function aff_fonct(){
        return view('fonction.index');
    }
}
