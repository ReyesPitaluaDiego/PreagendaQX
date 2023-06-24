<?php
    require "../../../../seguridad.php";
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


    <title>Médicos</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>MÉDICOS</h1></div>
        <div class="contenido_hed1 cont3 contnav2"></div>
    </nav>
    <section class="top"></section>
    <br>
   <section class="ancho">
<!-- BACKEND - PHP -->
<?php
    include "../../../../bd.php";

    $consulta1 = "SELECT * FROM areas";
    $resultado1 = mysqli_query($conexion,$consulta1);
        while($fila1 = mysqli_fetch_assoc($resultado1)){
?>
<!-- ------------------------------------------------- -->
     <div class="contenedor_tabla">
     <p><strong>Lista de médicos del área de <span style="color: #a61c3c;"><?php echo $fila1["NOMBRE"]; ?></span>:</strong></p>
     <table class="display tabla_medicos">
        <thead>
            <th class="fijo_head" id="id_registro">No. Empleado</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Sexo</th>
            <th>CURP</th>
            <th>Especialidad</th>
            <th>Cédula Profesional</th>
            <th>Cédula Especialidad</th>
        </thead>
        <tbody>
<!-- BACKEND - PHP -->
<?php
    $area = $fila1["NOMBRE"];
    $consulta = "SELECT * FROM medicos WHERE AREA = '$area'";
    $resultado = mysqli_query($conexion,$consulta);
        while($fila = mysqli_fetch_assoc($resultado)){
?>
<!-- ------------------------------------------------- -->
            <tr>
                <td class="fijo_body"><?php echo $fila["NoEMPLEADO"]; ?></td>
                <td><?php echo $fila["NOMBRE"]; ?></td>
                <td><?php echo $fila["PRIMER_APELLIDO"]; ?></td>
                <td><?php echo $fila["SEGUNDO_APELLIDO"]; ?></td>
                <td><?php echo $fila["SEXO"]; ?></td>
                <td><?php echo $fila["CURP"]; ?></td>
                <td><?php echo $fila["ESPECIALIDAD"]; ?></td>
                <td><?php echo $fila["CEDULA_PROFESIONAL"]; ?></td>
                <td><?php echo $fila["CEDULA_ESPECIALIDAD"]; ?></td>
            </tr>
<?php
    }
    mysqli_free_result($resultado);
?>
        </tbody>
    </table>
    </div>
    <br><br>
<?php
    }
    mysqli_free_result($resultado1);
?>
   </section>
</body>
</html>