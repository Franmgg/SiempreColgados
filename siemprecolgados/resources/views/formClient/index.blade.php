<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','FMGG-Practica2')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<div class="columns is-mobile" style="margin-top:2%">
    <div class="column is-three-fifths is-offset-one-fifth">
        <div class="box">
            <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="title is-3 ">Crear aviso</h1>
                <div class="columns">
                    <div class="column">
                        <label class="label">Nombre</label>
                        <input type="text" value="" name="nombre" placeholder="Nombre" class="input">
                        <label class="label">CIF</label>
                        <input type="cif" value="" name="cif" placeholder="Cif" class="input">
                        <label class="label">Pais</label>
                        <input type="text" value="" name="pais" placeholder="Pais" class="input"><br>
                    </div>
                    <div class="column">
                        <label class="label">Correo</label>
                        <input type="email" value="" name="correo" placeholder="Correo" class="input"><br>
                        <label class="label">Telefono</label>
                        <input type="text" value="" name="telefono" placeholder="telefono" class="input"><br>
                        <label class="label">Cuenta Corriente</label>
                        <input type="text" value="" name="cuenta_corriente" placeholder="Cuenta Corriente" class="input"><br>
                        <label class="label">Descripcion</label>
                        <textarea name="descripcion" placeholder="Descripcion" class="textarea"></textarea><br>
                        <button type="submit" class="button">Volver</button>
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
