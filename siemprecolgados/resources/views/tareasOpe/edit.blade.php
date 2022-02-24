@extends('layaout')
@section('cuerpo')



<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('tareasOpe.update',$tarea->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="title is-3 ">Crear Tarea</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{ old('nombre', $tarea->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">CIF</label>
                        <input type="text" value="{{ old('cif', $tarea->cif) }}" name="cif" placeholder="CIF" class="input">
                        <label class="label">Pais</label>
                        <input type="text" value="{{ old('pais', $tarea->pais) }}" name="pais" placeholder="Pais" class="input">
                        <label class="label">Correo</label>
                        <input type="email" value="{{ old('correo', $tarea->correo) }}" name="correo" placeholder="Correo" class="input">
                        <label class="label">Telefono</label>
                        <input type="text" value="{{ old('telefono', $tarea->telefono) }}" name="telefono" placeholder="Telefono" class="input">
                        <label class="label">Cuenta corriente</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->cuenta_corriente) }}" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input">


                    </div>
                    <div class="column">
                        <label class="label">Descripcion</label>
                        <input type="textarea" value="{{ old('descripcion', $tarea->descripcion) }}" name="descripcion" placeholder="Descripción" class="input"><br>
                       <br>
                        <label class="checkbox"><h3 class="title is-5">Terminado:</h3>     </label>
                        <input type="checkbox" value="{{ old('check', $tarea->check) }}" name="check"><br>
                   
                        <hr>
                        <button type="submit" class="button">Volver</button>
                        <button type="submit" class="button is-primary">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection
