<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
//invocar el controlador desde su ruta
use App\Http\Controllers\miprimerController;

use App\Http\Controllers\heladosController;

use App\Http\Controllers\preciosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Lo primero  es nombrar la ruta entre comilla simple con
el nombre que se desea darle. Luego va la coma, seguido de la función y el return.

*/
Route::get('/miprimeraruta', function(){
    return 'Holis';
});

/*
Los parametros son muy importantes en las rutas de las páginas web y los
indicamos entre llaves{}. Los parametros van dentro de la misma ruta
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hola soy ' . $nombre;
});

Route::get('/suma/{n1}/{n2}', function($n1, $n2){
    return 'El resulado de la suma es: ' . $n1+$n2;
});

Route::get('/suma2/{n1}/{n2}', function($n1, $n2){
    return 'El resulado de sumar : ' . $n1 .' + '. $n2 . ' = '. $n1+$n2;
});

Route::get('sapoperro/{a}/{b}', [miprimerController::class, 'suma'] );

Route::get('carrera/{cosa}', [miprimerController::class, 'carrera'] );

/*La clase va igual que el metodo entre corchetes
La clase va acompañada de ::class, y el método tiene llamarse igual a
como está en la clase y entre comilla simple
*/
Route::get('heladeria/{opcion}', [heladosController::class, 'helado'] );

Route::get('precio/{pp}', [preciosController::class, 'precios'] );

Route::get('iva/{art}/{piva}', [preciosController::class, 'getIva'] );

Route::resource('cursos', cursoController::class);
