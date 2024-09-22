<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    //
    public function aff_admin(){
        return view('admin.index');
    }
}
