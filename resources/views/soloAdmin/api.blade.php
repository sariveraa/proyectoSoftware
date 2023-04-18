@extends('layouts.app')

@section('template_title')
Usuario
@endsection


@section('content')




<body>


    <div></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Identidad</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">codigo</th>
            </tr>
        </thead>
        <tbody id="contenido">

        </tbody>
    </table>


    <script>
        var contenido = document.getElementById("contenido")

        fetch('http://localhost:8000/api/datosApi')
            .then(datos => datos.json())
            .then(datos => {
                console.log(datos)
                tabla(datos)
            })

        function tabla(datos) {

            for (let valor of datos) {
                console.log(valor.nombre)
                contenido.innerHTML += `
            <tr>
                <th scope="row">${valor.id}</th>
                <td>${valor.identidad}</td>
                <td>${valor.nombre}</td>
                <td>${valor.direccion}</td>
                <td>${valor.codigo}</td>
              </tr>
        `
            }
        }
    </script>
</body>

</html>





@endsection