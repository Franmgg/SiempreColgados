@extends('layaout')
@section('cuerpo')

<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-1 is-offset-1">
    <div class="box">
        <button class="button is-primary">añadir</button>    
    </div>
</div>
    <div class="column is-7 is-offset-1">
        
<div class="box">
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr> 
                    <th>Nombre</th>
                    <th>cif</th>
                    <th>telefono</th>
                    <th>correo</th>
                    <th>moneda</th>
                    <th>importe</th>
                    <th>Pais</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente )
                    <tr>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->cif}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->moneda}}</td>
                        <td>{{$cliente->importe}}</td>
                        <td>{{$cliente->pais}}</td>
                        <td>
                            <form method="POST" action="{{ url("ListaCliente/{$cliente->id}") }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger">Eliminar</button>
                              </form>
                              <form method="POST" action="{{ url("ListaCliente/{$cliente->id}") }}">
                                @csrf
                                @method('update')
                                <button type="submit" class="button is-warning">Modificar</button>
                              </form>
                          
                        </td>
                    </tr>
                    
                @endforeach
        
        
        
            </tbody>
        </table>
    </div>
    </div>

</div>


@endsection