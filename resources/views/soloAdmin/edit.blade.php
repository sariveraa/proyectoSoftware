<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body  style="background-color:#FFD1E9;margin-top:0px;margin-left:0px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            </a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ADMINISTRAR USUARIOS SAMTA </a>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <div class="container text-center">
    <div class="container">
    <form action="{{route('administrar.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" value="{{$user->name}}">
        </div>
        <br>
        <br>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="text" class="form-control" id="email" aria-describedby="email" value="{{$user->email}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input name="tipo" type="text" class="form-control" id="tipo" aria-describedby="tipo" value="{{$user->tipo}}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <br>
    <br>
    <br>
    
    </div>
    <div class="copyright"> © 2022 Copyright by Salome Rivera y Laura Quintero. All Rights Reserved. </div>
    </div>
</body>
</html>