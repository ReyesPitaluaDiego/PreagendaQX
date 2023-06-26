<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $NoEMPLEADO = $_SESSION['NoEMPLEADO'];
    $consultaaux= "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
    $resultadoaux= mysqli_query($conexion,$consultaaux);
    $filaaux = mysqli_fetch_assoc($resultadoaux);
    $tipouser= $filaaux['usuario'];

    $registro = $_GET['id'];
    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);

    if($fila["SALA"] != ""){
        $sala = $fila["SALA"];
    } else{
        $sala = '<option value="">-- Seleccione</option>';
    }

    if ($tipouser=='Administrador' || $tipouser=='Medico'){
        $cirugia = '<label for="fecha_cirugia" class="form_row6">Fecha de cirugía:<br><input type="date" name="fecha_cirugia"id="fecha_cirugia" value="'.$fila["FECHA_CIRUGIA"].'" readonly>
        </label>
        <label for="sala">Sala:<br>
        <select name="sala" id="sala" disabled>'.$sala.'
          <option value="Sala 1">Sala 1</option>
          <option value="Sala 2">Sala 2</option>
          <option value="Sala 3">Sala 3</option>
          <option value="Sala 4">Sala 4</option>
        </select>
        </label>
        <label for="hora">Hora:<br>
        <input type="time" name="hora"id="hora" value="'.$fila["HORA"].'" readonly>
        </label>';
    }
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
    <title>Editar derechohabiente</title>
</head>
<body>
    <?php
     include "../../header.php";
    ?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>DERECHOHABIENTES</h1></div>
        <div class="contenido_hed1 cont3 contnav2"></div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO DE REGISTRO - Modificación -->
    <?php include "../../../../templates/form_editar_dh.php"; ?>
</body>
</html>