@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('cuotas.update',$cuota->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h1 class="title is-3 ">Modificar Cuotas</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Concepto</label>
                            <input type="text" value="{{ old('concepto', $cuota->concepto) }}" name="concepto" placeholder="Concepto" class="input">
                            <label class="label">Fecha de emision</label>
                            <input type="date" value="{{ old('fecha_emision', $cuota->fecha_emision) }}" name="fecha_emision" placeholder="Fecha de Emisión" class="input">
                            <label class="label">Importe</label>
                            <input type="text" value="{{ old('importe', $cuota->importe) }}" name="importe" placeholder="Importe" class="input"><br>
                            <label class="label">Pagada</label>
                            <input type="text" value="{{ old('pagada', $cuota->pagada) }}" name="pagada" placeholder="Pagada" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Fecha de Pago</label>
                            <input type="date" value="{{ old('fecha_pago', $cuota->fecha_pago) }}" name="fecha_pago" placeholder="Fecha de pago" class="input"><br>
                            <label class="label">Notas</label>
                            <input type="text" value="{{ old('notas', $cuota->notas) }}" name="notas" placeholder="Notas" class="input"><br>
                            <label class="label">Cliente_id</label>
                            <input type="text" value="{{ old('cliente_id', $cuota->cliente_id) }}" name="cliente_id" placeholder="Cliente id" class="input"><br>
                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    @endsection
