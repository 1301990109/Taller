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
    <div id="encabezado">
        <h1>Yamaha Motorcycle</h1>
    </div>

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

    <?php
include "conexion.php";
    ?>


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
                    <?php
include "conexion.php";
$sql = $conexion->query(" SELECT * FROM motos");
while ($resultado = $sql->fetch_object()) { ?>
                    <tr>
                        <td>
                            <?= $resultado->id ?>
                        </td>
                        <td>
                            <?= $resultado->modelo ?>
                        </td>
                        <td>
                            <?= $resultado->año ?>
                        </td>
                        <td>
                            <?= $resultado->cilindraje ?>
                        </td>
                        <td>
                            <?= $resultado->descripcion ?>
                        </td>
                        <td> </td>
                        <td><a href="edit.php" class="btn btn-small btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                        <td><a href="create.php" class="btn btn-small btn-info"><i
                                    class="fa-solid fa-square-plus"></i></button></a></td>

                    </tr>
                    <?php }
                    ?>


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