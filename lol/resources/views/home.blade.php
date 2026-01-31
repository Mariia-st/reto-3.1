@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión!') }}

                    <br><br>

                    <a href="{{ url('clientes/') }}">Clientes</a>

                    <a href="{{ url('facturas/') }}">Facturas</a>

                    <a href="{{ url('facturalineas/') }}">Líneas facturas</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
