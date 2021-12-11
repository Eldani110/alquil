@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Registrar obra</h2>
                    <form id="formulario" method="POST" action="{{ route('obras.store') }}">
                        @csrf                        
                        <label for="id" >{{ __('Id') }}</label>
                        <input id="id_obra" type="text" class="form-control" name="id_obra" value="@if (isset($ultimodato) === false) 1 @else {{$ultimodato->id_obra  + 1}} @endif"  required autofocus readonly> 


                        <label for="nombre-de-la-obra" >{{ __('Nombre de la obra') }}</label>
                        <input id="name" type="text" class="form-control" name="name"   autocomplete="name" required autofocus >
                        
                        <label for="direccion" >{{ __('Dirección') }}</label>
                        <input id="direccion" type="text" class="form-control" name="direccion"  required autofocus>

                        <label for="numero-de-contacto" >{{ __('Numero de contacto') }}</label>
                        <input id="numero_contacto" type="tel" class="form-control" name="numero_contacto" required  autofocus>

                        <label for="encargado" >{{ __('Encargado') }}</label>
                        <!--<input id="encargado" type="text" class="form-control" name="encargado" required  autofocus>-->
                        <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                            <buscarcliente-component></buscarcliente-component>
                        </div>
    


                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Registrar Obra') }}
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
