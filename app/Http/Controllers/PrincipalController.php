<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Principal(){
        $vistas =view('principal');
    return $vistas;
    }
}
