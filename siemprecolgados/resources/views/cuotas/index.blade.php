@extends('layaout')
@section('cuerpo')

    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-1 is-offset-1">
            <div class="">
                <div class="button is-primary">
                    <a style="text-decoration: inherit;color: black;" href="{{ route('cuotas.create') }}"> <b>
                            Añadir</b></a>
                </div>
            </div>
            <br>
            <div class="">
                <div class="button is-warning">
                    <a style="text-decoration: inherit;color: black;" href="{{ route('cuotasE.create') }}"> <b>
                            Cuotas excepcional</b></a>
                </div>
            </div>
        </div>
        <div class="column is-7 is-offset-1">

            <div class="box">
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>Concepto</th>
                            <th>Fecha de emision</th>
                            <th>Importe</th>
                            <th>Pagada</th>
                            <th>Fecha de Pago</th>
                            <th>Notas</th>
                            <th>Cliente_id</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuotas as $cuota)
                            <tr>
                                <td>{{ $cuota->concepto }}</td>
                                <td>{{ $cuota->fecha_emision }}</td>
                                <td>{{ $cuota->importe}}</td>
                                <td>@if($cuota->pagada==0)No @else Si @endif</td>
                                <td>{{ $cuota->fecha_pago }}</td>
                                <td>{{ $cuota->notas }}</td>
                                <td>{{ $cuota->cliente_id }}</td>
                                <td>
                                    <form action="{{ route('cuotas.destroy', $cuota->id) }}" method="Post">
                                        <a class="button is-warning"
                                            href="{{ route('cuotas.edit', $cuota->id) }}">Editar</a>
                                            <a class="button is-info"
                                            href="{{ route('cuotas.show', $cuota->cliente_id) }}" target="_blank">Ver PDF</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger"
                                            onclick="return confirm('¿Seguro que quieres borrar a {{ $cuota->cliente_id }} con el concepto de {{$cuota->concepto}} ?')"
                                            href="{{ route('cuotas.destroy', $cuota->id) }}">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <nav class="pagination is-small" role="navigation" aria-label="pagination">
                    <ul class="pagination-list">
                        @for ($i = 1; $i <= $cuotas->lastPage(); $i++)
                            <li><a class="pagination-link @if ($cuotas->currentPage() == $i)is-current @endif"
                                    href="{{ $cuotas->url($i) }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
