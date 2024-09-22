<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrieController extends Controller
{
    //
    public function aff_ind(){
        return view('industrie.index');
    }
}
