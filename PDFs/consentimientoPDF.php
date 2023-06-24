<?php
    require "../bd.php";

    $registro = $_GET['id'];

    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_array ($resultado);

    $consulta2 = "SELECT * FROM CartadeConsentimiento WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_array ($resultado2);

    $fch = $fila["FECHA_CIRUGIA"];
    if (empty($fch)){
        $fecha = $fch;
    } else{
        $fecha = date('d/m/Y', strtotime($fch));
    }
    $date = date("d/m/Y");

    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de Consentimiento PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <header class="encabezado_consentimiento">
        <img src="../img/gob_issste_logo.jpg">
        <div> <h2>Mérida, Yuc. a <?php echo date("j").' de '.$meses[date('n')-1].' de '.date("Y");?><br>
                Hospital Regional Elvia Carrillo Puerto<br>
                Av. 7 No. 240 x 34 Col. Pensiones, C.P. 97219</h2>
        </div>
    </header>
    <br>
    <h1 class="titulo2">CARTA DE CONSENTIMIENTO INFORMADO</h1>
    <br>
    <div class="row">
        <label>Paciente: <?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?></label>
    </div>
    <div class="row">
        <label>Diagnóstico: <?php echo $fila["DIAGNOSTICO"];?></label>
    </div>
    <div class="row">
        <label>Operación programada: <?php echo $fila["CIRUGIA"];?></label>
    </div>
    <div class="row">
        <label>Cirujano: <?php echo $fila["MEDICO"];?></label>
    </div>
    <div class="row">
        <label>Fecha de la cirugía: <?php echo $fecha;?></label>
    </div>
    <div class="row">
        <label>Hospital: Hospital regional Mérida ISSSTE "Elvia Carrillo Puerto"</label>
    </div>
    <br>
    <p class="cuerpo">El que suscribe, en pleno uso de sus facultades mentales, autorizo al <?php echo $fila["MEDICO"];?>, me someta al procedimiento clínico, terapéutico, invasivo, médico y/o quirúrgico llamado <?php echo $fila["CIRUGIA"];?>, habiéndoseme explicado a mi completa satisfacción, tanto de la naturaleza de mi enfermedad (<?php echo $fila["DIAGNOSTICO"];?>), como el motivo para realizar la operación (<?php echo $fila2["MOTIVOS"];?>)<?php if ($fila2["COMPLICACIONES"]==null){echo ".";} else {echo ', '.$fila2["COMPLICACIONES"];}?><br>
    Entiendo que ningún procedimiento quirúrgico está exento de riesgos, y que se pueden presentar complicaciones como sangrado, infecciones o reacciones a los medicamentos que se utilicen, entre otras, y que en algunos casos dichas complicaciones pueden ser graves y poner en peligro mi vida. Entiendo que durante la cirugía pueden haber hallazgos o contingencias que obliguen a modificar el procedimiento programado, o realizar procedimientos adicionales en mi beneficio, lo cual autorizo. <br><br>
    <?php echo $fila2["C_ESPECIFICO"];?> <br><br>
    <?php if ($fila2["C_PARTICULAR"]!=null){echo $fila2["C_PARTICULAR"].'<br><br>';}?>
    Mérida, Yucatán a <?php echo date("j").' de '.$meses[date('n')-1].' de '.date("Y");?>
    </p>
    <br><br><br><br>
    <div class="firma2">
        <hr>
        <p><?php echo $fila2["RESPONSABLE"];?> <br>
           <?php if ($fila2["RESPONSABLE"] == $fila["NOMBRE"]." ".$fila["PRIMER_APELLIDO"]." ".$fila["SEGUNDO_APELLIDO"]){
                echo '<strong>Paciente</strong>';
            } else{
                echo '<strong>Apoderado legal</strong>';
            }?>
        <br><br><br>
        </p>
    </div>
    <br>
    <div>
        <div class="cont_testigo1">
            <div class="firma_t">
                <hr>
                <p><?php echo $fila2["TESTIGO1"];?><br>
                <strong>Testigo</strong></p>
            </div>
        </div>
        <div class="cont_testigo2">
            <div class="firma_t">
                <hr>
                <p><?php echo $fila2["TESTIGO2"];?><br>
                <strong>Testigo</strong></p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$HTML=ob_get_clean();

require_once("../libs/dompdf102/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf= new Dompdf();

$dompdf->loadHtml(($HTML));

$dompdf->setPaper('letter');
$dompdf->render();
$cedula = $fila["CEDULA"];
$clave = $fila["TIPO_BENEFICIARIO"];
$filename = "Consentimiento".$cedula.$clave.".pdf";
$dompdf->stream($filename,array("Attachment"=>false));
?>