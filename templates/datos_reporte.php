<?php
$consulta = "SELECT * FROM derechohabientes WHERE FECHA_CIRUGIA >= '$fch1' AND FECHA_CIRUGIA <= '$fch2'";
$resultado = mysqli_query($conexion,$consulta);

echo '
<table class="display" id="tabla_reportedecirugias">
<thead>
    <th class="fijo_head" id="id_registro">Fecha Cirugía</th>
    <th>Sala</th>
    <th>Hora</th>
    <th>Derechohabiente</th>
    <th>Cédula</th>
    <th>Edad</th>
    <th>Diagnóstico</th>
    <th>Cirugía</th>
    <th>Médico Tratante</th>
    <th>Contacto</th>
    <th>Observaciones</th>
</thead>
<tbody>
';

while($fila = mysqli_fetch_assoc($resultado)){
if($fila["TELEFONO2"]>0){
    $contacto = $fila["TELEFONO1"].' / '.$fila["TELEFONO2"];
}else{
    $contacto = $fila["TELEFONO1"];
}
echo '
<tr>
<td>'.date('d/m/Y', strtotime($fila["FECHA_CIRUGIA"])).'</td>
<td>'.$fila["SALA"].'</td>
<td>'.date('H:i', strtotime($fila["HORA"])).'
</td>
<td>'.$fila["NOMBRE"].' '.$fila["PRIMER_APELLIDO"].' '.$fila["SEGUNDO_APELLIDO"].'</td>
<td>'.$fila["CEDULA"].'/'.$fila["TIPO_BENEFICIARIO"].'</td>
<td>'.$fila["EDAD"].'</td>
<td>'.$fila["DIAGNOSTICO"].'</td>
<td>'.$fila["CIRUGIA"].'</td>
<td>'.$fila["MEDICO"].'</td>
<td>'.$contacto.'</td>
<td>'.$fila["OBSERVACIONES"].'</td>
</tr>
';
}
mysqli_free_result($resultado);
echo '
</tbody>
</table>
<script>
// DataTable-Reporte de cirugías
$(document).ready(function(){
$("#tabla_reportedecirugias").DataTable({
    processing: "true",
    serverMethod: "post",
    dom: "Brtip",
    buttons:[
        {
            extend: "excelHtml5",
            text: "<i class=\'fa-solid fa-file-excel\'></i>",
            titleAttr: "Exportar a Excel",
            className: "btn_excel",
            excelStyles: {
                cells: "2",
                style: {
                    font: {
                        name: "Arial",
                        size: "14",
                        color: "FFFFFF",
                        b: true
                    },
                    fill: {
                        pattern: {
                            color: "457B9D",
                        }
                    }
                }
            }
        }
    ],
    "aoColumnDefs": [
        { "bSortable": false, "aTargets": [2,3,4,5,6,7,8,9,10] }
    ],
    "language":{
        "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
    },
    // Extención FixedHeader
    fixedHeader: true,
    // Extención Scroller
    deferRender: true,
    fixedColumns: {
        left: 1,
        left: 2,
        left: 3
    },
    scroller: true,
    scrollCollapse: true,
    scrollY:"35vh",
    scrollX:"100%"
});
});
</script>
';
?>