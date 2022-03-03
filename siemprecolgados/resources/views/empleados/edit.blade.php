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
                            <input type="text" value="{{ old('name', $empleado->name) }}" name="name" placeholder="Nombre" class="input">
                            @error('name')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">Telefono</label>
                            <input type="text" value="{{ old('telefono', $empleado->telefono) }}" name="telefono" placeholder="telefono" class="input"><br>
                            @error('telefono')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror


                        </div>
                        <div class="column">
                            <label class="label">Tipo</label>
                            <input type="text" value="{{ old('privilege', $empleado->privilege) }}" name="privilege" placeholder="Privilegio" class="input"><br>
                            @error('privilege')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror

                            <label class="label">email</label>
                            <input type="text" value="{{ old('email', $empleado->email) }}" name="email" placeholder="Correo" class="input"><br>
                            @error('email')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror

                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
