<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>

</head>
<style>
    .alert-message {
        color: red;
    }

</style>

    

<body>
<a href="{{URL::previous()}}" class="btn bg-primary" style="margin:0.5%">Volver</a>
    <div class="container">
        <h1 class="title is-1"style="text-align: center">Empleados con JS</h1>
        <div class="row">
            <div class="col-12 text-right">
                <a href="javascript:void(0)" class="btn btn-success mb-3" id="create-new-post" onclick="addPost()">Añadir
                    Empleado</a>
            </div>
        </div>
        <div class="row" style="clear: both;margin-top: 18px;">
            <div class="col-12">
                <table id="laravel_crud" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Empleados as $Empleado)
                            <tr id="row_{{ $Empleado->id }}">
                                <td>{{ $Empleado->nombre }}</td>
                                <td>{{ $Empleado->dni }}</td>
                                <td>{{ $Empleado->correo }}</td>
                                <td>{{ $Empleado->telefono }}</td>

                                <td>
                                    <a href="javascript:void(0)" data-id="{{ $Empleado->id }}"
                                        onclick="editPost(event.target)" class="btn btn-info">Edit</a>
                                    <a href="javascript:void(0)" data-id="{{ $Empleado->id }}" class="btn btn-danger"
                                        onclick="deletePost(event.target)">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('laraveljs/modal')
    @include('laraveljs/script')

{{-- No le he puesto mi estilo de bulma por el hecho de que bootstrap usa un js <- expecifico para los modales, 
    entonces como bulma usa otro y era mucho mas jodido --}}