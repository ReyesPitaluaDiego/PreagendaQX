<?php
    require "../bd.php";

    $registro = $_GET['id'];

    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);

    $consulta2 = "SELECT * FROM OrdendeIngreso WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_assoc($resultado2);

    $consulta3 = "SELECT * FROM HojadeOperaciones WHERE NoREGISTRO = '$registro'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_assoc($resultado3);

    $consulta4 = "SELECT * FROM SolicituddeAnalisis WHERE NoREGISTRO = '$registro'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_assoc($resultado4);

    

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
    <title>Solicitud de análisis PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">SOLICITUD DE ANÁLISIS</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre6">PACIENTE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="cedula3">CÉDULA:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="servicio4">SERVICIO:<input type="text" value="<?php echo $fila2["SERVICIO"];?>"></label>
        <label class="edad">CAMA:<input type="text" value="<?php echo $fila3["NoCAMA"];?>"></label>
        <label class="umf">UNIDAD:<input type="text" value="<?php echo $fila["UNIDAD"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="diagnostico3">DIAGNÓSTICO:<input type="text" value="<?php echo $fila["DIAGNOSTICO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre7">MÉDICO:<input type="text" value="<?php echo $fila["MEDICO"];?>"></label>
        <label class="edad">CLAVE:<input type="text" value="<?php echo $fila["NoEMPLEADO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="fecha2">FECHA:<input type="text" value="Mérida, Yucatán a <?php echo date("j").' de '.$meses[date('n')-1].' de '.date("Y");?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <br><br>
    <table class="tbl_estudios">
        <tr class="tbody">
        <?php
            $estudios = $fila4["ESTUDIOS"];
            $examenes = array(
                array("BIOMETRIA HEMATICA"),
                array("COPROANALISIS"),
                array("CALCIO"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("TIPO SANGUINEO Y RH"),
                array("COPROCULTIVO"),
                array("FOSFORO"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("TIEMPO DE COAGULACION"),
                array("EXAMEN GENERAL DE ORINA"),
                array("TRIGLICERIDOS"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("TIEMPO DE SANGRADO"),
                array("PRUEBA DE EMBARAZO"),
                array("PRUEBAS FUNCIONALES HEPATICAS"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("TIEMPO PARCIAL D ETROMBOPLASTINA"),
                array("PRUEBA DE EMBARAZO"),
                array("PROTEINAS SERICAS"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("RECUENTO DE PLAQUETAS"),
                array("DOSIFICASCION DE GONADOTROPINAS"),
                array("BILIRRUBINAS"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("RETICULOCITOS"),
                array("EXUDADO FARINGEO"),
                array("TRANSAMINASA PIRUVICA"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("QUIMICA SANGUINEA"),
                array("BACTERIOSCOPIA GENITAL"),
                array("TRANSAMINASA OXALACETICA"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("GLICEMIA"),
                array("REACCIONES FEBRILES"),
                array("FOSFATASA ALCALINA"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("UREA Y CREATININA"),
                array("REACCIONES LUETICA"),
                array("FOSOFATASA ACIDA"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("ACIDO URICO"),
                array("ANTIESTREPTOLISINAS"),
                array("RETENCION DE BROMOSULFALEINA"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("COLESTEROL TOTAL"),
                array("PROTEINA C REACTIVA"),
                array("COOMBS DIRECTO"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
        <tr class="tbody">
        <?php
            $examenes = array(
                array("CURVA DE TOLERANCIA GLUCOSA"),
                array("FACTOR REUMATOIDE"),
                array("COOMBS INDIRECTO"),
            );
            foreach ($examenes as $examen) {
                $nombreExamen = $examen[0];
                $checkImg = (in_array($nombreExamen, explode(", ", $estudios))) ? '<img class="img_check" src="../img/check.jpg">' : '<img class="img_check" src="../img/no-check.jpg">';
                echo '<td>' . $checkImg . '</td>';
                echo '<td>' . $nombreExamen . '</td>';
            }
        ?>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <br><br>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="otrosestudios">OTROS ESTUDIOS:<input type="text" value="<?php echo $fila4["ESTUDIOS_OTROS"];?>"></label>
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
$filename = "OrdendeIngreso".$cedula.$clave.".pdf";
$dompdf->stream($filename,array("Attachment"=>false));
?>