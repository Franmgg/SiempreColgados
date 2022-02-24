<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','FMGG-Practica2')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>


@if(session('success'))
<div class="notification is-warning" style="text-align: center">
   <b> {{session('success')}} </b>
</div>
@endif
@if(session('errors'))
<div class="notification is-danger" style="text-align: center">
   <b> Hubo un error en la creación del aviso </b>
</div>
@endif

<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('cliente.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="title is-3 ">Crear aviso</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="{{old('nombre')}}" name="nombre" placeholder="Nombre" class="input">
                        @error('nombre')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">CIF</label>
                        <input type="cif" value="{{old('cif')}}" name="cif" placeholder="Cif" class="input">
                        @error('cif')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="column">
                        <label class="label">Correo</label>
                        <input type="email" value="{{old('correo')}}" name="correo" placeholder="Correo" class="input"><br>
                        @error('correo')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Telefono</label>
                        <input type="text" value="{{old('telefono')}}" name="telefono" placeholder="telefono" class="input"><br>
                        @error('telefono')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Cuenta Corriente</label>
                        <input type="text" value="{{old('cuenta_corriente')}}" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                        @error('cuenta_corriente')
                        <span class="tag is-danger is-light">{{$message}}</span>
                        @enderror
                        <label class="label">Descripcion</label>
                        <textarea name="descripcion" placeholder="Descripcion" class="textarea"></textarea><br>
                        <button type="submit" class="button is-primary">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    
    <footer class="footer" style="position:fixed;bottom:0%;width:100%;">
        <div class="content has-text-centered">
            <p>
                <strong>SiempreColgados</strong> Por <a href="https://github.com/Franmgg">Francisco M. Gómez</a>.<br>
                Este sitio web usa la licencia:
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. El contenido del sitio web esta bajo
                licencia <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"> CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>

</body>

</html>
