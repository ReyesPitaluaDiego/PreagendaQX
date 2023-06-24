<?php
  require "../bd.php";
  session_start();
  $NoEMPLEADO = $_SESSION['NoEMPLEADO'];

  $consultaaux = "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
  $resultadoaux = mysqli_query($conexion,$consultaaux);
  $filaaux = mysqli_fetch_assoc($resultadoaux);
  $tipouser= $filaaux['usuario'];
    if ($tipouser == 'Administrador'){
      $ruta = '../perfiles/administrador/secciones/derechohabientes/derechohabientes.php';
    }
    if ($tipouser == 'Coordinador'){
      $ruta = '../perfiles/coordinador/secciones/derechohabientes/derechohabientes.php';
    }
    if ($tipouser == 'Medico'){
      $ruta = '../perfiles/medico/index.php';
    }

  $id = $_POST['registro'];
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
  $fchc = $_POST['fecha_cirugia'];
  $sala = $_POST['sala'];
  $hora = $_POST['hora'];
  if($fchc == null){
    $fechacirugia = "NULL";
  } else{
    $fechacirugia = "'".$fchc."'";
  }
  $observaciones = trim($_POST['observaciones']);

  // Todos los campos son llenados
  $consulta1 = "UPDATE derechohabientes SET CEDULA='$cedula', TIPO_BENEFICIARIO='$clave', NOMBRE='$nombre', PRIMER_APELLIDO='$apellido1', SEGUNDO_APELLIDO='$apellido2', EDAD='$edad', SEXO='$sexo', UNIDAD='$unidad', DOMICILIO='$domicilio', TELEFONO1='$telefono1', TELEFONO2='$telefono2', DIAGNOSTICO='$diagnostico', CIRUGIA='$cirugia', FECHA_REGISTRO='$fecha', FECHA_CIRUGIA=$fechacirugia, SALA='$sala', HORA='$hora', NoEMPLEADO='$no_medico', MEDICO='$medico', COORDINADOR='$coordinador', OBSERVACIONES='$observaciones' WHERE NoREGISTRO='$id'";
  $query = mysqli_query($conexion,$consulta1);

  if($query){
    echo '
      <script>
        alert("Datos modificados.");
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
</body>
</html>