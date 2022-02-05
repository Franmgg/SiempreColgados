@extends('layaout')
@section('cuerpo')



    
        <div class="columns is-mobile" style="margin-top:2%">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="box">
                <form action="{{ url('usuario/create') }}" method="POST">
                    @csrf
                    <h1 class="title is-3 ">Crear Cliente</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Nombre</label>
                            <input type="text" value="" name="nombre" placeholder="Nombre" class="input">
                            <label class="label">CIF</label>
                            <input type="text" value="" name="cif" placeholder="CIF" class="input">
                            <label class="label">Telefono</label>
                            <input type="text" value="" name="telefono" placeholder="Telefono" class="input"><br>
                            

                        </div>
                        <div class="column">
                            <label class="label">Correo</label>
                            <input type="text" value="" name="telefono" placeholder="Correo"class="input"><br>
                            <label class="label">Cuenta Corriente</label>
                            <input type="text" value="" name="cc" placeholder="Cuenta Corriente"class="input"><br>
                            <label class="label">Pais</label>
                            <input type="text" value="" name="Pais" placeholder="Pais"class="input"><br>
                            <label class="label">Moneda</label>
                            <input type="text" value="" name="Moneda" placeholder="Moneda"class="input"><br>
                            <form action="{{ url('lc') }}">
                                <button type="submit" class="button">Volver</button>
                            </form>
                            <form action="">
                                <button type="submit" class="button is-primary">Añadir</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
