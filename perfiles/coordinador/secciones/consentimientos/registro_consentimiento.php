<?php
    require "../../../../seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/header.css">
    <link rel="stylesheet" href="../../../../css/admin/derechohabiente.css">
    <link rel="stylesheet" href="../../../../css/orden_ingreso.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../../libs/fontawesome/css/solid.min.css">
    <title>Nuevo consentimiento</title>
</head>
<body>
<?php
    include "../../header.php";
?>
    <nav class="header1 header3">
        <div class="contenido_hed1"></div>
        <div class="contenido_hed1 cont2 contnav1"><h1>CONSENTIMIENTOS</h1></div>
        <div class="contenido_hed1 cont3 contnav2">
            <!-- <a href="consentimientos.php" class="btn_regresar"><i class="fa-solid fa-arrow-left icon_nav"></i>Regresar</a> -->
        </div>
    </nav>
    <section class="top"></section>
    <br>
    <!-- FORMULARIO HOJA DE OPERACIONES-->
    <form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/create_consentimiento.php" method="post">
        <div class="contform_1_1">
            <p class="titulo_form2">Carta de consentimiento informado.</p>
            <p><strong>Nota:</strong> La siguiente transcripción formará parte de un catálogo de cartas de consentimiento informado (documentos con poder legal), FAVOR DE CUIDAR LA GRÁMATICA.</p>
            <br>
            <div class="form_group">
                <label for="nombre" class="form_row8">Nombre de la carta de consentimineto informado: <span class="rojo">*</span><br>
                    <input name="nombre" id="nombre" onkeyup="mayus(this);"></input>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="cont_carta">
            <p class="parte_cuerpo">Inicio del cuerpo (no modificable):</p>
            <p>El que suscribe, en pleno uso de sus facultades mentales, autorizo al Dr. XXXXX, me someta al procedimiento clínico, terapéutico, invasivo, médico y/o quirúrgico llamado XXXXX, habiéndoseme explicado a mi completa satisfacción, tanto de la naturaleza de mi enfermedad (XXXXX), como el motivo para realizar la operación (XXXXX), así como los resultados que se pueden esperar de ella y sus principales complicaciones, ...
            <br>
            <div class="form_group">
                <label for="complicaciones" class="form_row5_5">Procedimientos requeridos o posibles complicaciones (no obligatorio):<br>
                    <textarea name="complicaciones" id="complicaciones" placeholder="incluyendo la posibilidad (Favor de respetar la continuación)">incluyendo la posibilidad </textarea>
                </label>
            </div>
            <br>
            <br>
            <p class="parte_cuerpo">Segunda parte del cuerpo (no modificable):</p>
            <p>Entiendo que ningún procedimiento quirúrgico está exento de riesgos, y que se pueden presentar complicaciones como sangrado, infecciones o reacciones a los medicamentos que se utilicen, así como complicaciones pulmonares o cardiovasculares poco frecuentes, y que en algunos casos dichas complicaciones pueden ser graves y poner en peligro mi vida. Entiendo que durante la cirugía puede haber hallazgos o contingencias que obliguen a modificar el procedimiento programado, o realizar procedimientos adicionales en mi beneficio, lo cual autorizo.
            <br>
            <br>
            <p class="parte_cuerpo">Tercera parte del cuerpo:</p>
            <div class="form_group">
                <label for="caso_especifico" class="form_row5_5">Caso especifico: <span class="rojo">*</span><br>
                    <textarea name="caso_especifico" id="caso_especifico" placeholder="Ej: En el caso específico de la laparotomía exploradora, las complicaciones dependerán principalmente del diagnóstico definitivo y los procedimientos que se realicen, además de las propias de laparotomía como eventración o dehiscencia de sutura de la pared abdominal, así como complicaciones pulmonares y cardiovasculares."></textarea>
                </label>
            </div>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Guardar consentimiento" class="btn_registro" onclick="validacion()">
            </div>
            <br>
        </div>
    </form>
<!-- Funciones JS -->
<script>
        function validacion(){
            if(document.form_registro.nombre.value.length == 0){
                document.form_registro.nombre.focus()
                return 0;
            }
            if(document.form_registro.caso_especifico.value == 0){
                document.form_registro.caso_especifico.focus()
                return 0;
            }
            if(document.form_registro.complicaciones.value.length <= 26){
                var campovacio = document.querySelector('textarea[name="complicaciones"]');
                campovacio.value = "";
            }
            document.form_registro.submit();
        }
    </script>
</body>
</html>