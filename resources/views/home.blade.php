@extends('layouts.app')

@section('content')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Clientes</h5>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary my-1">Crear nuevo cliente</a>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary my-1">Buscar y editar cliente</a>
      </div>
    </div> 
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Inventario</h5>
        <a href="http://" class="btn btn-primary my-1">Agregar nuevo equipo</a>
        <a href="http://" class="btn btn-primary my-1">Buscar y editar Equipo</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Entrega</h5>
        <a href="http://" class="btn btn-primary my-1">Nueva entrega</a>
        <a href="http://" class="btn btn-primary my-1">Buscar y editar entrega</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Devolución</h5>
        <a href="http://" class="btn btn-primary my-1">Nueva devolución</a>
        <a href="http://" class="btn btn-primary my-1">Buscar y editar devolución</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gestión de obras</h5>
        <a href="http://" class="btn btn-primary my-1">Nueva obra</a>
        <a href="http://" class="btn btn-primary my-1">Buscar y editar obra</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Facturación</h5>
        <a href="http://" class="btn btn-primary my-1">Ver Facturación de clientes</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
