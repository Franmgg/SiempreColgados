@extends('layaout')
@section('cuerpo')
<br>
    <div class="columns is-mobile" >       
        <div class="column is-full">

            <div class="box">
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>CIF</th>
                            <th>Pais</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Cuenta Corriente</th>
                            <th>Descripción</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->nombre }}</td>
                                <td>{{ $tarea->cif }}</td>
                                <td>{{ $tarea->paises->nombre }}</td>
                                <td>{{ $tarea->correo }}</td>
                                <td>{{ $tarea->telefono }}</td>
                                <td>{{ $tarea->cuenta_corriente }}</td>
                                <td>{{ $tarea->descripcion }}</td>
                                <td>
                                    <form action="{{ route('avisos.destroy', $tarea->id) }}" method="Post">
                                        <a class="button is-warning"
                                            href="{{ route('avisos.edit', $tarea->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger"
                                            onclick="return confirm('¿Seguro que quieres borrar a {{ $tarea->nombre }} ?')"
                                            href="{{ route('avisos.destroy', $tarea->id) }}">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <nav class="pagination is-small" role="navigation" aria-label="pagination">
                    <ul class="pagination-list">
                        @for ($i = 1; $i <= $tareas->lastPage(); $i++)
                            <li><a class="pagination-link @if($tareas->currentPage()==$i)is-current @endif" href="{{ $tareas->url($i) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
