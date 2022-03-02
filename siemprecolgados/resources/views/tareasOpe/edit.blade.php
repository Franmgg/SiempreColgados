@extends('layaout')
@section('cuerpo')



<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('tareasOpe.update',$tarea->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="title is-3 ">Modificar Tarea</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{ old('nombre',$tarea->nombre) }}" name="nombre" placeholder="Nombre" class="input" disabled>
                        @error('nombre')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">CIF</label>
                        <input type="text" value="{{ old('cif',$tarea->cif)}}" name="cif" placeholder="CIF" class="input" disabled>
                        @error('cif')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Pais</label>
                        <input type="text" value="{{ old('pais',$tarea->paises->nombre)}}" name="pais" placeholder="Pais" class="input" disabled>
                        @error('pais')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Correo</label>
                        <input type="email" value="{{old('correo',$tarea->correo)}}" name="correo" placeholder="Correo" class="input" disabled>
                        @error('correo')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Telefono</label>
                        <input type="text" value="{{ old('telefono',$tarea->telefono)}}" name="telefono" placeholder="Telefono" class="input" disabled>
                        @error('telefono')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Cuenta corriente</label>
                        <input type="text" value="{{ old('cuenta_corriente',$tarea->cuenta_corriente)}}" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input" disabled>
                        @error('cuenta_corriente')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="column">
                        <label class="label">Descripcion</label>
                        <input type="textarea" value="{{old('descripcion',$tarea->descripcion)}}" name="descripcion" placeholder="Descripción" class="input"><br>
                        @error('descripcion')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <br>
                        <label class="checkbox"><h3 class="title is-5">Terminado:</h3>     </label>
                        <input type="checkbox" value="{{old('check', $tarea->check) }}" name="check"><br>
                        <hr>
                        <a href="{{ URL::previous() }}" class="button">Volver</a>
                        <button type="submit" class="button is-primary">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @endsection
