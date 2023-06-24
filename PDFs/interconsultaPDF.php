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

    $consulta4 = "SELECT * FROM SolicituddeInterconsulta WHERE NoREGISTRO = '$registro'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_assoc($resultado4);

    $date = date("d/m/Y");

    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de interconsulta PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">SOLICITUD DE INTERCONSULTA</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre4">NOMBRE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="cedula3">EXPEDIENTE:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="sexo">SEXO:<input type="text" value="<?php echo $fila["SEXO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
        <label class="edad">CAMA:<input type="text" value="<?php echo $fila3["NoCAMA"];?>"></label>
        <label class="fecha">FECHA:<input type="text" value="<?php echo $date;?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre5">MÉDICO Y SERVICIO SOLICITANTE:<input type="text" value="<?php echo $fila["MEDICO"];?> (<?php echo $fila2["SERVICIO"];?>)"></label>
        <label class="edad">No. INTERNO:<input type="text" value="<?php echo $fila["NoEMPLEADO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="servicio3">SERVICIO O CONSULTA DESEADO:<input type="text" value="<?php echo $fila4["SERVICIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="motivo">MOTIVO DE LA CONSULTA:<input type="text" value="<?php echo $fila4["MOTIVO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <br><br><br><br>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="firma3">ENTERADO:<input type="text"> <p style="text-transform: none;">Firma y clave</p></label>
    </div>
    <div class="nota">
        <h1><strong>Nota:</strong> Toda solicitud de interconsulta debe tramitarse directamente de interno a interno mediante el original. La copia debe adjuntarse al expediente del paciente y es responsabilidad del solicitante que la historia clinica, examenes y estudios necesarioa esten completos y a la mano.</h1>
    </div>
    <hr>
    <h1 class="stm">STM-12</h1>
    <br><br><br>
    <hr class="separador">
    <br><br><br>
    <!-- ----------------------------------------------------------------------------------- -->
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">SOLICITUD DE INTERCONSULTA</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre4">NOMBRE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="cedula3">EXPEDIENTE:<input type="text" value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="sexo">SEXO:<input type="text" value="<?php echo $fila["SEXO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
        <label class="edad">CAMA:<input type="text" value="<?php echo $fila3["NoCAMA"];?>"></label>
        <label class="fecha">FECHA:<input type="text" value="<?php echo $date;?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="nombre5">MÉDICO Y SERVICIO SOLICITANTE:<input type="text" value="<?php echo $fila["MEDICO"];?> (<?php echo $fila2["SERVICIO"];?>)"></label>
        <label class="edad">No. INTERNO:<input type="text" value="<?php echo $fila["NoEMPLEADO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="servicio3">SERVICIO O CONSULTA DESEADO:<input type="text" value="<?php echo $fila4["SERVICIO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="motivo">MOTIVO DE LA CONSULTA:<input type="text" value="<?php echo $fila4["MOTIVO"];?>"></label>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <br><br><br><br>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <label class="firma4">Copia ENTERADO:<input type="text"> <p style="text-transform: none;">Firma y clave</p></label>
    </div>
    <div class="nota">
        <h1><strong>Nota:</strong> Toda solicitud de interconsulta debe tramitarse directamente de interno a interno mediante el original. La copia debe adjuntarse al expediente del paciente y es responsabilidad del solicitante que la historia clinica, examenes y estudios necesarioa esten completos y a la mano.</h1>
    </div>
    <hr>
    <h1 class="stm">STM-12</h1>
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