<?php
    include "../bd.php";
    $noempleado = $_GET['id'];

    $consulta1 = "DELETE FROM medicos WHERE NoEMPLEADO = '$noempleado'";
    $resultado1 = mysqli_query($conexion,$consulta1);

    $consulta2 = "DELETE FROM usuarios WHERE NoEMPLEADO = '$noempleado'";
    $resultado2 = mysqli_query($conexion,$consulta2);

    if($resultado1==true && $resultado2==true){
        echo '
                <script>
                    alert("Coordinador eliminado.");
                    location.href="../perfiles/coordinador/secciones/medicos/medicos.php";
                </script>
            ';
    } else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../perfiles/coordinador/secciones/medicos/medicos.php";
                </script>
            ';
    }
?>