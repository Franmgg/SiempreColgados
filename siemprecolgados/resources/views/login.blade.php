@extends('layaout')
@section('cuerpo')

<div class="notification is-warning"><span class="icon"><i class="fa fa-bell"></i></span><span> Actualmente se tendría que validar los logins</span></div>


<div class="column is-half is-offset-one-quarter mt-6">
<form class="box is-6 ">
    <div class="field">
      <label class="label">Usuario</label>
      <div class="control">
        <input class="input" type="text" placeholder="Usuario">
      </div>
    </div>
  
    <div class="field">
      <label class="label">Contraseña</label>
      <div class="control">
        <input class="input" type="password" placeholder="********">
      </div>
    </div>
  
    <button class="button is-primary">  <span class="icon">
        <i class="fas fa-sign-in-alt"></i>
      </span> <span>  Acceder</span></button>
  </form>
</div>

  @endsection