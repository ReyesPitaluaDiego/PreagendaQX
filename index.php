<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_user_issste</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="libs/fontawesome/css/solid.min.css">
</head>
<body>
    <header>
        <div class="cont_header1">
            <figure>
                <img src="img/gobmx_logo.png">
            </figure>
            <h1>Programación de Cirugías</h1>
            <figure>
                <img src="img/issste_logo.png">
            </figure>
        </div>
        <!-- ----------------------------------- -->
        <div class="cont_header2">
            <h2>Control de acceso</h2>
        </div>
    </header>
    <main>
    <i class="hospital_icon fa-solid fa-hospital-user"></i>

    <form class="login_user" action="autentificacion.php" name="iniciar_sesion" method="post">
    <div class="msg_error1">
        <?php
        $error = isset($_GET["error"]);
            if ($error == "SI"){
                echo '<p>* Usuario y/o contraseña incorrecta.</p>';
            }
        ?>
    </div>
        <label>Número de empleado:</label><br>
        <input type="text" name="clave" id="clave" required>
        <br><br>
        <label>Contraseña:</label><br>
        <input type="password" name="contrasenia" id="contrasenia" required>
        <div class="cont_btn_login">
            <button class="btn_login" type="submit">Ingresar</button>
        </div>
    </form>

    <div class="msg_error2">
        <?php
            $error = isset($_GET["error"]);
            if ($error == "SI"){
                echo '<p>Si no recuerda su contraseña</p><a href="mailto:angel.alcala@issste.gob.mx">contacte al administrador.</a>';
            }
        ?>
    </div>
    </main>
</body>
</html>