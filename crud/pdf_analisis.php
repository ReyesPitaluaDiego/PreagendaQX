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
  $estudios = implode(", ",$_POST['estudios']);
  $otros = trim($_POST['otros']);

  $verificacion = "SELECT NoREGISTRO FROM SolicituddeAnalisis WHERE NoREGISTRO = '$registro'";
  $resultado = mysqli_query($conexion,$verificacion);
  // No existe reporte del derechohabiente.
  if (mysqli_fetch_assoc($resultado)<=0){
    $consulta = "INSERT INTO SolicituddeAnalisis (NoREGISTRO, ESTUDIOS, ESTUDIOS_OTROS) VALUES ('$registro', '$estudios', '$otros')";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/analisisPDF.php?id='.$registro.'"; </script>';
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
    $consulta = "UPDATE SolicituddeAnalisis SET ESTUDIOS='$estudios', ESTUDIOS_OTROS='$otros' WHERE NoREGISTRO='$registro'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/analisisPDF.php?id='.$registro.'"; </script>';
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