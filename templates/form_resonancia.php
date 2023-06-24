<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_interconsulta.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form">Solicitud de estudio de resonancia magnética.</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="nombre" class="form_row8">Nombre del paciente:<br>
                    <input type="text" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label for="cedula" class="form_rowm">Cédula:<br>
                    <input type="text" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
                <label for="edad" class="form_rowch">Edad:<br>
                    <input type="text" readonly value="<?php echo $fila["EDAD"];?>">
                </label>
                <label for="sexo" class="form_rowch">Sexo:<br>
                    <input type="text" readonly value="<?php echo $fila["SEXO"];?>">
                </label>
                <label for="cama" class="form_rowxg">Servicio:<br>
                    <input type="text" readonly value="<?php echo $fila2["SERVICIO"];?>">
                </label>
                <label for="cama" class="form_rowch">No. De cama:<br>
                    <input type="text" readonly value="<?php echo $fila3["NoCAMA"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre_coor" class="form_row8">Médico especialista solicitante:<br>
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
                <label for="tprevia">Foraneo:<p class="aux2">|</p>
                    <label><input type="radio" name="tprevia" id="tprevia" value="Sí"><span class="aux"> Sí</span></label>
                    <label><input type="radio" name="tprevia" id="tprevia" value="No"><span class="aux"> No</span></label>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="resumen" class="form_row5_5">Breve resumen de historia clínica, estudios radiológicos y justificación del examen:<span class="rojo"> *</span> <br>
                <textarea name="resumen" id="resumen" onkeyup="mayus(this);"><?php echo $fila4["resumen"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="motivo" class="form_row8">Diagnóstico presuntivo:<span class="rojo"> *</span><br>
                    <input type="text" name="motivo" id="motivo" onkeyup="mayus(this);" value="<?php echo $fila4["MOTIVO"];?>"></input>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="motivo" class="form_row8">Estudio de I.R.M. de:<span class="rojo"> *</span><br>
                    <input type="text" name="motivo" id="motivo" onkeyup="mayus(this);" value="<?php echo $fila4["MOTIVO"];?>"></input>
                </label>
                <label for="tprevia"> <span class="aux2"> :</span><p class="aux2">|</p>
                    <label><input type="radio" name="tprevia" id="tprevia" value="Sí"><span class="aux"> Simple</span></label>
                    <label><input type="radio" name="tprevia" id="tprevia" value="No"><span class="aux"> Contraste</span></label>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar Solicitud de Interconsulta" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
    <br>
    <!-- Funciones JS -->
    <script>
        if (document.form_registro.servicio.value == ""){
                document.form_registro.servicio.focus();
        };
        function validacion(){
            if(document.form_registro.servicio.value.length == 0){
                document.form_registro.servicio.focus()
                return 0;
            }
            if(document.form_registro.motivo.value.length == 0){
                document.form_registro.motivo.focus()
                return 0;
            }
        document.form_registro.submit();
        }
    </script>