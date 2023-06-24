<?php
    require "../../seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/admin/admin_index.css">
    <link rel="stylesheet" href="../../css/admin/registro_coor.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../libs/fontawesome/css/solid.min.css">
    <!-- JQuery -->
    <script src="../../libs/jquery/jquery-3.6.3.min.js"></script>
    <title>Cirugías - Administrador</title>
</head>
<body>
    <header>
        <div class="header1">
            <div class="contenido_hed1 cont1"><img src="../../img/gobmx_logo.png"></div>
            <div class="contenido_hed1 cont2"><h1>Programación de Cirugías</h1></div>
            <div class="contenido_hed1 cont3"><img src="../../img/issste_logo.png"></div>
        </div>

        <div class="header1 header2">
            <div class="contenido_hed1 cont1"><div class="tipo_perfil"><i class="fa-regular fa-user-gear icon_open"></i><p>Perfil de:<br>Administrador</p></div><div class="usuario_contraseña"><a href="#" id="open_modal">Cambiar contraseña</a></div></div>
            <div class="contenido_hed1 cont2 fecha">
                <script src="../../js/main.js">fecha;</script>
            </div>
            <div class="contenido_hed1 cont3"><a href="../../cerrar.php" ><i class="fa-solid fa-right-to-bracket"></i></a></div>
            </div>
        </div>
    </header>
    <section class="top"></section>
    <main class="contenedordemenu">
    <section class="contenedor_menu ancho1">
        <article class="opcion_menu">
            <figure><img src="../../img/img_derechohabientes.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/derechohabientes/derechohabientes.php">Derechohabientes</a></div>
        </article>

        <article class="opcion_menu">
            <figure><img src="../../img/img_coordinadores.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/coordinadores/coordinadores.php">Coordinadores</a></div>
        </article>

        <article class="opcion_menu">
            <figure><img src="../../img/img_medicos.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/medicos/medicos.php">Médicos</a></div>
        </article>

        <article class="opcion_menu">
            <figure><img src="../../img/img_areas.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/areas/areas.php">Áreas</a></div>
        </article>
    </section>
    <br>
    <section class="contenedor_menu ancho1">
        <article class="opcion_menu">
            <figure><img src="../../img/img_catalogo.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/usuarios/usuarios.php">Usuarios</a></div>
        </article>

        <article class="opcion_menu">
            <figure><img src="../../img/img_reportes.jpg" alt=""></figure>
            <div class="btn_menu"><a href="secciones/reportes/reportes.php">Reportes</a></div>
        </article>
    </section>
    </main>
    <br><br>
<?php
        require "../../templates/modal_password.php";
        require "../../templates/footer.php";
?>
<script src="../../js/modal.js"></script>
</body>
</html>