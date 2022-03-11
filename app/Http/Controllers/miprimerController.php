<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miprimerController extends Controller
{
    public function suma($a,$b){
        return 'El resulatado de sumar '.$a .' + '. $b. ' = '. $a+$b;
    }

    public function carrera($cosa){
        return 'Mi carrera es '. $cosa;
    }
}
