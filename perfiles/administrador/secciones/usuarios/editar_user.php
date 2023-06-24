<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $empleado = $_GET['id'];
    $consulta = "SELECT * FROM usuarios WHERE NoEMPLEADO = '$empleado'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
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
    <title>Modificar usuario</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>USUARIOS</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="usuarios.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO DE MODIFICACIÓN - USUARIO -->
    <form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/update_user.php" method="post">
        <div class="contform_3 contform_4">
            <p class="titulo_form">Datos del usuario</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="noempleado" class="form_row8">No. Empleado:<br>
                    <input type="text" name="noempleado" id="noempleado" value="<?php echo $fila["NoEMPLEADO"];?>" readonly>
                </label>
                <label class="form_row8_8">Nombre:<br>
                    <input value="<?php echo $fila["nombre"]." ".$fila["apellido1"]." ".$fila["apellido2"];?>" readonly>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="ncontrasenia" class="form_row12">Nueva contraseña: <span class="rojo">*</span><br>
                    <input type="text" name="ncontrasenia" id="ncontrasenia"  placeholder="Solo si desa cambiarla">
                </label>
                <label for="area">Privilegios de: <span class="rojo">*</span><br>
                    <select name="t_usuario" id="t_usuario">
                        <option selected="<?php echo $fila["usuario"];?>"><?php echo $fila["usuario"];?></option>
                        <option value="Administrador">Administrador</option>
                        <option value="Coordinador">Coordinador</option>
                        <option value="Médico">Médico</option>
                    </select>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="submit" value="Modificar" class="btn_registro">
            </div>
        </div>
    </form>
</body>
</html>