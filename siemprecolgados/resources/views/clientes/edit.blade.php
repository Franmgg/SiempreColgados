@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('clientes.update',$cliente->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h1 class="title is-3 ">Modificar Cliente</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Nombre</label>
                            <input type="text" value="{{ old('nombre', $cliente->nombre) }}" name="nombre" placeholder="Nombre" class="input">
                            <label class="label">CIF</label>
                            <input type="text" value="{{ old('cif', $cliente->cif) }}" name="cif" placeholder="CIF" class="input">
                            <label class="label">Telefono</label>
                            <input type="text" value="{{ old('telefono', $cliente->telefono) }}" name="telefono" placeholder="Telefono" class="input"><br>
                            <label class="label">Importe</label>
                            <input type="text" value="{{ old('moneda', $cliente->importe) }}" name="importe" placeholder="Importe" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Correo</label>
                            <input type="text" value="{{ old('correo', $cliente->correo) }}" name="correo" placeholder="Correo" class="input"><br>
                            <label class="label">Cuenta Corriente</label>
                            <input type="text" value="{{ old('cuenta_corriente', $cliente->cuenta_corriente) }}" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                            <label class="label">Pais</label>
                            <input type="text" value="{{ old('pais', $cliente->pais) }}" name="pais" placeholder="Pais" class="input"><br>
                            <label class="label">Moneda</label>
                            <input type="text" value="{{ old('moneda', $cliente->moneda) }}" name="moneda" placeholder="Moneda" class="input"><br>
                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
