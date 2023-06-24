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
    <link rel="stylesheet" href="../../../../css/admin/registro_coor.css">
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
            <a href="reportes_dh.php" class="btn_reportes"><i class="fa-solid fa-file-medical icon_nav"></i>Reportes</a>
            <a href="registro_dh.php" class="btn_registro"><i class="fa-solid fa-plus icon_nav"></i>Registrar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
   <section class="ancho">
     <div class="contenedor_tabla">
     <p><strong>Lista de registro de los derechohabientes:</strong></p>
     <table class="display" id="tabla_derechohabientes">
        <thead>
            <th class="fijo_head" id="id_registro">No. Registro</th>
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
    include "../../../../bd.php";

    $consulta = "SELECT * FROM derechohabientes";
    $resultado = mysqli_query($conexion,$consulta);
        while($fila = mysqli_fetch_assoc($resultado)){
?>
<!-- ------------------------------------------------- -->
            <tr>
                <td class="fijo_body"><?php echo $fila["NoREGISTRO"]; ?></td>
                <td><?php echo $fila["CEDULA"]; ?>/<?php echo $fila["TIPO_BENEFICIARIO"]; ?></td>
                <td><?php echo $fila["NOMBRE"]; ?></td>
                <td><?php echo $fila["PRIMER_APELLIDO"]; ?></td>
                <td><?php echo $fila["SEGUNDO_APELLIDO"]; ?></td>
                <td><?php echo $fila["EDAD"]; ?></td>
                <td><?php echo $fila["SEXO"]; ?></td>
                <td><?php echo $fila["UNIDAD"]; ?></td>
                <td><?php echo $fila["DOMICILIO"]; ?></td>
                <td><?php echo $fila["TELEFONO1"]; ?></td>
                <td><?php echo $fila["TELEFONO2"]; ?></td>
                <td><?php echo $fila["DIAGNOSTICO"]; ?></td>
                <td><?php echo $fila["CIRUGIA"]; ?></td>
                <td><?php echo $fila["FECHA_REGISTRO"]; ?></td>
                <td><?php echo $fila["FECHA_CIRUGIA"]; ?></td>
                <td><?php echo $fila["NoEMPLEADO"]; ?></td>
                <td><?php echo $fila["MEDICO"]; ?></td>
                <td><?php echo $fila["COORDINADOR"]; ?></td>
                <td><?php echo $fila["OBSERVACIONES"]; ?></td>
                <td><a href="#" class="btn_accion" onclick="editar('editar_dh.php?id=<?php echo $fila["NoREGISTRO"];?>')"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            </tr>
<?php
    }
    mysqli_free_result($resultado);
?>
        </tbody>
    </table>
     </div>
   </section>
</body>
</html>