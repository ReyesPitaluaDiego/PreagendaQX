<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $NoEMPLEADO = $_SESSION['NoEMPLEADO'];
    $consulta= "SELECT * FROM coordinadores WHERE NoEMPLEADO='$NoEMPLEADO'";
    $resultado= mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $nombre= $fila['NOMBRE']." ".$fila['PRIMER_APELLIDO']." ".$fila['SEGUNDO_APELLIDO'];
    $area= $fila['COORDINACION'];
    $sexomedico= $fila['SEXO'];
    if($sexomedico=='M') {
        $pref = "Dra. ";
    } else {
        $pref = "Dr. ";
    }
    $coordinador = $pref.$nombre;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/admin/derechohabiente.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <!-- JQuery -->
    <script src="../../../../libs/jquery/jquery-3.6.3.min.js"></script>
    <!-- DataTables -->
    <script src="../../../../libs/datatables/js/datatables.min.js"></script>
    <link rel="stylesheet" href="../../../../libs/datatables/css/datatables.min.css">
    <!-- FixedColumns -->
    <script src="../../../../libs/datatables/js/fixedcolumns.min.js"></script>
    <link rel="stylesheet" href="../../../../libs/datatables/css/fixedcolumns.min.css">
    <!-- FixedHeader -->
    <script src="../../../../libs/datatables/js/fixedheader.min.js"></script>
    <link rel="stylesheet" href="../../../../libs/datatables/css/fixedheader.min.css">
    <!-- Scroller -->
    <script src="../../../../libs/datatables/js/scroller.min.js"></script>
    <link rel="stylesheet" href="../../../../libs/datatables/css/scroller.min.css">
    <title>Derechohabientes</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>DERECHOHABIENTES</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="reportes_dh.php"  class="btn_reportes"><i class="fa-solid fa-file-medical icon_nav"></i>Reportes</a></div>
    </nav>
    <section class="top"></section>
    <br>
   <section class="ancho">
     <div class="contenedor_tabla">
     <p><strong>Lista de registro de los derechohabientes del área de: <span class="fijo_head"><?php echo $area; ?></span> </strong></p>
     <table class="display" id="tabla_derechohabientes">
        <thead>
            <th class="fijo_head" id="id_registro">No.<br>Registro</th>
            <th>Cédula</th>
            <th>Nombre(s)</th>
            <th>Apellido<br>Paterno</th>
            <th>Apellido<br>Materno</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Unidad<br>Emisora</th>
            <th>Domicilio</th>
            <th>Teléfono 1</th>
            <th>Teléfono 2</th>
            <th>Diagnóstico</th>
            <th>Cirugía Proyectada</th>
            <th>Fecha de<br>Registro</th>
            <th>Fecha de<br>Cirugía</th>
            <th>No. Empleado</th>
            <th>Médico Tratante</th>
            <th>Coor. Médico</th>
            <th>Observaciones</th>
            <th>Acciones</th>
        </thead>
        <tbody>
<!-- BACKEND - PHP -->
<?php
    $consulta2 = "SELECT * FROM derechohabientes WHERE COORDINADOR='$coordinador'";
    $resultado2 = mysqli_query($conexion,$consulta2);
        while($fila2 = mysqli_fetch_assoc($resultado2)){
?>
<!-- ------------------------------------------------- -->
            <tr>
                <td class="fijo_body"><?php echo $fila2["NoREGISTRO"]; ?></td>
                <td><?php echo $fila2["CEDULA"]; ?>/<?php echo $fila2["TIPO_BENEFICIARIO"]; ?></td>
                <td><?php echo $fila2["NOMBRE"]; ?></td>
                <td><?php echo $fila2["PRIMER_APELLIDO"]; ?></td>
                <td><?php echo $fila2["SEGUNDO_APELLIDO"]; ?></td>
                <td><?php echo $fila2["EDAD"]; ?></td>
                <td><?php echo $fila2["SEXO"]; ?></td>
                <td><?php echo $fila2["UNIDAD"]; ?></td>
                <td><?php echo $fila2["DOMICILIO"]; ?></td>
                <td><?php echo $fila2["TELEFONO1"]; ?></td>
                <td><?php echo $fila2["TELEFONO2"]; ?></td>
                <td><?php echo $fila2["DIAGNOSTICO"]; ?></td>
                <td><?php echo $fila2["CIRUGIA"]; ?></td>
                <td><?php echo $fila2["FECHA_REGISTRO"]; ?></td>
                <td><?php echo $fila2["FECHA_CIRUGIA"]; ?></td>
                <td><?php echo $fila2["NoEMPLEADO"]; ?></td>
                <td><?php echo $fila2["MEDICO"]; ?></td>
                <td><?php echo $fila2["COORDINADOR"]; ?></td>
                <td><?php echo $fila2["OBSERVACIONES"]; ?></td>
                <td><a href="#" class="btn_accion" onclick="editar('editar_dh.php?id=<?php echo $fila2["NoREGISTRO"];?>')"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            </tr>
<?php
    }
    mysqli_free_result($resultado2);
?>
        </tbody>
    </table>
     </div>
   </section>
</body>
</html>