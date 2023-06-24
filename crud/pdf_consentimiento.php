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
  $consentimiento = trim($_POST['consentimiento']);
  $motivos = trim($_POST['motivos']);
  $complicaciones = trim($_POST['complicaciones']);
  $caso_especifico = trim($_POST['caso_especifico']);
  $caso_particular = trim($_POST['caso_particular']);
  $responsable = trim($_POST['responsable']);
  $testigo1 = trim($_POST['testigo1']);
  $testigo2 = trim($_POST['testigo2']);

  $verificacion = "SELECT NoREGISTRO FROM CartadeConsentimiento WHERE NoREGISTRO = '$registro'";
  $resultado = mysqli_query($conexion,$verificacion);

    // No existe reporte del derechohabiente.
  if (mysqli_fetch_assoc($resultado)<=0){
    $consulta = "INSERT INTO CartadeConsentimiento (NoREGISTRO, T_CONSENTIMIENTO, MOTIVOS, COMPLICACIONES, C_ESPECIFICO, C_PARTICULAR, RESPONSABLE, TESTIGO1, TESTIGO2) VALUES ('$registro', '$consentimiento', '$motivos', '$complicaciones', '$caso_especifico', '$caso_particular', '$responsable', '$testigo1', '$testigo2')";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/consentimientoPDF.php?id='.$registro.'"; </script>';
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
    $consulta = "UPDATE CartadeConsentimiento SET T_CONSENTIMIENTO='$consentimiento', MOTIVOS='$motivos', COMPLICACIONES='$complicaciones', C_ESPECIFICO='$caso_especifico', C_PARTICULAR='$caso_particular', RESPONSABLE='$responsable', TESTIGO1='$testigo1', TESTIGO2='$testigo2' WHERE NoREGISTRO='$registro'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/consentimientoPDF.php?id='.$registro.'"; </script>';
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