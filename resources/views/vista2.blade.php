@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MARISCOS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vista dos!') }}
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKdQrJuZplybHo2Z_BeaFLULyiATuYe3eR3g&usqp=CAU" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
