<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Undefined;

class preciosController extends Controller
{
    public function precios($pp){
        if ( is_numeric($pp) && $pp >= 0){

            $total = 0;
            $d = 0;
            $descuento = 0;
            if($pp < 100000){
                return 'Este producto no tiene descuento';
            }
            elseif( $pp >= 100000 && $pp <= 150000){
                $descuento = 2;
                $total = $pp * 0.98;

            }

            elseif( $pp >= 150000 && $pp <= 300000){
                $descuento = 3;
                $total = $pp * 0.97;

            }
            elseif( $pp >= 300000 && $pp <= 500000){
                $descuento = 4;
                $total = $pp * 0.96;

            }
            elseif( $pp >500000 ){
                $descuento = 5;
                $total = $pp * 0.95;

            }
            return 'El descuento del producto es del '. $descuento . '% y el total a pagar es: ' . $total;
        }
        else {
            return 'Opción invalida';
        }


    }

    public function getIva($art, $vart){
        define("IVA", 0.19);

        $iva = IVA * $vart;
        $vtotal = $vart + $iva;


        return 'El artículo '. $art . ' sin IVA cuesta $'. $vart.
        ' y el precio del IVA '.'('.IVA.'%)'.' es de $'. $iva.
        ' El total a pagar por el articulo es de $'.$vtotal;

    }


}
