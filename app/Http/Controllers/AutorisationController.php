<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorisationController extends Controller
{
    //
    public function aff_auto(){
        return view('autorisation.index');
    }
}
