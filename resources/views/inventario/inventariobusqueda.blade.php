@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <a href="/inventario" class="btn btn-primary my-2 ">Volver</a>
                <form action="/busquedainventario" method="get" class="d-flex  w-100">
                    <input type="text" class="w-75 w-100" name="equipo" id="equipo" placeholder="Buscar cliente" required>
                    <button class="w-25 btn btn-dark"><i class="fas fa-search"></i></button>
                </form>

                <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Valor diario</th>
                                <th scope="col">Existencia</th>
                                <th scope="col">Alquilados</th>
                                <th scope="col">Disponible</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($todo_los_inventarios as $todo_los_inventario)

                        <tr>
                            <th scope="row">{{ $todo_los_inventario->id_producto }}</th>
                                <td>{{ $todo_los_inventario->nombre }}</td>
                                <td>${{ $todo_los_inventario->valordiario }}</td>
                                <td>{{ $todo_los_inventario->existencia }}</td>
                                <td>@if (isset( $todo_los_inventario->alquilados) === false) 0 @else {{ $todo_los_inventario->alquilados }} @endif </td>
                                <td>{{ $todo_los_inventario->disponible }}</td>
                                <td><a href="inventario/{{$todo_los_inventario->id}}/edit" class="btn btn-primary">Ver</a></td>
                                <td><a href="inventario/{{$todo_los_inventario->id}}/delate" class="btn btn-primary">Eliminar</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                            
                    </table>
                    {{ $todo_los_inventarios->links() }}
                </div>
                      
            </div>
        </div>
    </div>
</div>


@endsection
