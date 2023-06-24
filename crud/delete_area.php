<?php
    include "../bd.php";
    $id = $_GET['id'];

    $consulta = "SELECT * FROM areas WHERE ID = '$id'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $area = $fila['NOMBRE'];

    $consulta2 = "DELETE FROM coordinadores WHERE COORDINACION = '$area'";
    $resultado2 = mysqli_query($conexion,$consulta2);

    $consulta1 = "DELETE FROM areas WHERE ID = '$id'";
    $resultado1 = mysqli_query($conexion,$consulta1);

    if($resultado1==true && $resultado2==true){
        echo '
                <script>
                    alert("Área eliminada.");
                    location.href="../perfiles/administrador/secciones/areas/areas.php";
                </script>
            ';
    } else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../perfiles/administrador/secciones/areas/areas.php";
                </script>
            ';
    }
?>