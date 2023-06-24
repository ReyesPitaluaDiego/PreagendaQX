<?php
    include "../bd.php";
    $noempleado = $_POST['noempleado'];
    $ncontrasenia = $_POST['ncontrasenia'];
    $t_usuario = $_POST['t_usuario'];

    if ($ncontrasenia==true){
        $consulta = "UPDATE usuarios SET contrasenia='$ncontrasenia', usuario='$t_usuario' WHERE NoEMPLEADO = '$noempleado'";
        $query = mysqli_query($conexion,$consulta);
    } else {
        $consulta2 = "UPDATE usuarios SET usuario='$t_usuario' WHERE NoEMPLEADO = '$noempleado'";
        $query2 = mysqli_query($conexion,$consulta2);
    }

    if($query==true || $query2==true){
        echo '
                <script>
                    alert("Datos de usuario modificados.");
                    location.href="../perfiles/administrador/secciones/usuarios/usuarios.php";
                </script>
            ';
    } else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../perfiles/administrador/secciones/usuarios/usuarios.php";
                </script>
            ';
    }
?>