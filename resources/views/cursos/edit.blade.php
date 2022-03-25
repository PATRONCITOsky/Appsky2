@extends('layouts.app')

@section('titulo','Editar curso')

@section('contenido')
<br>
<h3 class="text-">Editar información curso</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
   @csrf
   <div class="form-group">
       <label for="nombrecurso">Modifique el Nombre del curso</label>
       <input name="nombre" type="text" class="form-control" id="nombrecurso" value="{{$cursito->nombre}}" >
   </div>
   <div class="form-group">
       <label for="descripcioncurso">Modifique la Descripción del curso</label>
       <input  name="description" class="form-control" id="description" value="{{$cursito->description}}"  >
   </div>
   <div class="form-group">
    <label for="direccionImagen">Cargar imagen</label>
    <input  type="file" name="direccionImagen"  id="direccionImagen"  >
</div>
   <button name="descripcion" type="submit" class="btn btn-info">Guardar</button>
</form>
@endsection
