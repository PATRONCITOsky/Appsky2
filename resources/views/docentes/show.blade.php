@extends('layouts.app')
@section('titulo', 'destalle docentes')
@section('contenido')

        <div class=" text-center">
            <img style=" height: 400px; width:500px; margin-top:40px;" src="{{ Storage::url($cursito->foto) }}"
                class="card-img-top mx-auto d-block" alt="">
            <div class="card-body ">
                <p class="card-text">{{ $cursito->nombre }}</p>
                <p class="card-text">{{ $cursito->cursoAsociado }}</p>

            </div>
            <a href="/docentes/{{$cursito->id}}/edit" class="btn btn-success">Editar Curso</a>
        </div>

@endsection
