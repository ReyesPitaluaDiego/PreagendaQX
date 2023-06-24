<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $registro = $_GET['id'];
    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $enfermo = $fila["NOMBRE"]." ".$fila["PRIMER_APELLIDO"]." ".$fila["SEGUNDO_APELLIDO"];

    $consulta2 = "SELECT * FROM CartadeConsentimiento WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_assoc($resultado2);
    $responsable = $fila2["RESPONSABLE"];
    $idconsentimiento = $fila2["T_CONSENTIMIENTO"];
    if (isset($fila2["TESTIGO1"])){
        $testigo1 = $fila2["TESTIGO1"];
    } else {
        $testigo1 = "";
    }
    if (isset($fila2["TESTIGO2"])){
        $testigo2 = $fila2["TESTIGO2"];
    } else {
        $testigo2 = "";
    }
    if (isset($fila2["MOTIVOS"])){
        $motivos = $fila2["MOTIVOS"];
    } else {
        $motivos = "";
    }
    if (isset($fila2["C_PARTICULAR"])){
        $cparticular = $fila2["C_PARTICULAR"];
    } else {
        $cparticular = "";
    }

    $consulta4 = "SELECT * FROM consentimientos WHERE id = '$idconsentimiento'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_assoc($resultado4);
    $nconsentimiento = $fila4["NOMBRE"];

    if($responsable != null){
        $nombre = $responsable;
    } else {
        $nombre = $enfermo;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/admin/derechohabiente.css">
    <link rel="stylesheet" href="../../../../css/orden_ingreso.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <!-- JQuery -->
    <script src="../../../../libs/jquery/jquery-3.6.3.min.js"></script>
    <title>Consentimiento informado</title>
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
    <!-- FORMULARIO CARTA DE CONSENTIMIENTO -->
    <?php
     include "../../../../templates/form_cartaconsentimiento.php";
    ?>
</body>
</html>