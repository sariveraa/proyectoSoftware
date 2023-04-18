@extends('layouts.app')

@section('template_title')
Usuario
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Usuario') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('administrar.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>

                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>identidad</th>
                                    <th>nombre</th>
                                    <th>email</th>
                                    <th>tipo</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->identidad }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->tipo }}</td>

                                    <td>
                                        <a href="{{route('administrar.edit', $user->id)}}" class="btn btn-primary">Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $users->links() !!}
        </div>
        <br>
        <div class="justify-content-center">
                                    <a class="btn btn-secondary" class="ml-4 " style="font-size:90%;                                color:white;
                                width:200px;
                                height:50px;
                                display: flex;
                                align-items: center;
                                justify-content: center;" href="{{ route('descargar_pdf2')}}">Generar reporte de usuarios</a>
                                </div>
            </div>
    </div>
    <br>
    <a class="ml-4 text-sm btn btn-secondary" href="{{url('/home')}}">Regresar</a>
</div>
@endsection