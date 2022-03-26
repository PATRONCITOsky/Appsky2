@extends('layouts.app')

@section('titulo', 'Editar docente')

@section('contenido')
    <br>
    <h3 class="text-">Editar información Docente</h3>
    {{-- se utiliza el atributo enctype para poder subir archivos --}}
    <form action="/docentes/{{ $cursito->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombredocente">Modifique el Nombre del docente</label>
            <input name="nombre" type="text" class="form-control" id="nombrecurso" value="{{ $cursito->nombre }}">
        </div>
        <div class="form-group">
            <label for="apellidosdocente">Modifique los apellidos del docente</label>
            <input name="apellidos" class="form-control" id="apellidosdocente" value="{{ $cursito->apellidos }}">
        </div>
        <div class="form-group">
            <label for="titulodocente">Modifique el titulo del docente</label>
            <input name="titulo" class="form-control" id="titulodocente" value="{{ $cursito->titulo }}">
        </div>
        <div class="form-group">
            <label for="cursodocente">Modifique el titulo del docente</label>
            <input name="cursoAsociado" class="form-control" id="cursodocente" value="{{ $cursito->cursoAsociado }}">
        </div>
        <div class="form-group">
            <label for="direccionImagen">Cargar foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <button name="descripcion" type="submit" class="btn btn-info">Guardar</button>
    </form>
@endsection
