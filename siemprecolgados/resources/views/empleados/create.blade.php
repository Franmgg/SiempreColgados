@extends('layaout')
@section('cuerpo')




    <div class="columns is-mobile" style="margin-top:2%">
        <div class="column is-three-fifths is-offset-one-fifth">
            <div class="box">
                <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title is-3 ">Crear Empleados</h1>
                    <div class="columns">
                        <div class="column">
                            <label class="label">Nombre</label>
                            <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label class="label">Telefono</label>
                            <input id="telefono" type="text" class="input @error('telefono') is-danger @enderror" name="telefono" value="{{ old('telefono') ?? old('telefono') }}" required autocomplete="telefono" autofocus>
                            <label class="label">Email</label>
                            <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
                        </div>
                        <div class="column">
                            <label class="label">Contraseña</label>
                            <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
                            <label class="label">Confirma la contraseña</label>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            <hr>
                            <a href="{{ URL::previous() }}" class="button">Volver</a>
                            <button type="submit" class="button is-primary">Añadir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    @endsection
