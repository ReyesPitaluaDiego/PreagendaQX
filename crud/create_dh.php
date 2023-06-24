<?php
  require "../bd.php";
  session_start();
  $NoEMPLEADO = $_SESSION['NoEMPLEADO'];

  $consultaaux = "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
  $resultadoaux = mysqli_query($conexion,$consultaaux);
  $filaaux = mysqli_fetch_assoc($resultadoaux);
  $tipouser = $filaaux['usuario'];
    if ($tipouser == 'Administrador'){
      $ruta = '../perfiles/administrador/secciones/derechohabientes/derechohabientes.php';
    } else {
      $ruta = '../perfiles/medico/index.php';
    }

  $cedula = trim($_POST['cedula']);
  $clave = trim($_POST['clave_dh']);
  $nombre = trim($_POST['nombre']);
  $apellido1 = trim($_POST['apellido1']);
  $apellido2 = trim($_POST['apellido2']);
  $edad = trim($_POST['edad']);
  $sexo = trim($_POST['sexo']);
  $telefono1 = trim($_POST['telefono1']);
  $telefono2 = trim($_POST['telefono2']);
  $domicilio = trim($_POST['domicilio']);
  $unidad = trim($_POST['uemisora']);
  $diagnostico = trim($_POST['diagnostico']);
  $cirugia = trim($_POST['cirugia']);
  $no_medico = trim($_POST['numero_medico']);
  $medico = trim($_POST['nombre_medico']);
  $coordinador = trim($_POST['nombre_coor']);
  $fecha = trim($_POST['fecha']);

  $consulta = "INSERT INTO derechohabientes (NoREGISTRO, CEDULA, TIPO_BENEFICIARIO, NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, EDAD, SEXO, UNIDAD, DOMICILIO, TELEFONO1, TELEFONO2, DIAGNOSTICO, CIRUGIA, FECHA_REGISTRO, FECHA_CIRUGIA, SALA, HORA, NoEMPLEADO, MEDICO, COORDINADOR, OBSERVACIONES) VALUES ( NULL,'$cedula','$clave','$nombre','$apellido1','$apellido2','$edad','$sexo', '$unidad', '$domicilio', '$telefono1', '$telefono2', '$diagnostico', '$cirugia', '$fecha', NULL, NULL, NULL, '$no_medico', '$medico', '$coordinador', NULL)";
  $query = mysqli_query($conexion,$consulta);

  if($query){
    echo '
      <script>
        alert("Registro exitoso!");
        location.href="'.$ruta.'";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
        location.href="'.$ruta.'";
      </script>
  ';
  }
?>