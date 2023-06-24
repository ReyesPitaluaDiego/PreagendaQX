<section class="buscador_registro">
    <label for="id_registro">
        No. Registro:<br>
        <input type="text" name="id_registro" id="id_registro" placeholder="No. Registro del Derechohabiente">
    </label>
</section>
<br><br>
<section class="ancho1 cont_dad_reportes">
    <div class="cont_reportes1">
        <a href="#" class="btn_reporte" onclick="ir_url('orden_ingreso.php')">Orden de ingreso <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('hoja_operaciones.php')">Hoja de operaciones <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('justificacion.php')">Justificación técnico médica <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('consentimiento.php')">Consentimiento informado <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="cont_reportes2">
        <a href="#" class="btn_reporte" onclick="ir_url('banco_sangre.php')">Banco de sangre <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('solicitud_interconsulta.php')">Solicitud de interconsulta <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('solicitud_analisis.php')">Solicitud de ánalisis <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn_reporte" onclick="ir_url('solicitud_resonancia.php')">Solicitud de estudio de resonancia magnética <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</section>

<script>
    function ir_url(url){
        var id = document.querySelector('input[name="id_registro"]');
        if(id.value.length == 0){
            alert("Ingrese el No. de Registro del Derechohabiente.")
            id.focus()
            return false;
        } else {
            var noregistro = id.value;
            url = window.location= url + "?id=" + noregistro;
        }
    }
</script>