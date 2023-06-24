<?php
    require "../../../../seguridad.php";
    require "../../../../bd.php";

    $empleado = $_GET['id'];
    $consulta = "SELECT * FROM coordinadores WHERE NoEMPLEADO = '$empleado'";
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
    <link rel="stylesheet" href="../../../../css/admin/registro_coor.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <title>Editar coordinador</title>
</head>
<body>
    <?php
     include "../../header.php";
    ?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>COORDINADORES</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <a href="coordinadores.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a>
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO DE MODIFICACIÓN - COORDINADOR -->
    <form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/update_coor.php" method="post">
        <div class="contform_3">
            <p class="titulo_form">Datos del coordinador</p>
            <input type="text" name="noactual" id="noactual" value="<?php echo $fila["NoEMPLEADO"];?>" hidden> <!-- NoEMPLEADO actual de la tabla "coordinadores" y "usuarios" / sirve como indicador por si se modifica -->
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="noempleado" class="form_row8">No. Empleado: <span class="rojo">*</span><br>
                    <input type="text" name="noempleado" id="noempleado" maxlength="6" onkeyup="mayus(this);" value="<?php echo $fila["NoEMPLEADO"];?>">
                </label>
                <label for="cedula_p" class="form_row8_8">Cédula profesional: <span class="rojo">*</span><br>
                    <input type="text" name="cedula_p" id="cedula_p" maxlength="10" onkeyup="mayus(this);" value="<?php echo $fila["CEDULA_PROFESIONAL"];?>">
                </label>
                <label for="cedula_e" class="form_row8_8">Cédula especialidad: <span class="rojo">*</span><br>
                    <input type="text" name="cedula_e" id="cedula_e" maxlength="10" onkeyup="mayus(this);" value="<?php echo $fila["CEDULA_ESPECIALIDAD"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre" class="form_row9">Nombre(s): <span class="rojo">*</span><br>
                    <input type="text" name="nombre" id="nombre" onkeyup="capitalice(this);" value="<?php echo $fila["NOMBRE"];?>">
                </label>
                <label for="apellido1" class="form_row10">Apellido paterno: <span class="rojo">*</span><br>
                    <input type="text" name="apellido1" id="apellido1" onkeyup="capitalice(this);" value="<?php echo $fila["PRIMER_APELLIDO"];?>">
                </label>
                <label for="apellido2" class="form_row10">Apellido materno:<br>
                    <input type="text" name="apellido2" id="apellido2" onkeyup="capitalice(this);" value="<?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="curp" class="form_row11">CURP: <span class="rojo">*</span><br>
                    <input type="text" name="curp" id="curp" maxlength="18" onkeyup="mayus(this);" value="<?php echo $fila["CURP"];?>">
                </label>
                <label for="sexo">Sexo: <span class="rojo">*</span><p class="aux2">|</p>
                    <label><input type="radio" name="sexo" id="sexo" value="H"><span class="aux"> Hombre</span></label>
                    <label><input type="radio" name="sexo" id="sexo" value="M"><span class="aux"> Mujer</span></label>
                </label>
                <script>
                    var sexosql = "<?php echo $fila["SEXO"];?>";
                    var sexo = document.querySelector('input[name="sexo"][value="M"]');
                    if(sexo.value == sexosql){
                        document.querySelector('input[name="sexo"][value="M"]').checked = true;
                    } else{
                        document.querySelector('input[name="sexo"][value="H"]').checked = true;
                    }
                </script>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="especialidad" class="form_row12">Especialidad: <span class="rojo">*</span><br>
                    <input type="text" name="especialidad" id="especialidad" onkeyup="capitalice(this);"  value="<?php echo $fila["ESPECIALIDAD"];?>">
                </label>
                <label for="area">Área que coordina: <span class="rojo">*</span><br>
                    <select name="area" id="area">
                        <option selected="<?php echo $fila["COORDINACION"];?>"><?php echo $fila["COORDINACION"];?></option>
                        <!-- BACKEND - PHP -->
                        <?php
                            $consulta = "SELECT * FROM areas";
                            $resultado = mysqli_query($conexion,$consulta);
                            while($fila = mysqli_fetch_assoc($resultado)){
                        ?>
                        <option value="<?php echo $fila["NOMBRE"]; ?>"><?php echo $fila["NOMBRE"]; ?></option>
                        <?php
                            }
                            mysqli_free_result($resultado);
                        ?>
                    </select>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Modificar" class="btn_registro" onclick="validacion()">
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
            if(document.form_registro.cedula_p.value.length == 0){
                document.form_registro.cedula_p.focus()
                return 0;
            }
            if(document.form_registro.cedula_e.value.length == 0){
                document.form_registro.cedula_e.focus()
                return 0;
            }
            if(document.form_registro.nombre.value.length == 0){
                document.form_registro.nombre.focus()
                return 0;
            }
            if(document.form_registro.apellido1.value.length == 0){
                document.form_registro.apellido1.focus()
                return 0;
            }
            if(document.form_registro.curp.value.length == 0){
                document.form_registro.curp.focus()
                return 0;
            } else {
                if(document.form_registro.curp.value.length < 18){
                alert("Verifique la CURP (18 caracteres en total).")
                document.form_registro.curp.focus()
                return 0;
                }
            }
            if(document.form_registro.sexo.value !="H" && document.form_registro.sexo.value !="M"){
                alert("Seleccione un sexo.")
                document.form_registro.sexo.focus()
                return 0;
            }
            if(document.form_registro.especialidad.value.length == 0){
                document.form_registro.especialidad.focus()
                return 0;
            }
            if(document.form_registro.area.value == 0){
                document.form_registro.area.focus()
                return 0;
            }
            document.form_registro.submit();
        }
    </script>
</body>
</html>