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
  $servicio = trim($_POST['servicio']);
  $motivo = trim($_POST['motivo']);

  $verificacion = "SELECT NoREGISTRO FROM SolicituddeInterconsulta WHERE NoREGISTRO = '$registro'";
  $resultado = mysqli_query($conexion,$verificacion);
  // No existe reporte del derechohabiente.
  if (mysqli_fetch_assoc($resultado)<=0){
    $consulta1 = "INSERT INTO SolicituddeInterconsulta (NoREGISTRO, SERVICIO, MOTIVO) VALUES ('$registro', '$servicio', '$motivo')";
    $query1 = mysqli_query($conexion,$consulta1);

    if($query1){
        echo '<script> location.href="../PDFs/interconsultaPDF.php?id='.$registro.'"; </script>';
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
    $consulta5 = "UPDATE SolicituddeInterconsulta SET SERVICIO='$servicio', MOTIVO='$motivo' WHERE NoREGISTRO='$registro'";
    $query5 = mysqli_query($conexion,$consulta5);

    if($query5){
        echo '<script> location.href="../PDFs/interconsultaPDF.php?id='.$registro.'"; </script>';
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