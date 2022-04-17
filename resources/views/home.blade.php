@extends('layouts.app')

@section('content')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Clientes</h2>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary my-1 " ><i class="fas fa-user-plus mx-1"></i>Crear nuevo cliente</a>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary my-1 " ><i class="fas fa-pen mx-1"></i>Buscar y editar cliente</a>
      </div>
    </div> 
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Inventario</h2>
        <a href="{{ route('inventario.create') }}" class="btn btn-primary my-1 " ><i class="fas fa-plus-circle mx-1"></i>Agregar nuevo equipo</a>
        <a href="{{ route('inventario.index') }}" class="btn btn-primary my-1 " ><i class="fas fa-pen mx-1"></i>Buscar y editar Equipo</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Entrega</h2>
        <a href="{{ route('entrega.create') }}" class="btn btn-primary my-1 " ><i class="fas fa-plus-circle mx-1"></i>Nueva entrega</a>
        <a href="{{ route('entrega.index') }}" class="btn btn-primary my-1 " ><i class="fas fa-pen mx-1"></i>Buscar y editar entrega</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Devolución</h2>
        <a href="http://" class="btn btn-primary my-1 " ><i class="fas fa-plus-circle mx-1"></i>Nueva devolución</a>
        <a href="http://" class="btn btn-primary my-1 " ><i class="fas fa-pen mx-1"></i>Buscar y editar devolución</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Gestión de obras</h2>
        <a href="{{ route('obras.create') }}" class="btn btn-primary my-1 " ><i class="fas fa-plus-circle mx-1"></i>Nueva obra</a>
        <a href="{{ route('obras.index') }}" class="btn btn-primary my-1 " ><i class="fas fa-pen mx-1"></i>Buscar y editar obra</a>
      </div>
    </div>
  </div>
  <div class="col my-2">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h2 class="card-title">Facturación</h2>
        <a href="http://" class="btn btn-primary my-1 " ><i class="fas fa-file-invoice mx-1"></i>Ver Facturación de clientes</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
