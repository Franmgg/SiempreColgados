@extends('layaout')
@section('cuerpo')



<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('tareas.update',$tarea->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="title is-3 ">Crear Tarea</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Cliente_id</label>
                        <input type="text" value="{{ old('cliente_id', $tarea->cliente_id) }}" name="cliente_id" placeholder="Cliente_id" class="input">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{ old('nombre', $tarea->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">Telefono</label>
                        <input type="text" value="{{ old('telefono', $tarea->telefono) }}" name="telefono" placeholder="Telefono" class="input">
                        <label class="label">Descripción</label>
                        <input type="textarea" value="{{ old('descripcion', $tarea->descripcion) }}" name="descripcion" placeholder="Descripción" class="input">
                        <label class="label">Correo</label>
                        <input type="email" value="{{ old('correo', $tarea->correo) }}" name="correo" placeholder="Correo" class="input">
                        <label class="label">Dirección</label>
                        <input type="text" value="{{ old('dir', $tarea->dir) }}" name="dir" placeholder="Dirección" class="input">


                    </div>
                    <div class="column">
                        <label class="label">Estado</label>
                        <input type="text" value="{{ old('estado', $tarea->estado) }}" name="estado" placeholder="Estado" class="input"><br>
                        <label class="label">Fecha de Creación</label>
                        <input type="datetime-local" value="{{ old('fecha_crea', $tarea->fecha_crea) }}" name="fecha_crea" placeholder="Fecha de Creación" class="input"><br>
                        <label class="label">Fecha de Realización</label>
                        <input type="datetime-local" value="{{ old('fecha_rea', $tarea->fecha_rea) }}" name="fecha_rea" placeholder="Pais" class="input"><br>
                        <label class="label">Anotaciones anteriores</label>
                        <input type="text" value="{{ old('anotaciones_anteriores', $tarea->anotaciones_anteriores) }}" name="anotaciones_anteriores" placeholder="Anotaciones anteriores" class="input"><br>
                        <label class="label">Anotaciones posteriores</label>
                        <input type="text" value="{{ old('anotaciones_posteriores', $tarea->anotaciones_posteriores) }}" name="anotaciones_posteriores" placeholder="Anotaciones Posteriores" class="input"><br>
                        <label class="label">Fichero</label>
                        <input type="text" value="{{ old('fichero', $tarea->fichero) }}" name="fichero" placeholder="fichero" class="input"><br>
                        <hr>
                        <button type="submit" class="button">Volver</button>
                        <button type="submit" class="button is-primary">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection
