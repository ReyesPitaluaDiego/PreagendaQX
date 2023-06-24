<?php
  require "../bd.php";

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

  $contrasenia = $_POST['contrasenia'];
  $usuario = $_POST['usuario'];

//   Registro de Coordinador
    $registro1 = "INSERT INTO coordinadores (NoEMPLEADO, NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, SEXO, CURP, ESPECIALIDAD, CEDULA_PROFESIONAL, CEDULA_ESPECIALIDAD, COORDINACION) VALUES ('$noempleado', '$nombre', '$apellido1', '$apellido2', '$sexo', '$curp', '$especialidad', '$cedulap', '$cedulae', '$area')";
    $query1 = mysqli_query($conexion,$registro1);
//   Registro de Usuario - coordinador
    $registro2 = "INSERT INTO usuarios (NoEMPLEADO, nombre, apellido1, apellido2, contrasenia, usuario) VALUES ('$noempleado', '$nombre', '$apellido1', '$apellido2', '$contrasenia', '$usuario')";
    $query2 = mysqli_query($conexion,$registro2);

  if($query1==true && $query2==true){
    echo '
      <script>
        alert("Registro exitoso!");
        location.href="../perfiles/administrador/secciones/coordinadores/coordinadores.php";
      </script>
    ';
  }
  else{
    echo '
    <script>
        alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
        location.href="../perfiles/administrador/secciones/coordinadores/coordinadores.php";
      </script>
  ';
  }
?>