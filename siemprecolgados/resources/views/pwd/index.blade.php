@extends('layaout')
@section('cuerpo')

<div class="columns">

    <div class="column is-half is-offset-one-quarter" style="margin-top: 2%" >
        <div class="box">
            <h1 class="title is-1" style="text-align: center">Configuración de usuario</h1>
            <form action="{{ route('pwd.update',Auth::user()) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label class="label">Nuevo correo</label>
        <input type="text" class="input" value="{{Auth::user()->email}}" placeholder="Inserte el nuevo correo" name="correo" style="text-align: center">
        @error('correo')
        <span class="tag is-danger is-light">{{$message}}</span>
        @enderror
        <br><br>
        <label class="label">Nueva contraseña</label>
        <input type="text" class="input" value="" name="password" placeholder="Inserte la nueva contraseña"  style="text-align: center">
        @error('password')
        <span class="tag is-danger is-light">El campo contraseña es incorrecto o esta vacío</span>
        @enderror
        <br><br>
        <input type="submit" value="Guardar" class="button is-primary">
    </form>
    </div>
</div>
</div>




@endsection