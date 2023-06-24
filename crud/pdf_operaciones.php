<?php
  require "../bd.php";
  session_start();
  $NoEMPLEADO = $_SESSION['NoEMPLEADO'];

  $consultaaux = "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
  $resultadoaux = mysqli_query($conexion,$consultaaux);
  $filaaux = mysqli_fetch_assoc($resultadoaux);
  $tipouser= $filaaux['usuario'];
    if ($tipouser == 'Administrador'){
      $ruta = '../perfiles/administrador/secciones/derechohabientes/reportes_dh.php';
    }
    if ($tipouser == 'Coordinador'){
      $ruta = '../perfiles/coordinador/secciones/derechohabientes/reportes_dh.php';
    }
    if ($tipouser == 'Medico'){
      $ruta = '../perfiles/medico/secciones/derechohabientes/reportes_dh.php';
    }

    $registro = $_POST['registro'];
    $cama = trim($_POST['cama']);
    $hr = $_POST['hora'];
    if($hr == null){
      $hora = "NULL";
    } else{
      $hora = "'".$hr."'";
    }
    $cduracion = trim($_POST['duracion']);
    $tanestesia = trim($_POST['tanestesia']);
    $posicion = trim($_POST['posicion']);
    $srequerido = trim($_POST['colaboracion']);
    $instrumental = trim($_POST['instrumental']);
    $ayudante1 = trim($_POST['ayudante1']);
    $ayudante2 = trim($_POST['ayudante2']);
    $ayudante3 = trim($_POST['ayudante3']);
    $anestesiologo = trim($_POST['anestesiologo']);
    $dpostoperatorio = trim($_POST['postoperatorio']);
    $danestesia = trim($_POST['danestesia']);
    $tsangre = trim($_POST['tsangre']);
    $rh = trim($_POST['rh']);
    $observaciones = trim($_POST['observaciones']);
    $descripcion = trim($_POST['descripcion']);

    $verificacion = "SELECT NoREGISTRO FROM HojadeOperaciones WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$verificacion);

    // No existe reporte del derechohabiente.
    if (mysqli_fetch_assoc($resultado)<=0){
      $consulta = "INSERT INTO HojadeOperaciones (NoREGISTRO, NoCAMA, HORA, DURACION, ANESTESIA, POSICION, S_REQUERIDO, INSTRUMENTAL, AYUDANTE1, AYUDANTE2, AYUDANTE3, ANESTESIOLOGO, D_POSTOPERATORIO, D_ANESTESIA, T_SANGRE, FACTOR_RH, OBSERVACIONES, DESCRIPCION) VALUES ('$registro', '$cama', $hora, '$cduracion', '$tanestesia', '$posicion', '$srequerido', '$instrumental', '$ayudante1', '$ayudante2', '$ayudante3', '$anestesiologo', '$dpostoperatorio', '$danestesia', '$tsangre', '$rh', '$observaciones', '$descripcion')";
      $query = mysqli_query($conexion,$consulta);

      if($query){
          echo '<script> location.href="../PDFs/operacionesPDF.php?id='.$registro.'"; </script>';
      } else{
          echo '
                  <script>
                      alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                      location.href="'.$ruta.'";
                  </script>
              ';
        }
    // Ya existe reporte del derechohabiente.
    } else{
      $consulta = "UPDATE HojadeOperaciones SET NoCAMA='$cama', HORA=$hora, DURACION='$cduracion', ANESTESIA='$tanestesia', POSICION='$posicion', S_REQUERIDO='$srequerido', INSTRUMENTAL='$instrumental', AYUDANTE1='$ayudante1', AYUDANTE2='$ayudante2', AYUDANTE3='$ayudante3', ANESTESIOLOGO='$anestesiologo', D_POSTOPERATORIO='$dpostoperatorio', D_ANESTESIA='$danestesia', T_SANGRE='$tsangre', FACTOR_RH='$rh', OBSERVACIONES='$observaciones', DESCRIPCION='$descripcion' WHERE NoREGISTRO='$registro'";
      $query = mysqli_query($conexion,$consulta);

      if($query){
          echo '<script> location.href="../PDFs/operacionesPDF.php?id='.$registro.'"; </script>';
      } else{
          echo '
                  <script>
                      alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                      location.href="'.$ruta.'";
                  </script>
              ';
        }
    }
?>