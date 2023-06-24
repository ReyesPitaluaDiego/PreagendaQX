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
    <title>Usuarios</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>USUARIOS</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="registro_user.php" class="btn_registro2"><i class="fa-solid fa-plus icon_nav"></i>Nuevo Administrador</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <section class="ancho">
     <div class="contenedor_tabla">
     <p><strong>Lista de usuarios:</strong></p>
     <table class="display" id="tabla_usuarios">
        <thead>
            <th class="fijo_head" id="id_registro">No.<br>Empleado</th>
            <th>Nombre(s)</th>
            <th>Apellido<br>Paterno</th>
            <th>Apellido<br>Materno</th>
            <th>Contraseña</th>
            <th>Privilegios</th>
            <th>Acciones</th>
        </thead>
        <tbody>
<!-- BACKEND - PHP -->
<?php
    include "../../../../bd.php";

    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion,$consulta);
        while($fila = mysqli_fetch_assoc($resultado)){
?>
<!-- ------------------------------------------------- -->
            <tr>
                <td class="fijo_body"><?php echo $fila["NoEMPLEADO"]; ?></td>
                <td><?php echo $fila["nombre"]; ?></td>
                <td><?php echo $fila["apellido1"]; ?></td>
                <td><?php echo $fila["apellido2"]; ?></td>
                <td>******</td>
                <td><?php echo $fila["usuario"]; ?></td>
                <td><a href="#" class="btn_accion" onclick="editar('editar_user.php?id=<?php echo $fila["NoEMPLEADO"];?>')"><i class="fa-solid fa-pen-to-square"></i> Editar</a> |
                    <a href="#" class="btn_accion_delete" onclick="eliminaruser('../../../../crud/delete_user.php?id=<?php echo $fila["NoEMPLEADO"];?>')"><i class="fa-regular fa-trash-can"></i> Eliminar</a>
                </td>
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