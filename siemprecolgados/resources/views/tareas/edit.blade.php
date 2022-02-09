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
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->cliente_id) }}" name="cliente_id" placeholder="Cliente_id" class="input">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">Telefono</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->telefono) }}" name="telefono" placeholder="Telefono" class="input">
                        <label class="label">Descripción</label>
                        <input type="textarea" value="{{ old('cuenta_corriente', $tarea->descripcion) }}" name="descripcion" placeholder="Descripción" class="input">
                        <label class="label">Correo</label>
                        <input type="email" value="{{ old('cuenta_corriente', $tarea->correo) }}" name="correo" placeholder="Correo" class="input">
                        <label class="label">Dirección</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->dir) }}" name="dir" placeholder="Dirección" class="input">


                    </div>
                    <div class="column">
                        <label class="label">Estado</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->estado) }}" name="estado" placeholder="Estado" class="input"><br>
                        <label class="label">Fecha de Creación</label>
                        <input type="date" value="{{ old('cuenta_corriente', $tarea->fecha_crea) }}" name="fecha_crea" placeholder="Fecha de Creación" class="input"><br>
                        <label class="label">Fecha de Realización</label>
                        <input type="date" value="{{ old('cuenta_corriente', $tarea->fecha_rea) }}" name="fecha_rea" placeholder="Pais" class="input"><br>
                        <label class="label">Anotaciones anteriores</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->anotaciones_anteriores) }}" name="anotaciones_anteriores" placeholder="Anotaciones anteriores" class="input"><br>
                        <label class="label">Anotaciones posteriores</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->anotaciones_posteriores) }}" name="anotaciones_posteriores" placeholder="Anotaciones Posteriores" class="input"><br>
                        <label class="label">Fichero</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->fichero) }}" name="fichero" placeholder="fichero" class="input"><br>
                        <hr>
                        <button type="submit" class="button">Volver</button>
                        <button type="submit" class="button is-primary">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection
