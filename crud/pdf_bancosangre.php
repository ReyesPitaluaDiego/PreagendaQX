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
  $motivo = $_POST['motivo'];
  $motivo2 = $_POST['motivo2'];
  $sitio = trim($_POST['sitio']);
  $hb = trim($_POST['hb']);
  $hto = trim($_POST['hto']);
  $tprevia = $_POST['tprevia'];
  $ultimat = $_POST['ultimat'];
  if($ultimat == null){
    $fchultima = "NULL";
  } else{
    $fchultima = "'".$ultimat."'";
  }
  $reaccion = implode(", ",$_POST['reaccion']);
  $globulosr = trim($_POST['globulosr']);
  $plasmaf = trim($_POST['plasmaf']);
  $plasmafc = trim($_POST['plasmafc']);
  $concentrado = trim($_POST['concentrado']);
  $stotal = trim($_POST['stotal']);
  $otros = trim($_POST['otros']);
  $justificacion = trim($_POST['justificacion']);

  $verificacion = "SELECT NoREGISTRO FROM SolicituddeTransfusion WHERE NoREGISTRO = '$registro'";
  $resultado = mysqli_query($conexion,$verificacion);
  // No existe reporte del derechohabiente.
  if (mysqli_fetch_assoc($resultado)<=0){
    $consulta = "INSERT INTO SolicituddeTransfusion (NoREGISTRO, MOTIVO, MOTIVO2, SITIO, HB, HTO, TRANSFUSION_PREVIA, FCH_ULT_TRANSFUSION, REACCIONES, GLOBULOS_ROJOS, PLASMA_FRESCO, PLASMA_FRESCO_C, CONCENTRADO_PLAQUETARIO, SANGRE_TOTAL, OTROS, JUSTIFICACION) VALUES ('$registro', '$motivo', '$motivo2', '$sitio', '$hb', '$hto', '$tprevia', $fchultima, '$reaccion', '$globulosr', '$plasmaf', '$plasmafc', '$concentrado', '$stotal', '$otros', '$justificacion')";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/bancosangrePDF.php?id='.$registro.'"; </script>';
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
    $consulta = "UPDATE SolicituddeTransfusion SET MOTIVO='$motivo', MOTIVO2='$motivo2', SITIO='$sitio', HB='$hb', HTO='$hto', TRANSFUSION_PREVIA='$tprevia', FCH_ULT_TRANSFUSION=$fchultima, REACCIONES='$reaccion', GLOBULOS_ROJOS='$globulosr', PLASMA_FRESCO='$plasmaf', PLASMA_FRESCO_C='$plasmafc', CONCENTRADO_PLAQUETARIO='$concentrado', SANGRE_TOTAL='$stotal', OTROS='$otros', JUSTIFICACION='$justificacion' WHERE NoREGISTRO='$registro'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '<script> location.href="../PDFs/bancosangrePDF.php?id='.$registro.'"; </script>';
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