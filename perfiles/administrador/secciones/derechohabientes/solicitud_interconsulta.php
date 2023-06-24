<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $registro = $_GET['id'];
    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);

    $consulta2 = "SELECT * FROM OrdendeIngreso WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_assoc($resultado2);

    $consulta3 = "SELECT * FROM HojadeOperaciones WHERE NoREGISTRO = '$registro'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_assoc($resultado3);

    $consulta4 = "SELECT * FROM SolicituddeInterconsulta WHERE NoREGISTRO = '$registro'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_assoc($resultado4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/orden_ingreso.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <title>Solicitud de Interconsulta</title>
</head>
<body>
    <?php
     include "../../header.php";
    ?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>DERECHOHABIENTES</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="reportes_dh.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO SOLICITUD DE INTERCONSULTA-->
    <?php
     include "../../../../templates/form_interconsulta.php";
    ?>
</body>
</html>