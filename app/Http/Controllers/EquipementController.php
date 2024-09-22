<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipementController extends Controller
{
    //
    public function aff_equip(){
        return view('equipement.index');
    }
}
