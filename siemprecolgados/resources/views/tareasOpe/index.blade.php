@extends('layaout')
@section('cuerpo')


    <div class="columns is-mobile" >       
        <div class="column is-full">

            <div class="box">
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Cliente_id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Descripcion</th>
                            <th>Correo</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Realización</th>
                            <th>Anotaciones anteriores</th>
                            <th>Anotaciones posteriores</th>
                            <th>Fichero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->cliente_id }}</td>
                                <td>{{ $tarea->nombre }}</td>
                                <td>{{ $tarea->telefono }}</td>
                                <td>{{ $tarea->descripcion }}</td>
                                <td>{{ $tarea->correo }}</td>
                                <td>{{ $tarea->dir }}</td>
                                <td>{{ $tarea->estado }}</td>
                                <td>{{ $tarea->fecha_crea }}</td>
                                <td>{{ $tarea->fecha_rea }}</td>
                                <td>{{ $tarea->anotaciones_anteriores }}</td>
                                <td>{{ $tarea->anotaciones_posteriores }}</td>
                                <td>{{ $tarea->fichero }}</td>
                                <td>
                                        <a class="button is-warning"
                                            href="{{ route('tareas.edit', $tarea->id) }}">Editar</a>        
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
