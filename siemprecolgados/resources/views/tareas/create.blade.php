@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('tareas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title is-3 ">Crear Tarea</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Cliente_id</label>
                            <input type="text" value="" name="cliente_id" placeholder="Cliente_id" class="input">
                            <label class="label">Nombre</label>
                            <input type="text" value="" name="nombre" placeholder="Nombre" class="input">
                            <label class="label">Telefono</label>
                            <input type="text" value="" name="telefono" placeholder="Telefono" class="input">
                            <label class="label">Descripción</label>
                            <input type="textarea" value="" name="descripcion" placeholder="Descripción" class="input">
                            <label class="label">Correo</label>
                            <input type="email" value="" name="correo" placeholder="Correo" class="input">
                            <label class="label">Dirección</label>
                            <input type="text" value="" name="dir" placeholder="Dirección" class="input">


                        </div>
                        <div class="column">
                            <label class="label">Estado</label>
                            <input type="text" value="" name="estado" placeholder="Estado" class="input"><br>
                            <label class="label">Fecha de Creación</label>
                            <input type="date" value="" name="fecha_crea" placeholder="Fecha de Creación" class="input"><br>
                            <label class="label">Fecha de Realización</label>
                            <input type="date" value="" name="fecha_rea" placeholder="Pais" class="input"><br>
                            <label class="label">Anotaciones anteriores</label>
                            <input type="text" value="" name="anotaciones_anteriores" placeholder="Anotaciones anteriores" class="input"><br>
                            <label class="label">Anotaciones posteriores</label>
                            <input type="text" value="" name="anotaciones_posteriores" placeholder="Anotaciones Posteriores" class="input"><br>
                            <label class="label">Fichero</label>
                            <input type="text" value="" name="fichero" placeholder="fichero" class="input"><br>
                            <hr>
                            <button type="submit" class="button is-primary">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
