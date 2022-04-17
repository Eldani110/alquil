@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Entrega</h2>
                    <form id="formulario" method="POST" action="{{ route('obras.store') }}">
                        @csrf                        
                        <label for="id" >{{ __('# de Factura') }}</label>
                        <input id="id_obra" type="text" class="form-control" name="id_obra" value="@if (isset($ultimodato) === false) 1 @else {{$ultimodato->id_obra  + 1}} @endif"  required autofocus readonly> 

                        <label for="encargado" >{{ __('Encargado') }}</label>
                        <!--<input id="encargado" type="text" class="form-control" name="encargado" required  autofocus>-->
                        <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                            <buscarcliente-component></buscarcliente-component>
                        </div>

                        <label for="nombre-de-la-obra" >{{ __('Nombre de la obra') }}</label>
                        <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                            <buscarobra-component></buscarobra-component>
                        </div>                        
                        <label for="numero-de-contacto" >{{ __('Fecha de factura') }}</label>
                        <input id="numero_contacto" type="date" class="form-control" name="numero_contacto" required  autofocus>

                        
                        <div class="card my-3 "> 
                            <div class="card-header">
                                    Equipos agregados
                            </div>
                            <div class="table-responsive">

                    
                                <equipo-component></equipo-component>
                                                        
                            </div>


                        </div>


                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Guardar') }}
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
