<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color:#FFD1E9;margin-top:0px;margin-left:0px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            </a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SAMTA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link active" aria-current="page" href="#">PRINCIPAL</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link active" aria-current="page" href="#">INICIAR SESIÓN</a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link active" aria-current="page" href="#">REGISTRARSE</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viewadmin') }}" class="nav-link active" aria-current="page" href="#">ADMIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">CATÁLOGO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">SAMTA</h1>
            </div>
    </div>
    <br>
    <div class="row g-0 text-center">
        <h4>NUEVA COLECCIÓN</h4>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <!--Cada imagen cambia automaticamente cada 5000 ms-->
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="ropa7.png" class="img-fluid" alt="Responsive image" width="250" >
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="ropa1.png" class="img-fluid" alt="Responsive image" width="250">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="ropa2.png" class="img-fluid" alt="Responsive image" width="250">
              </div>
            </div>
        <br>
        <br>
        <h4>Registrate y adquierela pronto</h4>
    <br>

    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 border"><img src="ropa2.png" class="img-fluid" alt="Responsive image" width="250"></div>
    </div>
    <div class="col">
      <div class="p-3 border"><img src="ropa3.png" class="img-fluid" alt="Responsive image" width="250"></div>
    </div>
    <div class="col">
      <div class="p-3 border">
      <p>SAMTA es una tienda de ropa manizaleña, contamos con disponibilidad
            de envío a todo el país, registrate en nuestra página para ver los
            precios de nuestros productos y conocer todo nuestro catalogo.
        </p>
      </div>
    </div>
    <div class="col">
      <div class="p-3 border"><img src="ropa4.png" class="img-fluid" alt="Responsive image" width="250"></div>
    </div>
    <div class="col">
      <div class="p-3 border"><img src="ropa5.png" class="img-fluid" alt="Responsive image" width="250"></div>
    </div>
    </div>
    <br>
    
    <div class="row gx-5">
        <div class="col">
        <div class="p-3">Custom column padding</div>
        </div>
        <div class="col">
            <div class="p-3">Custom column padding</div>
        </div>
    </div>
    
</body>
</html>