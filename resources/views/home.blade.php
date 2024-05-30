@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MotorCycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b0fc38a287.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-dark font-weight-light" href="#">Yamaha Motorcyle's</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-dark" aria-current="page" href="">Inicio</a>
                    <a class="nav-link active text-dark" aria-current="page" href="create">Agregar</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="slider-container">
        <div class="slider-item">
            <img src="img/mt-15.png" alt="1">
        </div>
        <div class="slider-item">
            <img src="img/mt-03.png" alt="2">
        </div>
        <div class="slider-item">
            <img src="img/mt-07.jpg" alt="3">
        </div>
        <div class="slider-item">
            <img src="img/mt-09.png" alt="4">
        </div>
        <div class="slider-item">
            <img src="img/mt-10.jpg" alt="5">
        </div>
    </section>



    <div class="row d-flex justify-content-center">
        <div class="col-8 p-4">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Cilindraje</th>
                        <th>Descripción</th>
                        <th>Presentación</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>01</td>
                        <td>MT-07</td>
                        <td>2024</td>
                        <td>689</td>
                        <td>Chimba de moto</td>
                        <td> </td>
                        <td><a href="edit.php" class="btn btn-small btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>


                    </tr>



                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection