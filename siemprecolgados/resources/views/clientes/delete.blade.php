@extends('layaout')
@section('cuerpo')

<div class="columns">

    <div class="column">
        <h1 class="title is-1">Confirmar borrado</h1>
        @foreach ($clientes as $cliente)
        {{ $cliente->nombre }}
        {{ $cliente->cif }}
        {{ $cliente->telefono }}
        @endforeach

        <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button is-danger">Eliminar</button>
        </form>
    </div>
</div>









@endsection