@extends('layouts.app')

@section('titulo', 'listado de docentes')

@section('contenido')
    <br><br>
    <h3 class="text-center">Listado de docentes</h3>

    {{-- foreach es un ciclo o bucle especial para trabajar con arrays --}}
    {{-- recorderis: existen ciclos como while, for, do while, foreach --}}
    <div class="row">{{-- ya tenemos la fila --}}
        @foreach ($cursito as $hoover)
            <div class="col">{{-- abrimos columna --}}



                {{-- para llamar información de php basta con iterpolar las variables
        usando la doble llave --}}
                {{-- <p>{{$hoover}}</p> --}}
                <div class="card text-center" style="width: 18rem; margin-top:30px;">

                    <img  style=" height: 100px; width:200px; margin-top:30px;" src="{{ Storage::url ($hoover->foto) }}" class="card-img-top mx-auto d-block" alt="" >
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $hoover->nombre }}</h5>
                        <p class="card-text">Apellidos: {{ $hoover->apellidos }}</p>
                        <p class="card-text">Titulo: {{ $hoover->titulo }}</p>
                        <p class="card-text">Curso Asociado: {{ $hoover->cursoAsociado }}</p>
                        {{--Se necesita el id para ver un registro en particular--}}
                        <a href="/docentes/{{$hoover->id}}" class="btn btn-success">Acceder</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
