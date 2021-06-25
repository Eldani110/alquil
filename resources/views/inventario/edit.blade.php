@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Editar inventario {{$inventario->nombre}}</h2>
                    <form id="formulario" method="POST" action="/inventario/{{$inventario->id}}">
                        @csrf
                        @method('PUT')

                        <label for="password" >{{ __('Id') }}</label>
                        <input id="id_producto" type="text" class="form-control"  value="{{$inventario->id_producto}}"  required autofocus readonly> 


                        <label for="password" >{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" value="{{$inventario->nombre}}" autofocus >
                        
                        <label for="password" >{{ __('Valor diario') }}</label>
                        <input id="valordiario" type="text" class="form-control" name="valordiario" value="{{$inventario->valordiario}}"  required autofocus>

                        <label for="password" >{{ __('Existencia') }}</label>
                        <input id="existencia" type="number" class="form-control" name="existencia" value="{{$inventario->existencia}}"  required autofocus>

                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Editar cliente') }}
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
    });

    function validarFormulario(evento) {
    evento.preventDefault();
    var valordiario = document.getElementById('valordiario').value;
    if(valordiario.length < 3) {
        alert('No puedes poner un valor inferior a 100 pesos colombianos');
        return;
    }

    this.submit();
    }
</script>
@endsection
