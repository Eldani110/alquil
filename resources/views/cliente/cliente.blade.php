@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <form action="/busquedacliente" method="get" class="d-flex  w-100">
                    <input type="text" class="w-75 w-100" name="cliente" id="cliente" placeholder="Buscar cliente">
                    <button class="w-25 btn btn-dark"><i class="fas fa-search"></i></button>
                </form>

                <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Telefono</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($todo_los_clientes as $todo_los_cliente)

                        <tr>
                            <th scope="row">{{ $todo_los_cliente->id }}</th>
                                <td>{{ $todo_los_cliente->nombre }}</td>
                                <td>{{ $todo_los_cliente->identifiacion }}</td>
                                <td>{{ $todo_los_cliente->dirección }}</td>
                                <td>{{ $todo_los_cliente->telefono }}</td>
                                <td><a href="clientes/{{$todo_los_cliente->id}}/edit" class="btn btn-primary">Ver</a></td>
                                <td><a href="clientes/{{$todo_los_cliente->id}}/delate" class="btn btn-primary">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                            
                    </table>
                    {{ $todo_los_clientes->links() }}
                </div>
                      
            </div>
        </div>
    </div>
</div>


@endsection
