@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <form action="/busquedacliente" method="get" class="d-flex  w-100">
                    <input type="text" class="w-75 w-100" name="cliente" id="cliente" placeholder="Buscar entrega">
                    <button class="w-25 btn btn-dark"><i class="fas fa-search"></i></button>
                </form>

                <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"># de factura</th>
                                <th scope="col">Encargado</th>
                                <th scope="col">Obra</th>
                                <th scope="col">Fecha de factura</th>
                                <th scope="col">Costo por dia</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($toda_las_facturas as $toda_las_factura)

                        <tr>
                            <th scope="row">{{ $toda_las_factura->id }}</th>
                                <td>{{ $toda_las_factura->numero_factura }}</td>
                                <td>{{ $toda_las_factura->encargado }}</td>
                                <td>{{ $toda_las_factura->obra }}</td>
                                <td>{{ $toda_las_factura->fecha_factura }}</td>
                                <td><a href="clientes/{{$toda_las_factura->id}}/edit" class="btn btn-primary">Ver</a></td>
                                <td><a href="clientes/{{$toda_las_factura->id}}/delate" class="btn btn-primary">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                            
                    </table>
                    {{ $toda_las_facturas->links() }}
                </div>
                      
            </div>
        </div>
    </div>
</div>


@endsection
