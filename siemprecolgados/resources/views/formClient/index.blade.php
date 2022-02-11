@extends('layaout')
@section('cuerpo')



<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="title is-3 ">Crear aviso</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">Password</label>
                        <input type="password" value="" name="password" placeholder="Password" class="input">
                        <label class="label">DNI</label>
                        <input type="text" value="" name="dni" placeholder="DNI" class="input"><br>
                        <label class="label">Tipo</label>
                        <input type="text" value="" name="tipo" placeholder="Tipo" class="input"><br>
                    </div>
                    <div class="column">
                        <label class="label">Correo</label>
                        <input type="email" value="" name="correo" placeholder="Correo" class="input"><br>
                        <label class="label">Telefono</label>
                        <input type="text" value="" name="telefono" placeholder="telefono" class="input"><br>
                        <label class="label">Direccion</label>
                        <input type="text" value="" name="direccion" placeholder="direccion" class="input"><br>
                        <label class="label">Fecha de Alta</label>
                        <input type="date" value="" name="fecha_alta" placeholder="Fecha de Alta" class="input"><br>
                        <hr>
                        <button type="submit" class="button">Volver</button>
                        <button type="submit" class="button is-primary">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
