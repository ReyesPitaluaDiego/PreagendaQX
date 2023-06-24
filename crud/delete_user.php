<?php
    include "../bd.php";
    $noempleado = $_GET['id'];

    $consulta = "DELETE FROM usuarios WHERE NoEMPLEADO = '$noempleado'";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '
                <script>
                    alert("Usuario eliminado.");
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