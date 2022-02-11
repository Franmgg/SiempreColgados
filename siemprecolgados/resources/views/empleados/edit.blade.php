@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('empleados.update',$empleado->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h1 class="title is-3 ">Modificar Empleado</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Nombre</label>
                            <input type="text" value="{{ old('nombre', $empleado->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                            <label class="label">Password</label>
                            <input type="text" value="{{ old('password', $empleado->password) }}" name="password" placeholder="Password" class="input">
                            <label class="label">DNI</label>
                            <input type="text" value="{{ old('dni', $empleado->dni) }}" name="dni" placeholder="DNI" class="input"><br>
                            <label class="label">Correo</label>
                            <input type="text" value="{{ old('correo', $empleado->correo) }}" name="correo" placeholder="Correo" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Telefono</label>
                            <input type="text" value="{{ old('telefono', $empleado->telefono) }}" name="telefono" placeholder="Telefono" class="input"><br>
                            <label class="label">Dirección</label>
                            <input type="text" value="{{ old('direccion', $empleado->direccion) }}" name="direccion" placeholder="Dirección" class="input"><br>
                            <label class="label">Fecha de Alta</label>
                            <input type="text" value="{{ old('fecha_alta', $empleado->fecha_alta) }}" name="fecha_alta" placeholder="Fecha de alta" class="input"><br>
                            <label class="label">Tipo</label>
                            <input type="text" value="{{ old('tipo', $empleado->tipo) }}" name="tipo" placeholder="Tipo" class="input"><br>
                            <hr>
                            <button type="submit" class="button">Volver</button>
                            <button type="submit" class="button is-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
