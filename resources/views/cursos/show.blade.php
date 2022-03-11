@extends('layouts.app')
@section('titulo', 'destalle curso')
@section('contenido')

        <div class=" text-center">
            <img style=" height: 400px; width:500px; margin-top:40px;" src="{{ Storage::url($cursito->imagen) }}"
                class="card-img-top mx-auto d-block" alt="">
            <div class="card-body ">
                <p class="card-text">{{ $cursito->description }}</p>
            </div>
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar Curso</a>
        </div>

@endsection
