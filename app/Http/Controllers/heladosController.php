<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helado($opc){

        
        //if ($opc >=1 && $opc <= 33){}
        if ($opc == 1 || $opc == 2 || $opc == 3){
            // Se recomienda inicializar las variables
            $valorHelado = 3000;
            $valorTopping = 0;
            $topping = '';
            $valorTotal = 0;

            //Programo la opción 1 chocolate
            if ($opc == 1 ){
                $valorTopping = 500;
                $topping = 'Chocolate';
            }

            elseif ($opc == 2){
                $valorTopping = 1000;
                $topping = 'Brownie';
            }

            elseif ($opc == 3){
                $valorTopping = 1500;
                $topping = 'Dedicatessen';
            }

            $valorTotal = $valorHelado + $valorTopping;
            return 'El topping escogido es: '. $topping . ' y su precio es: ' . $valorTopping. ' El valor total a pagar es: ' . $valorTotal;
        }

        else {
            return 'Opción no valida';
        }
    }
}
