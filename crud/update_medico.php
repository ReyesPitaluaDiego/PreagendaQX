<?php
  require "../bd.php";

  $noempleadoactual = $_POST['noactual'];
  $noempleado = trim($_POST['noempleado']);
  $nombre = trim($_POST['nombre']);
  $apellido1 = trim($_POST['apellido1']);
  $apellido2 = trim($_POST['apellido2']);
  $sexo = trim($_POST['sexo']);
  $curp = trim($_POST['curp']);
  $especialidad = trim($_POST['especialidad']);
  $cedulap = trim($_POST['cedula_p']);
  $cedulae = trim($_POST['cedula_e']);
  $area = trim($_POST['area']);

  $consulta = "UPDATE medicos SET NoEMPLEADO='$noempleado', NOMBRE='$nombre', PRIMER_APELLIDO='$apellido1', SEGUNDO_APELLIDO='$apellido2', SEXO='$sexo', CURP='$curp', ESPECIALIDAD='$especialidad', CEDULA_PROFESIONAL='$cedulap', CEDULA_ESPECIALIDAD='$cedulae', AREA='$area' WHERE NoEMPLEADO='$noempleadoactual'";
  $query = mysqli_query($conexion,$consulta);

  $consulta2 = "UPDATE usuarios SET NoEMPLEADO='$noempleado', nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2' WHERE NoEMPLEADO='$noempleadoactual'";
  $query2 = mysqli_query($conexion,$consulta2);

  if ($query==true && $query2==true){
    echo '
            <script>
                alert("Datos Modificados.");
                location.href="../perfiles/coordinador/secciones/medicos/medicos.php";
            </script>
        ';
    } else{
    echo '
            <script>
                alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                location.href="../perfiles/coordinador/secciones/medicos/medicos.php";
            </script>
        ';
    }
?>