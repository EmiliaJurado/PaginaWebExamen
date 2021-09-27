<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function manual1(){
    $vistas = view('manual/info_uno');
    return $vistas;
    }
    public function manual2(){
    $vistas = view('manual/info_dos');
    return $vistas;

    }
    public function manual3(){
    $vistas = view('manual/info_tres');
    return $vistas;
    
    }
    public function manual4(){
    $vistas = view('manual/info_cuatro');
    return $vistas;
    
    }
    public function manual5(){
    $vistas = view('manual/info_cinco');
    return $vistas;
    
    }
    public function manual6(){
        $vistas = view('manual/info_seis');
        return $vistas;
        
        }

}
