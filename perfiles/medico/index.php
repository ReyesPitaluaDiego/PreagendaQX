<?php
    require "../../seguridad.php";
    require "../../bd.php";

    $NoEMPLEADO = $_SESSION['NoEMPLEADO'];
    $consulta= "SELECT * FROM medicos WHERE NoEMPLEADO='$NoEMPLEADO'";
    $resultado= mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $medicotratante= $fila['NOMBRE']." ".$fila['PRIMER_APELLIDO']." ".$fila['SEGUNDO_APELLIDO'];
    $area= $fila['AREA'];
    $sexomedico= $fila['SEXO'];
    if($sexomedico=='M') {
        $pref = "Dra. ";
        $pronombre = "la: ";
    } else {
        $pref = "Dr. ";
        $pronombre = "el: ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/admin/registro_coor.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../libs/fontawesome/css/solid.min.css">
    <!-- JQuery -->
    <script src="../../libs/jquery/jquery-3.6.3.min.js"></script>
    <!-- DataTables -->
    <script src="../../libs/datatables/js/datatables.min.js"></script>
    <link rel="stylesheet" href="../../libs/datatables/css/datatables.min.css">
    <!-- FixedColumns -->
    <script src="../../libs/datatables/js/fixedcolumns.min.js"></script>
    <link rel="stylesheet" href="../../libs/datatables/css/fixedcolumns.min.css">
    <!-- FixedHeader -->
    <script src="../../libs/datatables/js/fixedheader.min.js"></script>
    <link rel="stylesheet" href="../../libs/datatables/css/fixedheader.min.css">
    <!-- Scroller -->
    <script src="../../libs/datatables/js/scroller.min.js"></script>
    <link rel="stylesheet" href="../../libs/datatables/css/scroller.min.css">
    <title>Cirugías - Médico</title>
</head>
<body>
    <header>
        <div class="header1">
            <div class="contenido_hed1 cont1"><img src="../../img/gobmx_logo.png"></div>
            <div class="contenido_hed1 cont2"><h1>Programación de Cirugías</h1></div>
            <div class="contenido_hed1 cont3"><img src="../../img/issste_logo.png"></div>
        </div>

        <div class="header1 header2">
            <div class="contenido_hed1 cont1"><div class="tipo_perfil"><i class="fa-solid fa-user-doctor icon_open"></i><p>Perfil de:<br>Médico</p></div><div class="usuario_contraseña"><a href="#" id="open_modal">Cambiar contraseña</a></div></div>
            <div class="contenido_hed1 cont2 fecha">
            <script src="../../js/main.js">fecha;</script>
            </div>
            <div class="contenido_hed1 cont3"><a href="../../cerrar.php" ><i class="fa-solid fa-right-to-bracket"></i></a></div>
            </div>
        </div>
    </header>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>DERECHOHABIENTES</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="secciones/derechohabientes/reportes_dh.php" class="btn_reportes"><i class="fa-solid fa-file-medical icon_nav"></i>Reportes</a>
            <a href="secciones/derechohabientes/registro_dh.php" class="btn_registro"><i class="fa-solid fa-plus icon_nav"></i>Registrar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <section class="ancho contenedordemenu">
     <div class="contenedor_tabla">
     <p><strong>Derechohabientes registrados por <?php echo $pronombre; ?><span class="fijo_head"><?php echo $pref.''. $medicotratante; ?></span> </strong></p>
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
    $consulta2 = "SELECT * FROM derechohabientes WHERE NoEMPLEADO='$NoEMPLEADO'";
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
                <td><a href="#" class="btn_accion" onclick="editar('secciones/derechohabientes/editar_dh.php?id=<?php echo $fila2["NoREGISTRO"];?>')"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            </tr>
<?php
    }
    mysqli_free_result($resultado2);
?>
        </tbody>
    </table>
     </div>
   </section>
<?php
        require "../../templates/modal_password.php";
        require "../../templates/footer.php";
?>
<script src="../../js/modal.js"></script>
</body>
</html>