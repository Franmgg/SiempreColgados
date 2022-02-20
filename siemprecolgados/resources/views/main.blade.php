@extends('layaout')
@section('cuerpo')
<div class="columns mt-2 is-align-content-center">
<div class="column is-one-fifth ml-6">
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
</div>
<div class="column is-one-fifth ml-6">
    <div class="card">
        <div class="card-image ">
          <figure class="image is-5by4 ">
            <img src="img/asc3.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Modelo 2020-J</p>
              <p class="subtitle is-6">Modelo 2020-J | Single cell</p>
            </div>
          </div>
          <div class="content">
           <p clasS="is-size-8">
               Simple, bonito y barato. Cumplirá la función que promete incluso mas. Con la instalación de asistente online ayudará en todos los momentos criticos.
           </p>
          </div>
        </div>
    </div>
</div>
<div class="column is-one-fifth ml-6">
    <div class="card">
        <div class="card-image ">
          <figure class="image is-5by4 ">
            <img src="img/asc2.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Modelo 2021-M</p>
              <p class="subtitle is-6">Modelo 2021-M | Double cell</p>
            </div>
          </div>
          <div class="content">
           <p clasS="is-size-8">
               Este modelo dara un lavado de cara a su empresa dará a entender que su empresa tiene manera y seriedad.
           </p>
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