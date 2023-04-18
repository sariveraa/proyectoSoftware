@extends('layouts.app')

@section('template_title')
    Create Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Venta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventas.store') }}"  role="form" enctype="multipart/form-data">
                        
                                @csrf

                                

                                <div class="form-group row">
                                    <label for="identidad" class="col-md-4 col-form-label text-md-right">{{ __('Número de identificación') }}</label>

                                    <div class="col-md-6">
                                        <input id="identidad" type="text" class="form-control @error('email') is-invalid @enderror" name="identidad" value="{{ old('identidad') }}" required autocomplete="identidad">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
<br>
                                <div class="row mb-3">
                                    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre completo') }}</label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                                    <div class="col-md-6">
                                        <input id="direccion" type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="codigo" class="col-md-4 col-form-label text-md-right">{{ __('Código del producto') }}</label>

                                    <div class="col-md-6">
                                        <input type="text"  class="form-control @error('email') is-invalid @enderror" value = {{$codigo}} disabled>
                                        <input id="codigo" type="text" class="form-control @error('email') is-invalid @enderror" name="codigo"  required autocomplete="email" value = {{$codigo}} hidden>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row mb-3">
                                    <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total de la compra') }}</label>

                                    <div class="col-md-6">
                                    <input type="text"  class="form-control @error('email') is-invalid @enderror" value = {{$total}} disabled>
                                        <input id="total" type="number" class="form-control @error('total') is-invalid @enderror" name="total" value ={{$total}} required autocomplete="new-total" hidden >

                                        @error('total')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
