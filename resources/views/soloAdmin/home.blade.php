@extends('layouts.app')

@section('content')

<body style="background-color:#FFD1E9;margin-top:0px;margin-left:0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center">SAMTA ADMINISTRADOR</h1>
                            </div>

                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="container text-center">
                            <div class="container">
                            <div class="row gx-5">
                                <div class="col">
                                <div class="justify-content-center">
                                    <a class="btn btn-secondary" class="ml-4 " style="font-size:90%;                                color:white;
                                width:200px;
                                height:50px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/productos">Administrar productos</a>
                                </div>
                                </div>
                                <div class="col">
                                <div class="justify-content-center">
                                    <a class="btn btn-secondary" class="ml-4 " style="font-size:90%;                                color:white;
                                width:200px;
                                height:50px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/administrar">Administrar usuarios</a>
                                </div>
                                </div>
                                </div>
                                <br>
                                <div class="col">
                                <div class="justify-content-center">
                                    <a class="btn btn-secondary" class="ml-4 " style="font-size:90%;                                color:white;
                                width:200px;
                                height:50px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="/vistaApi">Ventas realizadas</a>
                                </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
</body>

@endsection