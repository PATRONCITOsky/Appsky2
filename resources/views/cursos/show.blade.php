@extends('layouts.app')
@section('titulo', 'destalle curso')
@section('contenido')

        <div class=" text-center">
            <img style=" height: 400px; width:500px; margin-top:40px;" src="{{ Storage::url($cursito->imagen) }}"
                class="card-img-top mx-auto d-block" alt="">
            <div class="card-body ">
                <p class="card-text">{{ $cursito->description }}</p>
                <p class="card-text">{{ $cursito->horas }}</p>
            </div>
            <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar Curso</a><br>
            <br>
            <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

        </div>

@endsection
