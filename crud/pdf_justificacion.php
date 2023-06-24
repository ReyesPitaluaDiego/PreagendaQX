<?php
  require "../bd.php";
  session_start();
  $NoEMPLEADO = $_SESSION['NoEMPLEADO'];

  $consultaaux = "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
  $resultadoaux = mysqli_query($conexion,$consultaaux);
  $filaaux = mysqli_fetch_assoc($resultadoaux);
  $tipouser = $filaaux['usuario'];
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
    $asunto = trim($_POST['asunt']);
    $servicio = trim($_POST['servicio']);
    $justificacion = trim($_POST['justificacion']);
    $motivo = trim($_POST['motivo']);
    $periodo = trim($_POST['periodo']);

    $verificacion = "SELECT NoREGISTRO FROM JustificacionTecnicoMedica WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$verificacion);

    // No existe reporte del derechohabiente.
    if (mysqli_fetch_assoc($resultado)<=0){
      $consulta = "INSERT INTO JustificacionTecnicoMedica (NoREGISTRO, ASUNTO, SERVICIO, JUSTIFICACION, MOTIVO, PERIODO) VALUES ('$registro', '$asunto', '$servicio', '$justificacion','$motivo','$periodo')";
      $query = mysqli_query($conexion,$consulta);

      if($query){
          echo '<script> location.href="../PDFs/justificacionPDF.php?id='.$registro.'"; </script>';
      } else{
          echo '
                  <script>
                      alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                      location.href="'.$ruta.'";
                  </script>
              ';
        }
      //   Ya existe reporte del derechohabiente.
    } else{
      $consulta = "UPDATE JustificacionTecnicoMedica SET ASUNTO='$asunto', SERVICIO='$servicio', JUSTIFICACION='$justificacion', MOTIVO='$motivo', PERIODO='$periodo' WHERE NoREGISTRO='$registro'";
      $query = mysqli_query($conexion,$consulta);

      if($query){
          echo '<script> location.href="../PDFs/justificacionPDF.php?id='.$registro.'"; </script>';
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