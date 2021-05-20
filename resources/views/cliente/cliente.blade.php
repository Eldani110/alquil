@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <form action="" method="get">
                    <input type="text">
                    <button>Buscar Cliente</button>
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

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($todo_los_clientes as $todo_los_cliente)

                        <tr>
                        <th scope="row">1</th>
                        <td>{{ $todo_los_cliente->nombre }}</td>
                        <td>{{ $todo_los_cliente->identifiacion }}</td>
                        <td>{{ $todo_los_cliente->dirección }}</td>
                        <td>{{ $todo_los_cliente->telefono }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                            
                    </table>
                </div>
                      
            </div>
        </div>
    </div>
</div>


@endsection
