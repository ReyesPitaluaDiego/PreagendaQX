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
  $fechaingreso = $_POST['fecha_ingreso'];
  if($fechaingreso == null){
    $ingreso = "NULL";
  } else{
    $ingreso = "'".$fechaingreso."'";
  }
  $hr = $_POST['hora'];
  if($hr == null){
    $hora = "NULL";
  } else{
    $hora = "'".$hr."'";
  }
  $servicio = trim($_POST['servicio']);

  $verificacion = "SELECT NoREGISTRO FROM OrdendeIngreso WHERE NoREGISTRO = '$registro'";
  $resultado = mysqli_query($conexion,$verificacion);
  // No existe reporte del derechohabiente.
  if (mysqli_fetch_assoc($resultado)<=0){
    $consulta1 = "INSERT INTO OrdendeIngreso (NoREGISTRO, INGRESO, HORA, SERVICIO) VALUES ('$registro', $ingreso, $hora, '$servicio')";
    $query1 = mysqli_query($conexion,$consulta1);

    if($query1){
        echo '<script> location.href="../PDFs/ingresoPDF.php?id='.$registro.'"; </script>';
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
    $consulta5 = "UPDATE OrdendeIngreso SET INGRESO=$ingreso, HORA=$hora, SERVICIO='$servicio' WHERE NoREGISTRO='$registro'";
    $query5 = mysqli_query($conexion,$consulta5);

    if($query5){
        echo '<script> location.href="../PDFs/ingresoPDF.php?id='.$registro.'"; </script>';
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