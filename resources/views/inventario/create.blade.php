@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Registrar equipo</h2>
                    <form method="POST" action="{{ route('inventario.store') }}">
                        @csrf                        
                        <label for="password" >{{ __('Id') }}</label>
                        <input id="id_producto" type="text" class="form-control" name="id_producto" value="@if (isset($ultimodato) === false) 1 @else {{$ultimodato->id_producto  + 1}} @endif"  required autofocus readonly> 


                        <label for="password" >{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus >
                        
                        <label for="password" >{{ __('Valor diario') }}</label>
                        <input id="valordiario" type="text" class="form-control" name="valordiario"  required autofocus>

                        <label for="password" >{{ __('Existencia') }}</label>
                        <input id="existencia" type="text" class="form-control" name="existencia"  required autofocus>

                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Registrar equipo') }}
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
