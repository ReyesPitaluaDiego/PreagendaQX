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
    <link rel="stylesheet" href="../../../../css/admin/coordinadores.css">
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


    <title>Áreas</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>ÁREAS</h1></div>
        <div class="contenido_hed1 cont3 contnav2"><a href="#" id="open_modal" class="btn_registro2"><i class="fa-solid fa-plus icon_nav"></i>Nueva área</a></div>
    </nav>
    <section class="top"></section>
    <br>
   <section class="ancho">
     <div class="contenedor_tabla">
     <p><strong>Lista de áreas:</strong></p>
     <table class="display" id="tabla_areas">
        <thead>
            <th class="fijo_head" id="id_registro">Área</th>
            <th>Coordinador</th>
            <th>Acciones</th>
        </thead>
        <tbody>
<!-- BACKEND - PHP -->
<?php
    include "../../../../bd.php";

    $consulta = "SELECT * FROM areas";
    $resultado = mysqli_query($conexion,$consulta);
        while($fila = mysqli_fetch_assoc($resultado)){
?>
<!-- ------------------------------------------------- -->
            <tr>
                <td class="fijo_body2"><?php echo $fila["NOMBRE"]; ?></td>
                <td>
                    <?php
                            $coordinacion = $fila["NOMBRE"];
                            $consulta2 = "SELECT * FROM coordinadores WHERE COORDINACION = '$coordinacion'";
                            $resultado2 = mysqli_query($conexion,$consulta2);
                            $fila2 = mysqli_fetch_assoc($resultado2);

                            if($fila2 !== null ){
                                if($fila2["SEXO"]=='H') {
                                    echo 'Dr. '.$fila2["NOMBRE"].' '.$fila2["PRIMER_APELLIDO"].' '.$fila2["SEGUNDO_APELLIDO"];
                                }
                                if($fila2["SEXO"]=='M') {
                                    echo 'Dra. '.$fila2["NOMBRE"].' '.$fila2["PRIMER_APELLIDO"].' '.$fila2["SEGUNDO_APELLIDO"];
                                }
                            }
                            else{
                                echo '<span class="gris">Coordinador no asigando</span>';
                            }
                    ?>
                </td>
                <td>
                    <a href="#" class="btn_accion" onclick="editar('editar_area.php?id=<?php echo $fila["ID"];?>')"><i class="fa-solid fa-pen-to-square"></i> Editar</a> |
                    <a href="#" class="btn_accion_delete" onclick="eliminararea('../../../../crud/delete_area.php?id=<?php echo $fila["ID"];?>')"><i class="fa-regular fa-trash-can"></i> Eliminar</a>
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

   <section class="modal" id="modal">
   <form id="form_registro" name="form_registro" class="form_registro ancho1 form_modal" action="../../../../crud/create_area.php" method="post">
        <div class="contform_modal">
            <div class="circulo" id="close_modal"><i class="fa-solid fa-xmark"></i></div>
            <p class="titulo_form">Nueva área</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="area" class="form_row12">Nombre del área: <span class="rojo">*</span><br>
                    <input type="text" name="area" id="area" onkeyup="mayus(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Agregar área" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
   </section>
   <!-- Funciones JS-->
   <script>
      function validacion(){
            if(document.form_registro.area.value.length == 0){
                document.form_registro.area.focus()
                return 0;
            }
            document.form_registro.submit();
        }
        var fondomodal = document.getElementById("modal");
        var open = document.getElementById("open_modal");
        var close = document.getElementById("close_modal");
        open.onclick = function () {
            fondomodal.style.display = "block";
        };
        close.onclick = function () {
            fondomodal.style.display = "none";
        };
        window.onclick = function (event) {
            if (event.target == fondomodal) {
                fondomodal.style.display = "none";
            }
        };
   </script>
</body>
</html>