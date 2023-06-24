<?php
require "../../../../seguridad.php";
require "../../../../bd.php";

$id = $_GET['id'];
$consulta = "SELECT * FROM areas WHERE ID = '$id'";
$resultado = mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_assoc($resultado);
$area = $fila["NOMBRE"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/admin/coordinadores.css">
    <link rel="stylesheet" href="../../../../css/admin/registro_coor.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">


    <title>Modificar área</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>ÁREAS</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="areas.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
   <section>
   <form id="form_registro" name="form_registro" class="form_registro ancho1 form_modal" action="../../../../crud/update_area.php" method="post">
        <div class="contform_modal">
            <p class="titulo_form">Cambio de nombre</p>
            <!-- ---------------------------------------------------------- -->
            <input type="text" id="id" name="id" value="<?php echo $id; ?>" hidden>
            <input type="text" id="areaactual" name="areaactual" value="<?php echo $area; ?>" hidden>
            <div class="form_group">
                <label for="area" class="form_row12">Nombre del área: <span class="rojo">*</span><br>
                    <input type="text" name="area" id="area" onkeyup="mayus(this);" placeholder="<?php echo $area; ?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Modificar área" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
   </section>
   <!-- Funciones JS para DataTables-->
   <script>
      function validacion(){
            if(document.form_registro.area.value.length == 0){
                document.form_registro.area.focus()
                return 0;
            }
            document.form_registro.submit();
        }
   </script>
</body>
</html>