<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
    require "../../../../bd.php";
    $tipo = $_POST['tipoconsentimiento'];
    $id = $_POST['id'];

    $consulta2 = "SELECT * FROM CartadeConsentimiento WHERE NoREGISTRO = '$id'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_assoc($resultado2);
    if (isset($fila2["COMPLICACIONES"])){
        $complicaciones2 = $fila2["COMPLICACIONES"];
    }
    if (isset($fila2["C_ESPECIFICO"])){
        $c_especifico2 = $fila2["C_ESPECIFICO"];
    }

    $consulta3 = "SELECT * FROM consentimientos WHERE id = '$tipo'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_assoc($resultado3);
    if (isset($fila3["COMPLICACIONES"])){
        $complicaciones3 = $fila3["COMPLICACIONES"];
    }
    if (isset($fila3["C_ESPECIFICO"])){
        $c_especifico3 = $fila3["C_ESPECIFICO"];
    }

    if(isset($complicacione2)){
        $complicaciones = $complicaciones2;
    } else {
        if(isset($complicaciones3)){
            $complicaciones = $complicaciones3;
        } else {
            $complicaciones = "";
        }
    }
    if(isset($c_especifico2)){
        $c_especifico = $c_especifico2;
    } else {
        if(isset($c_especifico3)){
            $c_especifico = $c_especifico3;
        } else {
            $c_especifico = "";
        }
    }

echo '
        <div class="form_group" id="cont_consentimiento">
        <label for="complicaciones" class="form_row5_5">Procedimientos requeridos o posibles complicaciones (redactar en primera persona):<br>
            <textarea name="complicaciones" id="complicaciones" placeholder="Favor de continuar con la siguiente frase: incluyendo la posibilidad

Ej: incluyendo la posibilidad de que se requiera la creación de estomas (exteriorización de un segmento de intestino), resección de un segmento de mi intestino, y eventualmente requerir otras cirugías. ">'.$complicaciones.'</textarea>
        </label>
    </div>
    <br>
    <p class="parte_cuerpo">Segunda parte del cuerpo:</p>
    <p>Entiendo que ningún procedimiento quirúrgico está exento de riesgos, y que se pueden presentar complicaciones como sangrado, infecciones o reacciones a los medicamentos que se utilicen, así como complicaciones pulmonares o cardiovasculares poco frecuentes, y que en algunos casos dichas complicaciones pueden ser graves y poner en peligro mi vida. Entiendo que durante la cirugía puede haber hallazgos o contingencias que obliguen a modificar el procedimiento programado, o realizar procedimientos adicionales en mi beneficio, lo cual autorizo.
    <br>
    <br>
    <p class="parte_cuerpo">Tercera parte del cuerpo:</p>
    <div class="form_group">
        <label for="caso_especifico" class="form_row5_5">Caso especifico: <span class="rojo">*</span><br>
            <textarea name="caso_especifico" id="caso_especifico" placeholder="Favor de continuar con la siguiente frase: En el caso específico,

Ej: En el caso específico de la laparotomía exploradora, las complicaciones dependerán principalmente del diagnóstico definitivo y los procedimientos que se realicen, además de las propias de laparotomía como eventración o dehiscencia de sutura de la pared abdominal, así como complicaciones pulmonares y cardiovasculares.">'.$c_especifico.'</textarea>
        </label>
    </div>
';
?>