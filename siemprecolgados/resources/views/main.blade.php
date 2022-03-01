@extends('layaout')
@section('cuerpo')
<div class="columns mt-2 is-align-content-center">
<div class="column is-one-fifth ml-6">
  @if(Auth::user()->privilege=='1')
    <div class="card">
        <div class="card-image ">
          <figure class="image is-5by4 ">
            <a href="avisos">
            <img src="img/cliente.jpg" alt="Placeholder image">
          </a>
          </figure>
        </div>
     
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Avisos de clientes:  <span class="tag is-danger is-medium">{{$number}}</span> </p>
            </div>
          </div>
        </div>
     
    </div>
    @endif
</div>
<div class="column is-one-fifth ml-6">
    <div class="card">
        <div class="card-image ">
          <figure class="image is-5by4 ">
            <a href="crudjs">
            <img src="img/vue.png" alt="Placeholder image">
          </a>
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4" style="text-align: center">Zona JS</p>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="column is-one-fifth ml-6">
  <div class="card">
      <div class="card-image ">
        <figure class="image is-5by4 ">
          <a href="pwd">
          <img src="img/conf.png" alt="Placeholder image">
        </a>
        </figure>
      </div>
      <div class="card-content">
        <div class="media">
          <div class="media-content">
            <p class="title is-4" style="text-align: center">Configuración del Perfil</p>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="column is-one-fifth ml-6 is-flex  is-align-content-center">
    <div class="card">
        <div class="card-content">
           <p class="title is-3">GitHub del creador</p>
        </div>
        <div class="card-content">
<div class="github-widget" data-username="Franmgg"></div>
<script src="https://unpkg.com/github-card@1.2.1/dist/widget.js"></script>
</div>
</div>
</div>



</div>
@php
// echo(Auth::user())
@endphp
@endsection