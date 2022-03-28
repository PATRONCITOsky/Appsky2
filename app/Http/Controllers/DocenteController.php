<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocentesRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular la información de la tabla cursos
        // a su vez el array actuará como un objeto
        $cursito = docente::all();
        /*el método compact pide un parámetro el cual será nuesto array
        llamado cursito y va acompañando la vista que estamos llamando*/
        return view('docentes.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocentesRequest $request)
    {
        /*implementamos validaciones
        $validacionDatos = $request->validate([
            'nombre'=>'required|max:10',
            //'description'=>'required|max:250',
            'direccionImagen'=>'required|image'
        ]);*/


        //con el método all() veo toda la información
        //return $request->all();
        /*obtuvimos el dato de lo que el usuario envia por el input
        cuyo name es 'nombre'*/
        //return $request->input('nombre');
        //cremos una nueva instancia del modelo
        $cursito = new docente();
        // esto me permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->apellidos = $request->input('apellidos');
        $cursito->titulo = $request->input('titulo');
        $cursito->cursoAsociado = $request->input('cursoAsociado');

        if($request->hasFile('foto')){
            $cursito->foto =$request->file('foto')->store('public');
        }

        $cursito->save();
        return 'Se guardo';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con información del registro
        //del id que viajó en la solicitud
        $cursito = docente::find($id);
        //asocia el array al view usando compact
        return view('docentes.show',compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = docente::find($id);
        return view('docentes.edit', compact('cursito'));
        //return $cursito;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // con fill lleno todos campos de la tabla cursos
        //cpm la info que viene desde el request
        // exepto lo que viene desde el input llamado imagen
        $cursito = docente::find($id);

        $cursito -> fill($request->except('foto'));
        if($request->hasFile('foto')){
            $cursito->foto =$request->file('foto')->store('public');
        }
        $cursito->save();
        return ('actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
