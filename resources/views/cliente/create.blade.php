@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h2 style="text-align: center;">Registrar Cliente</h2>
                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf
                        <label for="password" >{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control" name="name"  required autocomplete="name" autofocus >
                        
                        <label for="password" >{{ __('Identificación') }}</label>
                        <input id="identificacion" type="text" class="form-control" name="identificacion"  required autofocus>

                        <label for="password" >{{ __('Dirección') }}</label>
                        <input id="direccion" type="text" class="form-control" name="direccion"  required autofocus>

                        <label for="password" >{{ __('Telefono') }}</label>
                        <input id="telefono" type="text" class="form-control" name="telefono" required  autofocus>

                        <button type="submit" class="btn btn-primary my-4 w-100">
                                    {{ __('Registrar cliente') }}
                        </button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
