<?php
  require "../bd.php";

  $nombre = trim($_POST['nombre']);
  $complicaciones = trim($_POST['complicaciones']);
  $c_especifico = trim($_POST['caso_especifico']);

  $registro = "INSERT INTO consentimientos (id, NOMBRE, COMPLICACIONES, C_ESPECIFICO) VALUES (NULL, '$nombre', '$complicaciones', '$c_especifico')";
  $query = mysqli_query($conexion, $registro);

  if($query) {
        echo '
              <script>
                      alert ("Nuevo consentimiento agregado!");
                      location.href="../perfiles/coordinador/secciones/consentimientos/consentimientos.php";
              </script>
            ';
    }
    else{
        echo '
                <script>
                    alert ("Ups, ocurrió un problema!.\n\n'.mysqli_error($conexion).'");
                    location.href="../perfiles/coordinador/secciones/consentimientos/consentimientos.php";
                </script>
            ';
    }
?>