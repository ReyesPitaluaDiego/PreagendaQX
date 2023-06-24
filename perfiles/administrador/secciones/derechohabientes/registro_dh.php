<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $NoEMPLEADO = $_SESSION['NoEMPLEADO'];
    $consulta3= "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
    $resultado3= mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_assoc($resultado3);
    $medicotratante= $fila3['nombre']." ".$fila3['apellido1']." ".$fila3['apellido2'];

    $consulta= "SELECT * FROM medicos WHERE NoEMPLEADO='$NoEMPLEADO'";
    $resultado= mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    if(mysqli_num_rows($resultado) > 0){
        $area= $fila['AREA'];
        $sexomedico= $fila['SEXO'];
        if($sexomedico=='M') {
            $pref = "Dra. ";
        } else {
            $pref = "Dr. ";
        }
    } else{
        $pref ="";
    }
    // ----
    $consulta2= "SELECT * FROM coordinadores WHERE COORDINACION='$area'";
    $resultado2= mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_assoc($resultado2);
    if(mysqli_num_rows($resultado2) > 0){
        $coordinador = $fila2['NOMBRE']." ".$fila2['PRIMER_APELLIDO']." ".$fila2['SEGUNDO_APELLIDO'];
        $sexocoordinador= $fila2['SEXO'];
        if($sexocoordinador=='H') {
            $pref2 = "Dr. ";
        } else{
            $pref2 = "Dra. ";
        }
    } else{
        $pref2 ="";
        $coordinador = "";
    }
    // ----
    $hoy = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/admin/registro_dh.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <title>Registro de derechohabiente</title>
</head>
<body>
    <?php
     include "../../header.php";
    ?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>DERECHOHABIENTES</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="derechohabientes.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO DE REGISTRO -->
    <?php include "../../../../templates/form_registro_dh.php"; ?>
</body>
</html>