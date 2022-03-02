@extends('layaout')
@section('cuerpo')
@section('joke')
<table style="text-align: center;background-color:rgba(0, 0, 0, 0.102);box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.253);">
  <thead>
    <tr>
      <td ><p style="margin-top: -2px;padding-left:10px;padding-right:10px"><strong>{{$joke['setup']}}</strong></p></td>
    </tr>
  </thead>
  <tbody>
    <td ><p style="margin-top:-8px;padding-left:10px;padding-right:10px">{{$joke['delivery']}}</p></td>
  </tbody>
</table>

@endsection
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

@endsection