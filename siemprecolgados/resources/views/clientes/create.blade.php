@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title is-3 ">Crear Cliente</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Nombre</label>
                            <input type="text" value="" name="nombre" placeholder="Nombre" class="input">
                            @error('nombre')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">CIF</label>
                            <input type="text" value="" name="cif" placeholder="CIF" class="input">
                            @error('cif')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">Telefono</label>
                            <input type="text" value="" name="telefono" placeholder="Telefono" class="input"><br>
                            @error('telefono')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="column">
                            <label class="label">Correo</label>
                            <input type="email" value="" name="correo" placeholder="Correo" class="input"><br>
                            @error('correo')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">Cuenta Corriente</label>
                            <input type="text" value="" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                            @error('cuenta_corriente')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">Pais</label>
                            <select name="pais" id="pais" class="select">
                            @foreach ( $paises as $pais )
                            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
                            @endforeach      
                            </select><br>
                            @error('pais')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <label class="label">Moneda</label>
                            <select name="moneda" id="" class="select">
                            
                                @foreach ( $paises as $pais )
                            <option value="{{$pais->iso_moneda}}">{{$pais->nombre_moneda}}</option>
                            @endforeach      
                            </select><br><br>
                            @error('moneda')
                            <span class="tag is-danger is-light">{{$message}}</span>
                            @enderror
                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
