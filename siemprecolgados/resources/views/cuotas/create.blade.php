@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('cuotas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title is-3 ">Crear Cutoas</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Concepto</label>
                            <input type="text" value="" name="concepto" placeholder="Concepto" class="input">
                            <label class="label">Fecha de Emisión</label>
                            <input type="date" value="" name="fecha_emision" placeholder="Fecha de emisión" class="input">
                            <label class="label">Importe</label>
                            <input type="text" value="" name="importe" placeholder="Importe" class="input"><br>


                        </div>
                        <div class="column">
                            <label class="label">Pagada</label>
                            <label class="radio">
                        <input name="pagada" type="radio" value="1" class="radio">
                    Si
                        </label>
                        <label class="radio">
                      <input name="pagada" type="radio" value="0">
                      No
                    </label>
                            <label class="label">Fecha de Pago</label>
                            <input type="date" value="" name="fecha_pago" placeholder="Fecha de Pago" class="input"><br>
                            <label class="label">Notas</label>
                            <input type="text" value="" name="notas" placeholder="Notas" class="input"><br>
                            <label class="label">Cliente_id</label>
                            <select name="cliente_id" id="cliente_id" class="select">
                                @foreach ( $clientes as $cliente )
                                <option value="{{$cliente->id}}">{{$cliente->nombre}}(  {{$cliente->correo}}  )</option>
                                @endforeach      
                                </select><br><br>
                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
