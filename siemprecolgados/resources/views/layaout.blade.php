<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','FMGG-Practica2')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        .fade{
            opacity: 0;
            animation: fade 4.5s;
        }
        @keyframes fade{
            0% {opacity: 0;}
            50% {opacity: 1;}
            100% {opacity: 0;}
        }
    </style>
      <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>

<body>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js'> </script>
    <nav class="navbar is-light">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                <b><span style="color:hsl(171, 100%, 41%);margin-left:7%">Siempre</span>Colgados</b>
            </a>
        </div>
        <div id="navMenuColorlight-example" class="navbar-menu">
            <div class="navbar-start">
  @if(Auth::user()!=null)
        @if(Auth::user()->privilege=='0')
               <div class="navbar-item">
                   <a href="{{ url('tareasOpe') }}">
                       <span class="icon">
                           <i class="fas fa-book"></i>
                       </span>
                       <span>Completar tareas</span>
                   </a>
               </div>
          @endif  
          @endif
          @if(Auth::user()!=null)
                @if(Auth::user()->privilege=='1')
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
                    @endif
                    @endif
                  
                </div>
            </div>  
            <div class="navbar-item ">
                @yield('joke')
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped ">
                        @if(Auth::user()==null)
                       
                            <p class="control">
                                <a class="button is-primary" href="{{ url('login') }}">
                                    <span class="icon">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </span>
                                    <span>Entrar</span>
                                </a>
                            </p>
                            @endif
                    
                       @if(Auth::user())
                            <p class="control">
                              <form method="post" action="logout">
                                <a class="button is-dark" href="{{ url('cerrarsesion') }}">
                                    <span class="icon">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </span>
                                    <span>Cerrar Sesi??n</span>
                                </a>
                              </form>
                            </p>
                            @endif
                          
                    </div>
                </div>
            </div>


        </div>
    </nav>
    @if(session('success'))
<div class="notification is-primary fade" style="text-align: center">
   <b> {{session('success')}} </b>
</div>
@endif
@if(session('errors'))
<div class="notification is-warning fade" style="text-align: center">
   <b> Hubo un fallo </b>
</div>
@endif
    @yield('cuerpo')






    <footer class="footer" style="position:fixed;bottom:0%;width:100%;">
        <div class="content has-text-centered">
            <p>
                <strong>SiempreColgados</strong> Por <a href="https://github.com/Franmgg">Francisco M. G??mez</a>.<br>
                Este sitio web usa la licencia:
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. El contenido del sitio web esta bajo
                licencia <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"> CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>

    
</body>

</html>
