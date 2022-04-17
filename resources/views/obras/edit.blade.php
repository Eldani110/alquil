@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Editar {{$obra->nombre_de_la_obra}}</h2>
                    <form id="formulario" method="POST" action="/obras/{{$obra->id}}">
                        @csrf
                        @method('PUT')


                        <label for="password" >{{ __('Nombre de la obra') }}</label>
                        <input id="name" type="text" class="form-control" name="name" autocomplete="name" value="{{$obra->nombre_de_la_obra}}" required autofocus>
                        
                        <label for="password" >{{ __('Dirección') }}</label>
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{$obra->dirección}}"  required autofocus>

                        <label for="password" >{{ __('Numero de contacto') }}</label>
                        <input id="numero_contacto" type="tel" class="form-control" name="numero_contacto" value="{{$obra->numero_de_contacto}}" required  autofocus>

                        <label for="password" >{{ __('Encargado') }}</label>
                        <input id="encargado" type="text" class="form-control" name="encargado"  value="{{$obra->encargado}}" required  autofocus>


                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Editar cliente') }}
                        </button>
                        <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                <example-component></example-component><!--Añadimos nuestro componente vuejs-->
            </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
