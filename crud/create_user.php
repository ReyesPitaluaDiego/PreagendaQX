<?php
    require "../bd.php";

    $noempleado = trim($_POST['noempleado']);
    $contrasenia = trim($_POST['contrasenia']);
    $nombre = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);
    $usuario = 'Administrador';

    $consulta = "INSERT INTO usuarios (NoEMPLEADO, nombre, apellido1, apellido2, contrasenia, usuario) VALUES('$noempleado','$nombre','$apellido1','$apellido2','$contrasenia','$usuario')";
    $query = mysqli_query($conexion,$consulta);

    if($query){
        echo '
                <script>
                    alert("Usuario-Administrador registrado.");
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