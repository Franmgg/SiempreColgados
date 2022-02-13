<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','FMGG-Practica2')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js'> </script>
    <nav class="navbar is-light">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                <b><span style="color:hsl(171, 100%, 41%);margin-left:7%">Siempre</span>Colgados</b>
            </a>
            <div class="navbar-burger" data-target="navMenuColorlight-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenuColorlight-example" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span class="icon">
                            <i class="fas fa-users"></i>
                        </span>
                        <span> Cliente</span>
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ url('cliente') }}">
                            Enviar Tarea
                        </a>
                    </div>
                </div>


                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span class="icon">
                            <i class="fas fa-users"></i>
                        </span>
                        <span>Gestionar</span>
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ url('clientes') }}">
                            <span class="icon">
                                <i class="fas fa-user-tie"></i>
                            </span>
                            <span>Gestionar Clientes</span>
                        </a>
                        <a class="navbar-item" href="{{ url('empleados') }}">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span>Gestionar Usuarios</span>
                        </a>
                        <a class="navbar-item" href="{{ url('tareas') }}">
                            <span class="icon">
                                <i class="fas fa-tasks"></i>
                            </span>
                            <span> Gestionar Tareas</span>
                        </a>
                        <a class="navbar-item" href="{{ url('cuotas') }}">
                            <span class="icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </span>
                            <span> Gestionar Cuotas</span>
                        </a>
                    </div>
                </div>


            </div>


            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        @if (!Auth::user())
                            <p class="control">
                                <a class="button is-primary" href="{{ url('login') }}">
                                    <span class="icon">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </span>
                                    <span>Entrar</span>
                                </a>
                            </p>
                        @endif
                        @if (Auth::user())
                            <p class="control">
                              <form method="post" action="logout">
                                <a class="button is-dark" href="{{ url('cerrarsesion') }}">
                                    <span class="icon">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </span>
                                    <span>Cerrar Sesión</span>
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="field is-grouped">
                        {{-- <p class="control">
                  <a class="button is-dark" href="{{ url('/login') }}">
                    <span class="icon">
                      <i class="fas fa-sign-in-alt"></i>
                    </span>
                    <span>Cerrar Sesion</span>
                  </a>
                </p> --}}
                    </div>
                </div>
            </div>


        </div>
    </nav>

    @yield('cuerpo')






    <footer class="footer" style="position:fixed;bottom:0%;width:100%;">
        <div class="content has-text-centered">
            <p>
                <strong>SiempreColgados</strong> Por <a href="https://github.com/Franmgg">Francisco M. Gómez</a>.<br>
                Este sitio web usa la licencia:
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. El contenido del sitio web esta bajo
                licencia<a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>

</body>

</html>
