<?php
    require "../bd.php";

    $registro = $_GET['id'];

    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_array ($resultado);
    $NoEMP = $fila["NoEMPLEADO"];

    $consulta2 = "SELECT * FROM JustificacionTecnicoMedica WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_array ($resultado2);

    $consulta3 = "SELECT * FROM medicos WHERE NoEMPLEADO = '$NoEMP'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_array ($resultado3);
    $area_coor = $fila3['AREA'];

    $consulta4 = "SELECT * FROM coordinadores WHERE COORDINACION = '$area_coor'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_array ($resultado4);
    $NoEMP_coor = $fila4['NoEMPLEADO'];

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
    <title>Justificación Tecnico Médica PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <header class="encabezado encabezado_justecmed">
        <img class="logo1" src="../img/gob_issste_logo.jpg">
    </header>
    <p class="fecha_jus"><strong><?php echo date("j").' de '.$meses[date('n')-1].' de '.date("Y");?></strong></p><br>
    <strong>CP. LUIS ANTONIO PACHECO MORALES <br>
                COORDINADOR DE RECURSOS MATERIALES <br>
                PRESENTE
    </strong>
    <br><br>
    <p><strong>ASUNTO: </strong><?php echo $fila2["ASUNTO"];?></p>
    <p><strong>NOMBRE DEL PACIENTE: </strong><?php echo $fila["NOMBRE"].' '.$fila["PRIMER_APELLIDO"].' '.$fila["SEGUNDO_APELLIDO"];?></p>
    <p><strong>CÉDULA: </strong><?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?></p>
    <p><strong>DIAGNÓSTICO: </strong><?php echo $fila["DIAGNOSTICO"];?></p>
    <p><strong>SERVICIO O MATERIAL SOLICITADO: </strong><?php echo $fila2["SERVICIO"];?></p>
    <br><br>
    <p class="justecmed2"><strong>JUSTIFICACIÓN TÉCNICO MÉDICA</strong></p>
    <div class="row">
        <label class="justecmed">
            <textarea><?php echo $fila2["JUSTIFICACION"];?></textarea>
        </label>
    </div>
    <br><br>
    <p><strong>MOTIVO POR EL CUEL SE SOLICITA: </strong><?php echo $fila2["MOTIVO"];?></p>
    <p><strong>PERIODO Y/O SESIONES REQUERIDAS: </strong><?php echo $fila2["PERIODO"];?></p>
    <br><br>
    <br><br>

        <div class="cont_testigo1">
            <p style="text-transform: uppercase;"><?php echo $fila["MEDICO"];?><br><span style="text-transform: none;">No.EMP: </span><?php echo $fila["NoEMPLEADO"];?> CED. PROF. <?php echo $fila3['CEDULA_PROFESIONAL']; ?><br>
            <?php echo $fila3['ESPECIALIDAD']; ?> <br>
            <strong>MÉDICO TRATANTE</strong></p>
            <br><br><br>
            <strong style="text-transform: uppercase;"><?php echo $fila["COORDINADOR"];?><br>
                COORDINADOR DE <?php echo $fila4['COORDINACION']; ?></strong>
        </div>
        <div class="cont_testigo2">
            <div class="sello">
            </div>
        </div>
    <footer>
        <img src="../img/pie_pdf.jpg" alt="">
    </footer>
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
$filename = "JustificacionTecMed".$cedula.$clave.".pdf";
$dompdf->stream($filename,array("Attachment"=>false));
?>