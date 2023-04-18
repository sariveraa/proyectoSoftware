<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
                        <a href="/" class="nav-link active" aria-current="page" href="#">PRINCIPAL</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link active" aria-current="page" href="#">INICIAR SESIÓN</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link active" aria-current="page" href="#">REGISTRARSE</a>
                    </li>
                    
            </div>
        </div>
    </nav>
    <br>
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
                        <img src="ropa7.png" class="img-fluid" alt="Responsive image" width="250">
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
                        <div class="p-3"><img src="ropa6.png" class="img-fluid" alt="Responsive image" width="250"></div>
                    </div>
                    <div class="col">
                        <div class="p-3"><img src="ropa8.png" class="img-fluid" alt="Responsive image" width="250"></div>
                    </div>
                </div>
                <br>
                <footer class="footer">
                    <h5>Siguenos en nuestras redes sociales</h5>
                    <a href="https://www.instagram.com/samtaofi/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXRJREFUSEvFlbsuRFEUhr9pNFPQaDRDLy4vwLwBSokErQTxBHgDxNQukSh5AzyBywugVqmU5Je15WTZ+5x9ZnIyuztnr/X/a/3rsls0fFoN4zM0gjlgF+gCkxVZvgH3wDHw5G1jGWwAZ31KtwmcF309gSJ/7BM8uM0XM/EEYl+vQfAJLJuU++Z3AUiF3+MJpGcnQSBHaTxmdVEg+lbEIrkxP2FMpQi+I+DPBiDHcbv/ACSnMh41UhH/w/UZxAgUzQSwBiwCsnkAroCvRM3+cKsIgp49YMtldwpsA7fAkrvLJtgDLi3iaQfyAswCB0AocG2JDoET4A6YcQShwAMRBIk0pTuO4AhQhgNJJEy14QiwCiwYiYp8DbQtu+SGqCqyHNWeK5E9oz2l3i+2Z2UNygZNUoRlphnQcMWO5kb30UmuuypiBKWrQqv5NRFZ7u/SZSeQRtd1iFKZqL9VyNTyC7bv9uCobbMenFwpsuyG9iZnRZdj9AO5y0cZdyMG3QAAAABJRU5ErkJggg==" /></a>
                    <a href="https://www.facebook.com/Samtaoficial"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUxJREFUSEu1lYFNwzAQRV8nYATKBMAE7QgwAXQCYALoBLQTABMAGzAC3QA2gAlAP7Ktw7V9DlJOsiIl9r3z+ftnxsQxmzg/PYBLYAGchKGa3sN4AV5bRbYAZ8A9MHd2+QHcAILtRQ2wAa5Gtk9rBPoTJcB/ksekW+DaEnKA2vLcqPwzJLDtuANuzZpz264coH4eVgDf4ZA1x0YO0PejOMECpJaHRvVPgObEWAZ16alhI+3CAh6BiwZgDahahdfKVIwFSNvHnYC8Lfky5TrVSwv4cWRpd+ABUu4egHfb38JZ5PUN6+zimoI8wBdwkGXfRVvpOWQPUGpt8ZA9mY45gxUgVe65aeui9QJ025NBjrGKXkDTKrSrmtn1AFyzi2Io3WoPkFvJkMv74Wg30fxqgJLDJtV6EtREqUtmpgs1KKPyrmgEPQDHQdqfJwf8ArJlSRlOmzLXAAAAAElFTkSuQmCC" /></a>
                </footer>
                <br>
                <div class="copyright"> © 2022 Copyright by Salome Rivera y Laura Quintero. All Rights Reserved. </div>
                <br>
</body>

</html>