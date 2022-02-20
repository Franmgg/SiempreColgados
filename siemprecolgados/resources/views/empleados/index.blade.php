@extends('layaout')
@section('cuerpo')

    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-1 is-offset-1">
            <div class="box">
                <div class="button is-primary">
                    <a style="text-decoration: inherit;color: black;" href="{{ route('empleados.create') }}"> <b> Añadir</b></a>
                </div>
            </div>
        </div>
        <div class="column is-7 is-offset-1">

            <div class="box">
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>telefono</th>
                            <th>correo</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->name }}</td>
                                <td>{{ $empleado->telefono }}</td>
                                <td>{{ $empleado->email }}</td>
                                <td>@if($empleado->privilege=="1")Admin @else Operario @endif</td>
                                <td>{{ $empleado->created_at }}</td>
                               
                                <td>
                                    <a class="button is-warning" href="{{route('empleados.edit',$empleado->id)}}">Editar</a>
                                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" onclick="return confirm('¿Seguro que quieres borrar a {{$empleado->nombre}} ?')" href="{{route('empleados.destroy',$empleado->id)}}">Eliminar</button>
                                </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <nav class="pagination is-small" role="navigation" aria-label="pagination">
                    <ul class="pagination-list">
                        @for ($i = 1; $i <= $empleados->lastPage(); $i++)
                            <li><a class="pagination-link @if($empleados->currentPage()==$i)is-current @endif" href="{{ $empleados->url($i) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
