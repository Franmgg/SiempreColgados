@extends('layaout')
@section('cuerpo')



<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('avisos.update',$tarea->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h1 class="title is-3 ">Editar Aviso</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{ old('nombre', $tarea->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">CIF</label>
                        <input type="text" value="{{ old('cif', $tarea->cif) }}" name="cif" placeholder="CIF" class="input">
                        <label class="label">Pais</label>
                        <input type="text" value="{{ old('pais', $tarea->paises->nombre) }}" name="pais" placeholder="Pais" class="input">
                        <label class="label">Correo</label>
                        <input type="email" value="{{ old('correo', $tarea->correo) }}" name="correo" placeholder="Correo" class="input">
                    </div>
                    <div class="column">
                        <label class="label">Telefono</label>
                        <input type="text" value="{{ old('telefono', $tarea->telefono) }}" name="telefono" placeholder="Telefono" class="input">
                        <label class="label">cuenta_corriente</label>
                        <input type="text" value="{{ old('cuenta_corriente', $tarea->cuenta_corriente) }}" name="cuenta_corriente" placeholder="Cuenta corriente" class="input">
                        <label class="label">descripcion</label>
                        <input type="text" value="{{ old('descripcion', $tarea->descripcion) }}" name="descripcion" placeholder="Descripcion" class="input"><br>
                        <br>
                        <div class="select">
                        <select name="user_id" id="user_id">
                            @foreach ($usuario as $usuarios )
                                <option value="{{$usuarios->id}}">{{$usuarios->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <hr>
                        <a href="{{ URL::previous() }}" class="button">Volver</a>
                        <button type="submit" class="button is-primary">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection
