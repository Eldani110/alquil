@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <a href="/obras" class="btn btn-primary my-2 ">Volver</a>
                <form  action="/busquedaobras" method="get" class="d-flex  w-100">
                    <input type="text" class="w-75 w-100" name="obra" id="obra" placeholder="Buscar obra">
                    <button class="w-25 btn btn-dark"><i class="fas fa-search"></i></button>
                </form>

                <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">Nombre de la obra</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Numero de contacto</th>
                                <th scope="col">Encargado</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($toda_las_obras as $toda_las_obra)

                        <tr>
                            <th scope="row">{{ $toda_las_obra->id_obra }}</th>
                                <td>{{ $toda_las_obra->nombre_de_la_obra }}</td>
                                <td>{{ $toda_las_obra->dirección }}</td>
                                <td>{{ $toda_las_obra->numero_de_contacto }}</td>
                                <td>{{ $toda_las_obra->encargado }}</td>
                                <td><a href="obras/{{$toda_las_obra->id}}/edit" class="btn btn-primary">Ver</a></td>
                                <td><a href="obras/{{$toda_las_obra->id}}/delate" class="btn btn-primary">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                            
                    </table>
                    {{ $toda_las_obras->links() }}
                </div>
                      
            </div>
        </div>
    </div>
</div>


@endsection
