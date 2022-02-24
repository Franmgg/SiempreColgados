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
                            <label class="label">CIF</label>
                            <input type="text" value="" name="cif" placeholder="CIF" class="input">
                            <label class="label">Telefono</label>
                            <input type="text" value="" name="telefono" placeholder="Telefono" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Correo</label>
                            <input type="email" value="" name="correo" placeholder="Correo" class="input"><br>
                            <label class="label">Cuenta Corriente</label>
                            <input type="text" value="" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                            <label class="label">Pais</label>
                            <select name="pais" id="pais" class="select">
                            @foreach ( $paises as $pais )
                            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
                            @endforeach      
                            </select><br>
                            <label class="label">Moneda</label>
                            <select name="moneda" id="" class="select">
                            @foreach ( $paises as $pais )
                            <option value="{{$pais->iso_moneda}}">{{$pais->nombre_moneda}}</option>
                            @endforeach      
                            </select><br><br>
                            <hr>
                            <button type="submit" class="button">Volver</button>
                            <button type="submit" class="button is-primary">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
