<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_justificacion.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form">Justificación técnico médica.</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="nombre" class="form_row8">Nombre del paciente:<br>
                    <input type="text" name="nombre" id="nombre" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label for="cedula" class="form_rowm">Cédula:<br>
                    <input type="text" name="cedula" id="cedula" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="diagnostico" class="form_row5">Diagnóstico:<br>
                    <textarea name="diagnostico" id="diagnostico" readonly><?php echo $fila["DIAGNOSTICO"];?></textarea>
                </label>
                <label for="cirugia" class="form_row5">Cirugía proyectada:<br>
                    <textarea name="cirugia" id="cirugia" readonly><?php echo $fila["CIRUGIA"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre_coor" class="form_row8">Cirujano:<br>
                    <input type="text" name="nombre_coor" id="nombre_coor" readonly value="<?php echo $fila["MEDICO"];?>">
                </label>
                <label for="noempleado" class="form_rowm">No. De empleado:<br>
                    <input type="text" name="noempleado" id="noempleado" readonly value="<?php echo $fila["NoEMPLEADO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <hr class="separador">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="asunt" class="form_row8">Asunto: <span class="rojo">*</span><br>
                    <input type="text" name="asunt" id="asunt" value="<?php echo $fila2["ASUNTO"];?> " onkeyup="mayus(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="servicio" class="form_row8">Servicio o material solicitado: <span class="rojo">*</span><br>
                    <input type="text" name="servicio" id="servicio" value="<?php echo $fila2["SERVICIO"];?> " onkeyup="mayus(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="justificacion" class="form_row5_5">Justificación técnico médica: <span class="rojo">*</span><br>
                    <textarea name="justificacion" id="justificacion" onkeyup="mayus(this);"><?php echo $fila2["JUSTIFICACION"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="motivo" class="form_row8">Motivo por el cual se solicita: <span class="rojo">*</span><br>
                    <input type="text" name="motivo" id="motivo" value="<?php echo $fila2["MOTIVO"];?> " onkeyup="mayus(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="periodo" class="form_row8">Periodo y/o sesiones requeridas: <span class="rojo">*</span><br>
                    <input type="text" name="periodo" id="periodo" value="<?php echo $fila2["PERIODO"];?> " onkeyup="mayus(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar Justificación Técnico Médica" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
    <br>
    <!-- Funciones JS -->
    <script>
        if (document.form_registro.asunt.value == 0){
                document.form_registro.asunt.focus();
        };
        function validacion(){
            if(document.form_registro.asunt.value == 0){
                document.form_registro.asunt.focus()
                return 0;
            }
            if(document.form_registro.servicio.value == 0){
                document.form_registro.servicio.focus()
                return 0;
            }
            if(document.form_registro.justificacion.value == 0){
                document.form_registro.justificacion.focus()
                return 0;
            }
            if(document.form_registro.motivo.value == 0){
                document.form_registro.motivo.focus()
                return 0;
            }
            if(document.form_registro.periodo.value == 0){
                document.form_registro.periodo.focus()
                return 0;
            }
            document.form_registro.submit();
        }
    </script>