@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center> <b> REGISTRO DE PEDIDOS </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('NUEVO PEDIDO A REGISTRAR') }}
                    {{ session('status') }}

                    <form action="{{route('guardarlibro')}}" method="POST">
                        @csrf
                        <label>
                            Numero de mesa: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Nombre del platillo: <br>
                            <input name="genero" type="text">
                        </label>
                        <label>
                            Cantidad: <br>
                            <input name="editorial" type="text">
                        </label>
                        <button type="submit">REGISTRAR</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection