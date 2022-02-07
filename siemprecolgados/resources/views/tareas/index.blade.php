@extends('layaout')
@section('cuerpo')

    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-1 is-offset-1">
            <div class="box">
                <div class="button is-primary">
                    <a style="text-decoration: inherit;color: black;" href="{{ route('clientes.create') }}"> <b> Añadir</b></a>
                </div>
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
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->cif }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>{{ $cliente->moneda }}</td>
                                <td>{{ $cliente->importe }}</td>
                                <td>{{ $cliente->pais }}</td>
                                <td>
                                   
                                  
                                        <a class="button is-warning" href="{{route('clientes.edit',$cliente->id)}}">Editar</a>
                                        <a class="button is-danger" href="{{route('clientes.showDelete',$cliente->id)}}">Eliminar</a>

                                        
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <nav class="pagination is-small" role="navigation" aria-label="pagination">
                    <ul class="pagination-list">
                        @for ($i = 1; $i <= $clientes->lastPage(); $i++)
                            <li><a class="pagination-link @if($clientes->currentPage()==$i)is-current @endif" href="{{ $clientes->url($i) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
