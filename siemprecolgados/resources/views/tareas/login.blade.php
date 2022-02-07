@extends('layaout')
@section('cuerpo')

<div class="column is-half is-offset-one-quarter mt-6">
    <form class="box is-6 "" action="{{ route('login') }}" "method="POST" enctype="multipart/form-data">
        <div class="field">
          <label class="label">CIF</label>
          <div class="control">
            <input class="input" type="text" placeholder="CIF">
          </div>
        </div>
      
        <div class="field">
          <label class="label">TELEFONO</label>
          <div class="control">
            <input class="input" type="text" placeholder="TELEFONO">
          </div>
        </div>
      
        <button class="button is-primary">  <span class="icon">
            <i class="fas fa-sign-in-alt"></i>
          </span> <span>  Acceder</span></button>
      </form>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    

  @endsection