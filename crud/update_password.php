<?php
  require "../bd.php";
  session_start();
  $NoEMPLEADO = $_SESSION['NoEMPLEADO'];

  $consultaaux = "SELECT * FROM usuarios WHERE NoEMPLEADO='$NoEMPLEADO'";
  $resultadoaux = mysqli_query($conexion,$consultaaux);
  $filaaux = mysqli_fetch_assoc($resultadoaux);
  $tipouser = $filaaux['usuario'];
  $passwordactual = $filaaux['contrasenia'];
    if ($tipouser =='Administrador'){
      $ruta = '../perfiles/administrador/index.php';
    }
    if ($tipouser == 'Coordinador'){
        $ruta = '../perfiles/coordinador/index.php';
    }
    if ($tipouser == 'Medico'){
      $ruta = '../perfiles/medico/index.php';
    }

  $contrasenia = $_POST['actual'];
  $nuevacontrasenia = $_POST['nuevac'];

  if ($passwordactual == $contrasenia){
        $consulta = "UPDATE usuarios SET contrasenia='$nuevacontrasenia' WHERE NoEMPLEADO = '$NoEMPLEADO'";
        $query = mysqli_query($conexion,$consulta);
        if($query){
            echo '
                    <script>
                        alert("Cambio de contraseña exitoso!");
                        location.href="'.$ruta.'";
                    </script>
                ';
        } else{
            echo '
                    <script>
                        alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                        location.href="'.$ruta.'";
                    </script>
                ';
        }
  } else{
    echo '
                    <script>
                        alert("El campo CONTRASEÑA ACTUAL no coincide con su contraseña actual.\n\nPor favor intente de nuevo.");
                        location.href="'.$ruta.'";
                    </script>
                ';
  }
?>