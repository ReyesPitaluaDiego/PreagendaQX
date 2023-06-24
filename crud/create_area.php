<?php
  require "../bd.php";

  $nombre = trim($_POST['area']);

  $consulta = "INSERT INTO areas (NOMBRE) VALUES ('$nombre')";
  $query = mysqli_query($conexion,$consulta);

  if($query){
    echo '
      <script>
        alert("Nueva área agregada!");
        location.href="../perfiles/administrador/secciones/areas/areas.php";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
        location.href="../perfiles/administrador/secciones/areas/areas.php";
      </script>
  ';
  }
?>