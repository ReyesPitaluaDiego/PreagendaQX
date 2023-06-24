<?php
    require "../bd.php";

    $registro = $_GET['id'];

    $consulta = "SELECT * FROM derechohabientes WHERE NoREGISTRO = '$registro'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_array ($resultado);

    $consulta2 = "SELECT * FROM OrdendeIngreso WHERE NoREGISTRO = '$registro'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $fila2 = mysqli_fetch_array ($resultado2);

    $hr = $fila2["HORA"];
    if (empty($hr)){
        $hora = $hr;
    } else{
        $hora = date('H:i', strtotime($hr));
    }

    $fch1 = $fila2["INGRESO"];
    if (empty($fch1)){
        $fecha1 = $fch1;
    } else{
        $fecha1 = date('d/m/Y', strtotime($fch1));
    }
    $fch2 = $fila["FECHA_CIRUGIA"];
    if (empty($fch2)){
        $fecha2 = $fch2;
    } else{
        $fecha2 = date('d/m/Y', strtotime($fch2));
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
    <title>Orden de ingreso PDF</title>
</head>
<?php
    include ("estilo_ingresoPDF.php");
?>
<body>
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">ORDEN DE INGRESO</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre">NOMBRE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cedula">CÉDULA:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
        <label class="umf">U.M.F.<input type="text" value="<?php echo $fila["UNIDAD"];?>"></label>
        <label class="tel">TELÉFONO(S):<input type="text" value="<?php echo $fila["TELEFONO1"];?> <?php if($fila["TELEFONO2"]>0){echo " / ";} ?> <?php echo $fila["TELEFONO2"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="domicilio">DOMICILIO:<input type="text" value="<?php echo $fila["DOMICILIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="diagnostico">DIAGNÓSTICO:<input type="text" value="<?php echo $fila["DIAGNOSTICO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cirugia">CIRUGÍA A REALIZAR:<input type="text" value="<?php echo $fila["CIRUGIA"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="f_ingreso">FECHA DE INGRESO:<input type="text" value="<?php echo $fecha1;?>"></label>
        <label class="hora">HORA:<input type="text" value="<?php echo $hora;?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="f_cirugia">FECHA DE CIRUGÍA:<input type="text" value="<?php echo $fecha2;?>"></label>
        <label class="servicio">PASA A SERVICIO DE:<input type="text" value="<?php echo $fila2["SERVICIO"];?>"></label>
    </div>
    <div class="nota">
        <h1>** SOLICITAR CITA A LA CONSULTA PRE-ANESTESICA EN EL MODULO DE CITAS**<br>
        ** EN CASO DE SER PACIENTE FORANEO SOLICITAR SU CITA DE PRE-ANESTESIA EN SU<br>
        UNIDAD DE MEDICINA FAMILIAR.</h1>
    </div>
    <div class="firma">
        <p class="f">(Firma)</p>
        <hr>
        <p><strong><?php echo $fila["MEDICO"];?></strong></p>
        <p class="cursiva">"UN NUEVO ISSSTE PARA SERVIRTE MEJOR"</p>
    </div>

    <hr class="separador">

    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">ORDEN DE INGRESO</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre">NOMBRE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cedula">CÉDULA:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
        <label class="umf">U.M.F.<input type="text" value="<?php echo $fila["UNIDAD"];?>"></label>
        <label class="tel">TELÉFONO(S):<input type="text" value="<?php echo $fila["TELEFONO1"];?> <?php if($fila["TELEFONO2"]>0){echo " / ";} ?> <?php echo $fila["TELEFONO2"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="domicilio">DOMICILIO:<input type="text" value="<?php echo $fila["DOMICILIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="diagnostico">DIAGNÓSTICO:<input type="text" value="<?php echo $fila["DIAGNOSTICO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="cirugia">CIRUGÍA A REALIZAR:<input type="text" value="<?php echo $fila["CIRUGIA"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="f_ingreso">FECHA DE INGRESO:<input type="text" value="<?php echo $fecha1;?>"></label>
        <label class="hora">HORA:<input type="text" value="<?php echo $hora;?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="f_cirugia">FECHA DE CIRUGÍA:<input type="text" value="<?php echo $fecha2;?>"></label>
        <label class="servicio">PASA A SERVICIO DE:<input type="text" value="<?php echo $fila2["SERVICIO"];?>"></label>
    </div>
    <div class="nota">
        <h1>** SOLICITAR CITA A LA CONSULTA PRE-ANESTESICA EN EL MODULO DE CITAS**<br>
        ** EN CASO DE SER PACIENTE FORANEO SOLICITAR SU CITA DE PRE-ANESTESIA EN SU<br>
        UNIDAD DE MEDICINA FAMILIAR.</h1>
    </div>
    <div class="firma">
        <p class="f">(Firma)</p>
        <hr>
        <p><strong><?php echo $fila["MEDICO"];?></strong></p>
        <p class="cursiva">"UN NUEVO ISSSTE PARA SERVIRTE MEJOR"</p>
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