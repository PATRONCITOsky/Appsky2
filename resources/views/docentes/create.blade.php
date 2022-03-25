{{--para poder heredar la plantilla necesito usar @extends--}}
@extends('layouts.app')
@section('titulo','Crear registros docentes')

@section('contenido')
<br>
<h3 class="text-">Agregar Docente</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/docentes" method="POST" enctype="multipart/form-data">
   @csrf

   @if ($errors->any())
        @foreach ( $errors->all() as $alert )

            <div class="alert alert-danger" role="alert">
                <ul>
                    <li>{{$alert}}</li>
                </ul>
            </div>

        @endforeach

   @endif

   <div class="form-group">
       <label for="nombrecurso">Nombre del docente</label>
       <input name="nombre" type="text" class="form-control" id="nombredocente" >
   </div>
   <div class="form-group">
       <label for="apellidodocente">Apellido del docente</label>
       <input  name="apellido" class="form-control" id="apellidodocente" >
   </div>
   <div class="form-group">
    <label for="direccionImagen">Cargar imagen</label>
    <input  type="file" name="direccionImagen"  id="direccionImagen" >
</div>
   <button name="descripcion" type="submit" class="btn btn-info">Crear</button>
</form>
@endsection
{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="icon" href="https://img.pixers.pics/pho_wat(s3:700/FO/33/04/38/20/700_FO33043820_1e6678fbb526ce4a652723a84836a088.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/vinilos-fuego-letra-h.jpg.jpg">
        <title>Vista de registros</title>

    </head>
    <body> --}}
        {{-- Boostrap requiere un div container para mostrar
             los elementos centrados y ordenados--}}
            {{--
             <div class="container">
                 <br>
                 <h3 class="text-">Crear Nuevo Curso</h3>
                <form action="/cursos" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombrecurso">Nombre del curso</label>
                        <input name="nombre" type="text" class="form-control" id="nombrecurso" >
                    </div>
                    <div class="form-group">
                        <label for="descripcioncurso">Descripción del curso</label>
                        <input type="text" class="form-control" id="descripcioncurso" >
                    </div>
                    <button name="descripcion" type="submit" class="btn btn-info">Crear</button>
                </form>
             </div>
    </body>

</html>--}}


