@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identidad:</strong>
                            {{ $venta->identidad }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $venta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $venta->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $venta->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $venta->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
