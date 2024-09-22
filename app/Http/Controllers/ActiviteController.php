<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    //
    public function aff_act(){
        return view('activite.index');
    }
}
