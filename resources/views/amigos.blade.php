@extends('layout.home')

@section('content')


<?php

$num = array(1, 2, 3, 4, 5)

?>
<!-- /images/inicio.png -->

<div class="container">
  <div class="row">
    <div class="col-12 mt-3">
      <p style="text-align: center;">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
          Amigos
        </button>
      </p>
      <div class="row justify-content-center">
        <div class="col-6 " style="text-align: center;">
          <div style="min-height: 120px;" style="text-align: center;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample" >
              <div class="card card-body" style="width: 430px;">
                Lista de amigos usuario Armando Portilla
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <table class="table " class="">
          <thead>
            <tr>
              <th scope="col">Foto</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>


            @foreach ($dato as $dato)
            <tr>


              <td><img src="/images/{{$dato[2]}}" width=60 height=40 alt="MDN" style="border-radius: 10px;"></td>
              <td>{{$dato[0]}}</td>
              <td>{{$dato[1]}}</td>
              <td>Amigo</td>

            </tr>

            @endforeach



          </tbody>
        </table>



      </div>
    </div>
  </div>
</div>




@endsection