<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tb_DirigeantController extends Controller
{
    //
    public function aff_dirigeant(){
        return view('dirigeant.index');
    }
}
