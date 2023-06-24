<?php
    require "../bd.php";

    $registro = $_GET['id'];

    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_array ($resultado);

    $consulta2 = "SELECT * FROM HojadeOperaciones WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_array ($resultado2);

    $consulta3 = "SELECT * FROM OrdendeIngreso WHERE NoREGISTRO = '$registro'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $fila3 = mysqli_fetch_array ($resultado3);

    $hr = $fila2["HORA"];
    if (empty($hr)){
        $hora = $hr;
    } else{
        $hora = date('H:i', strtotime($hr));
    }
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
    <title>Hoja de Operaciones PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <!-- <header class="encabezado">
        <img class="logo" src="../img/gob_issste_logo.jpg">
        <div> <h2>Mérida, Yuc. a <?php echo date("j").' de '.$meses[date('n')-1].' de '.date("Y");?><br>
                Hospital Regional Elvia Carrillo Puerto<br>
                Av. 7 No. 240 x 34 Col. Pensiones, C.P. 97219</h2>
        </div>
    </header> -->
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">HOJA DE OPERACIONES</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <!-- <h1 class="titulo2">HOJA DE OPERACIONES</h1> -->
    <div class="row">
        <label class="nombre">EL ENFERMO:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cedula">CÉDULA:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
        <label class="edad">SEXO:<input type="text" value="<?php echo $fila["SEXO"];?>"></label>
        <label class="edad">No. CAMA:<input type="text" value="<?php echo $fila2["NoCAMA"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="servicio">DEL SERVICIO DE:<input type="text" value="<?php echo $fila3["SERVICIO"];?>"></label>
        <label class="f_cirugia">DEBERÁ OPERARSE EL:<input type="text" value="<?php echo $fecha;?>"></label>
        <label class="f_cirugia">A LAS:<input type="text" value="<?php echo $hora;?> HORAS"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="diagnostico">DIAGNÓSTICO PREOPERATORIO:<input type="text" value="<?php echo $fila["DIAGNOSTICO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cirugia">OPERACIÓN PROYECTADA:<input type="text" value="<?php echo $fila["CIRUGIA"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="duracion">DURACIÓN APROXIMADA:<input type="text" value="<?php echo $fila2["DURACION"];?> HORAS"></label>
        <label class="f_cirugia">ANESTESIA:<input type="text" value="<?php echo $fila2["ANESTESIA"];?>"></label>
        <label class="posicion">POSICIÓN:<input type="text" value="<?php echo $fila2["POSICION"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="colaboracion">SE REQUIERE DURANTE LA OPERACIÓN LA COLABORACIÓN DEL SERVICO DE:<input type="text" value="<?php echo $fila2["S_REQUERIDO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="diagnostico">AGRÉGUESE AL INSTRUMENTAL:<input type="text" value="<?php echo $fila2["INSTRUMENTAL"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="unidad">UNIDAD:<input type="text" value='HOSPITAL REGIONAL "ELVIA CARRILLO PUERTO"'></label>
        <label class="f_cirugia">LUGAR:<input type="text" value='MÉRIDA, YUC.'></label>
        <label class="f_cirugia">FECHA:<input type="text" value="<?php echo $date;?>"></label>
    </div>
    <br><br><br>
    <div class="cont_firma">
        <div class="firma">
            <p class="f">(Firma del cirujano)</p>
            <hr>
            <p><strong><?php echo $fila["MEDICO"];?><br><?php echo $fila["NoEMPLEADO"];?></strong></p>
        </div>
    </div>
    <br><br>
    <div class="cont_equ_datos">
        <div class="cont_equipo">
            <div class="row">
                <label class="cirujano1">CIRUJANO:<input type="text" value="<?php echo $fila["MEDICO"];?>"></label>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <div class="row">
                <label class="cirujano2">1er. AYUDANTE:<input type="text" value="<?php echo $fila2["AYUDANTE1"];?>"></label>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <div class="row">
                <label class="cirujano3">2do. AYUDANTE:<input type="text" value="<?php echo $fila2["AYUDANTE2"];?>"></label>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <div class="row">
                <label class="cirujano4">3er. AYUDANTE:<input type="text" value="<?php echo $fila2["AYUDANTE3"];?>"></label>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <div class="row">
                <label class="cirujano5">ANESTESIÓLOGO:<input type="text" value="<?php echo $fila2["ANESTESIOLOGO"];?>"></label>
            </div>

        </div>
        <div class="cont_datos">
            <div class="row">
                <label class="tsangre">GRUPO SANGUÍNEO:<input type="text" value="<?php echo $fila2["T_SANGRE"];?>"></label>
            </div>
            <!-- ----------------------------------------------------------------------------------- -->
            <div class="row">
                <label class="rh">FACTOR RH:<input type="text" value="<?php echo $fila2["FACTOR_RH"];?>"></label>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="observaciones1">OBSERVACIONES ESPECIALES:<input type="text" value="<?php echo $fila2["OBSERVACIONES"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="observaciones2">DIAGNÓSTICO POSTOPERATORIO:<input type="text" value="<?php echo $fila2["D_POSTOPERATORIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="observaciones3">OPERACIÓN REALIZADA:<input type="text" value="<?php echo $fila["CIRUGIA"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="observaciones4">DURACIÓN DE LA ANESTESIA:<input type="text" value="<?php echo $fila2["D_ANESTESIA"];?> HORAS"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="descripcion">DESCRIPCIÓN DE LA OPERACIÓN: <span class="nota_descripcion">(Describa en detalle antisepsia de la piel, incisiones, órganos explorados, hallazgos, técnica, operación practicada, piezas enviadas a examen histopatológico, accidentes, estado postoperatorio inmediato, etc.)</span><br>
        <textarea><?php echo $fila2["DESCRIPCION"];?></textarea>
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
$filename = "HojadeOperaciones".$cedula.$clave.".pdf";
$dompdf->stream($filename,array("Attachment"=>false));
?>