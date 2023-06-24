<?php
  require "../bd.php";

  $id = $_POST['id'];
  $area = trim($_POST['area']);
  $areaactual = $_POST['areaactual'];

  $consulta = "UPDATE areas SET NOMBRE='$area' WHERE ID='$id'";
  $query = mysqli_query($conexion,$consulta);

  $consulta2 = "UPDATE coordinadores SET COORDINACION='$area' WHERE COORDINACION='$areaactual'";
  $query2 = mysqli_query($conexion,$consulta2);

    if ($query==true && $query2==true){
    echo '
            <script>
                alert("Nombre del área modificado.");
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