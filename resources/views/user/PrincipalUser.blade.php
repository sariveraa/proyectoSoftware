@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido a SAMTA</div>
                <h1></h1>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    
                </div>
                <div class="container">
                                <div class="row gx-5">
                                <div class="col">
                                <a class="btn btn-secondary" class="ml-4 " style="font-size:90%;                                color:white;
                                width:200px;
                                height:50px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/catagaloProd">Catalogo de productos</a>
                                </div>
                                <div class="col">
                                <img src="imacat.png" class="img-fluid" alt="Responsive image" width="400">
                                </div>
                            </div>
                            <br>
                            
                            
            </div>
        </div>
    </div>
</div>


@endsection
