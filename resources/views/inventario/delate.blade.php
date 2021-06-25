@extends('layouts.app')

@section('content')
<!-- resources/views/note.blade.php -->
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Eliminar equipo {{$inventario->nombre}}</h2>
                    <form method="POST" action="/inventario/{{$id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary w-100">Eliminar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection
