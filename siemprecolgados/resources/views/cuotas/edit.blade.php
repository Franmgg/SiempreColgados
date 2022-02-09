@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('cuotas.update',$cuotas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h1 class="title is-3 ">Crear Cuotas</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Concepto</label>
                            <input type="text" value="{{ old('concepto', $cuota->concepto) }}" name="nombre" placeholder="Nombre" class="input">
                            <label class="label">Fecha de emision</label>
                            <input type="text" value="{{ old('fecha_emision', $cuota->fecha_emision) }}" name="cif" placeholder="CIF" class="input">
                            <label class="label">Importe</label>
                            <input type="text" value="{{ old('importe', $cuota->importe) }}" name="telefono" placeholder="Telefono" class="input"><br>
                            <label class="label">Pagada</label>
                            <input type="text" value="{{ old('pagada', $cuota->pagada) }}" name="importe" placeholder="Importe" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Fecha de Pago</label>
                            <input type="text" value="{{ old('fecha_pago', $cuota->fecha_pago) }}" name="correo" placeholder="Correo" class="input"><br>
                            <label class="label">Notas</label>
                            <input type="text" value="{{ old('notas', $cuota->notas) }}" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                            <label class="label">Cliente_id</label>
                            <input type="text" value="{{ old('cliente_id', $cuota->cliente_id) }}" name="pais" placeholder="Pais" class="input"><br>
                            <hr>
                            <button type="submit" class="button">Volver</button>
                            <button type="submit" class="button is-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    @endsection
