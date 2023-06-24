<?php
    require "bd.php";

    $clave = $_POST['clave'];
    $contrasenia = $_POST['contrasenia'];

    // Consulta a la tabla "usuario" si existe el usuario con la clave y contraseña registrado en el formulario
    $sentencia = "SELECT * FROM usuarios WHERE NoEMPLEADO='$clave' AND contrasenia='$contrasenia'";
    $consulta = mysqli_query($conexion,$sentencia);
    $resultado = mysqli_fetch_array($consulta);
    $tipouser = $resultado['usuario']; // Se consulta el tipo de usuario (administrador,coordinador o médico)

    // Si la consulta devolvio al menos un registro se abre una sesión, se crea una variable de sesión y se
    // redirige al index de su tipo de usuario
    if(mysqli_num_rows($consulta) > 0){
        session_start();
        $_SESSION['NoEMPLEADO'] = $clave;
        $_SESSION['autentificado'] = "SI";

        if($tipouser == "Administrador"){
            header("Location: perfiles/administrador/index.php");
        }
        if($tipouser == "Coordinador"){
            header("Location: perfiles/coordinador/index.php");
        }
        if($tipouser == "Medico"){
            header("Location: perfiles/medico/index.php");
        }
    // De no devolver un regitro que coincida con la consulta se manda una variable via GET al index indicando un error
    } else{
        echo '
            <script>
            location.href="index.php?error=SI";
            </script>
        ';
      }
    mysqli_free_result($consulta);
    mysqli_close($conexion);
?>