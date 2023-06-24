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
    <title>Nuevo usuario</title>
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
    <!-- FORMULARIO DE REGISTRO - USUARIO -->
    <form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/create_user.php" method="post">
        <div class="contform_3 contform_4">
            <p class="titulo_form">Datos del administrador</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="noempleado" class="form_row8">No. Empleado: <span class="rojo">*</span><br>
                    <input type="text" name="noempleado" id="noempleado" maxlength="6" onkeyup="mayus(this);">
                </label>
                <label for="contrasenia" class="form_row12">Contraseña por defecto:<br>
                    <input type="text" name="contrasenia" id="contrasenia" value="isssteMIDmx" readonly>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
            <label for="nombre" class="form_row8_8">Nombre: <span class="rojo">*</span><br>
                    <input type="text" name="nombre" id="nombre" onkeyup="capitalice(this);">
                </label>
                <label for="apellido1" class="form_row8_8">Apellido paterno: <span class="rojo">*</span><br>
                    <input type="text" name="apellido1" id="apellido1" onkeyup="capitalice(this);">
                </label>
                <label for="apellido2" class="form_row8_8">Apellido materno:<br>
                    <input type="text" name="apellido2" id="apellido2" onkeyup="capitalice(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Agregar usuario" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>

    <!-- Funciones JS -->
    <script>
        function validacion(){
            if(document.form_registro.noempleado.value.length == 0){
                document.form_registro.noempleado.focus()
                return 0;
            } else {
                if(document.form_registro.noempleado.value.length <6){
                alert("No. Empleado incompleto\nDebe llevar 6 caracteres.")
                document.form_registro.noempleado.focus()
                return 0;
                }
            }
            if(document.form_registro.nombre.value.length == 0){
                document.form_registro.nombre.focus()
                return 0;
            }
            if(document.form_registro.apellido1.value.length == 0){
                document.form_registro.apellido1.focus()
                return 0;
            }
            document.form_registro.submit();
        }
    </script>
</body>
</html>