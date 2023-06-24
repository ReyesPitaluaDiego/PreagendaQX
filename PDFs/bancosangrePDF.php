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

    $consulta4 = "SELECT * FROM SolicituddeTransfusion WHERE NoREGISTRO = '$registro'";
    $resultado4 = mysqli_query($conexion,$consulta4);
    $fila4 = mysqli_fetch_assoc($resultado4);

    $hr = $fila3["HORA"];
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
    $fch_ul = $fila4["FCH_ULT_TRANSFUSION"];
    if (empty($fch_ul)){
        $fechaultima = $fch_ul;
    } else{
        $fechaultima = date('d/m/Y', strtotime($fch_ul));
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
    <title>Solicitud de Transfusión PDF</title>
</head>
<?php
    include ("estilo_operacionesPDF.php");
?>
<body>
    <header class="encabezado">
        <img class="logo1" src="../img/gobmx_logo.jpg">
        <div class="cont_titulo"><h1 class="titulo">BANCO DE SANGRE</h1></div>
        <img class="logo2" src="../img/issste_logo.jpg">
    </header>
    <!-- ----------------------------------------------------------------------------------- -->
    <table>
        <tr class="tbody">
            <td class="td_sinborder3">Solicitud de Transfusión</td>
            <td class="td_sinborder3" style="text-align: right;">FECHA: <strong><?php echo $date;?></strong></td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="tipo_datos">
        <h1 class="titulo3">DATOS GENERALES</h1>
    </div>
    <div class="caja">
    <div class="row">
        <label class="nombre3">NOMBRE:<input type="text" value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>"></label>
        <label class="edad">EDAD:<input type="text" value="<?php echo $fila["EDAD"];?>"></label>
        <label class="edad">SEXO:<input type="text" value="<?php echo $fila["SEXO"];?>"></label>
    </div>
    <!-- -------------- -->
    <div class="row">
        <label class="servicio2">SERVICIO:<input type="text" value="<?php echo $fila2["SERVICIO"];?>"></label>
        <label class="edad">No. CAMA:<input type="text" value="<?php echo $fila3["NoCAMA"];?>"></label>
    </div>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <br>
    <!-- ----------------------------------------------------------------------------------- -->
    <table class="tbl_datosclinicos">
        <tr class="thead">
            <td colspan="3">DATOS CLÍNICOS</td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">DIAGNÓSTICO:</td>
            <td colspan="2" class="td_sinborder4"><strong><?php echo $fila["DIAGNOSTICO"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">CIRUGÍA PROGRAMADA:</td>
            <td colspan="2" class="td_sinborder4"><strong><?php echo $fila["CIRUGIA"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">MOTIVO DE TRANSFUSIÓN:</td>
            <td id="ancho1" class="td_sinborder4"><strong><?php echo $fila4["MOTIVO2"];?></strong></td>
            <td style="background-color: #ccc;">Nombre, firma y clave del médico solicitante</td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">Urgente:
            <?php
                    if($fila4["MOTIVO"] == "Urgente"){
                        echo '<img class="img_check cb1" src="../img/check.jpg"';
                    } else{
                        echo '<img class="img_check cb1" src="../img/no-check.jpg"';
                    }?>
            </td>
            <td id="ancho1" class="td_sinborder4">FECHA: <strong><?php echo $fecha;?></strong></td>
            <td rowspan="3" class="center"><strong><?php echo $fila["MEDICO"];?><br><?php echo $fila["NoEMPLEADO"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">Ordinario:
            <?php
                    if($fila4["MOTIVO"] == "Ordinario"){
                        echo '<img class="img_check cb2" src="../img/check.jpg"';
                    } else{
                        echo '<img class="img_check cb2" src="../img/no-check.jpg"';
                    }?>
            </td>
            <td id="ancho1" class="td_sinborder4">HORA: <strong><?php echo $hora;?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder" id="ancho1">Guarde y C:
            <?php
                    if($fila4["MOTIVO"] == "Guarde y c"){
                        echo '<img class="img_check cb3" src="../img/check.jpg"';
                    } else{
                        echo '<img class="img_check cb3" src="../img/no-check.jpg"';
                    }?>
            </td>
            <td id="ancho1" class="td_sinborder4">SITIO: <strong><?php echo $fila4["SITIO"];?></strong></td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <table>
        <tr class="thead">
            <td colspan="3">ANTECEDENTES</td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder">GRUPO SANGUÍNEO: <strong><?php echo $fila3["T_SANGRE"];?></strong></td>
            <td class="">TRANSFUSIONES PREVIAS: <strong><?php echo $fila4["TRANSFUSION_PREVIA"];?></strong></td>
            <td class="">FECHA ULTIMA: <strong><?php echo $fechaultima;?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder">Rh: <strong><?php echo $fila3["FACTOR_RH"];?></strong></td>
            <td class="" colspan="2"  rowspan="3">REACCIÓN TRANSFUSIÓN PREVIA: <strong><?php echo $fila4["REACCIONES"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder">Hb: <strong><?php echo $fila4["HB"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder">Hto: <strong><?php echo $fila4["HTO"];?></strong></td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <table class="tbl_antecedentes">
        <tr class="thead">
            <td colspan="3">REQUERIMIENTO</td>
        </tr>
        <tr class="tbody">
            <td class="ancho">CONCEPTO</td>
            <td class="center ancho2">CANTIDAD</td>
            <td>JUSTIFICACIÓN SANGRE TOTAL</td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Concentrado glóbulos rojos:</td>
            <td class="center ancho2"><strong><?php echo $fila4["GLOBULOS_ROJOS"];?></strong></td>
            <td rowspan="2"><strong><?php echo $fila4["JUSTIFICACION"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Plasma fresco:</td>
            <td class="center ancho2"><strong><?php echo $fila4["PLASMA_FRESCO"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Plasma fresco congelado:</td>
            <td class="center ancho2"><strong><?php echo $fila4["PLASMA_FRESCO_C"];?></strong></td>
            <td>MUESTRA CORRESPONDE AL PACIENTE</td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Concentrado plaquetario:</td>
            <td class="center ancho2"><strong><?php echo $fila4["CONCENTRADO_PLAQUETARIO"];?></strong></td>
            <td rowspan="2"></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Sangre total:</td>
            <td class="center ancho2"><strong><?php echo $fila4["SANGRE_TOTAL"];?></strong></td>
        </tr>
        <tr class="tbody">
            <td class="td_sinborder ancho">Otros:</td>
            <td class="center ancho2"><strong><?php echo $fila4["OTROS"];?></strong></td>
            <td>Nombre, firma y clave</td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <table>
        <tr class="thead">
            <td>Recibo solicitud nombre y firma</td>
            <td colspan="3" class="center">Fecha</td>
            <td>Grupo sanguíneo</td>
        </tr>
        <tr class="tbody">
            <td rowspan="3"></td>
            <td class="center">Día</td>
            <td class="center">Mes</td>
            <td class="center">Año</td>
            <td rowspan="3" class="center"></td>
        </tr>
        <tr class="tbody">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="tbody">
            <td colspan="3">Hora:</td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <table>
        <tr class="thead">
            <td colspan="3">SELECCIÓN DE COMPONENTES</td>
            <td colspan="3" class="center">Prueba</td>
        </tr>
        <tr class="tbody">
            <td class="center">No. De la unidad</td>
            <td class="center">Elemento sanguíneo y cantidad en ml.</td>
            <td class="center">Nombre del donador</td>
            <td class="center">Grupo<br>Sanguíneo</td>
            <td class="center">Mayor</td>
            <td class="center">Menor</td>
        </tr>
        <tr class="tbody">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="tbody">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="tbody">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="tbody">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <!-- ----------------------------------------------------------------------------------- -->
    <table>
        <tr class="thead">
            <td class="center">PRUEBAS DE COMPATIBILIDAD</td>
            <td class="center">TRANSFUNDIO</td>
            <td class="center">ENTREGÓ</td>
            <td class="center">RECIBIÓ</td>
            <td class="center" colspan="3">FECHA RECIBIDO</td>
        </tr>
        <tr class="tbody">
           <td rowspan="2"></td>
           <td rowspan="2"></td>
           <td rowspan="2"></td>
           <td rowspan="2"></td>
           <td class="center">DÍA</td>
           <td class="center">MES</td>
           <td class="center">AÑO</td>
        </tr>
        <tr class="tbody">
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr class="thead">
           <td class="center">NOMBRE Y FIRMA</td>
           <td class="center">NOMBRE Y FIRMA</td>
           <td class="center">NOMBRE Y FIRMA</td>
           <td class="center">NOMBRE Y FIRMA</td>
           <td colspan="3">HORA:</td>
        </tr>
    </table>
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