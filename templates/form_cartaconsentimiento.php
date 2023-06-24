<!-- FORMULARIO CARTA DE CONSENTIMIENTO -->
<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_consentimiento.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form2">Carta de consentimiento informado.</p>
            <p><strong>Nota:</strong> La siguiente información formará parte de un documento con poder legal, FAVOR DE CUIDAR LA GRÁMATICA.</p>
            <br>
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="consentimiento">Tipo de consentimiento: <span class="rojo">*</span><br>
                    <select name="consentimiento" id="consentimiento">
                        <!-- BACKEND - PHP -->
                        <?php
                        if($fila2["T_CONSENTIMIENTO"] != null) {
                            echo '<option selected value="'.$fila2["T_CONSENTIMIENTO"].'">'.$nconsentimiento.'</option>
                                  <option value="otro">Otro</option>';
                        } else{
                            echo '<option value="0">--Seleccione una opción</option>
                                  <option value="otro">Otro</option>';
                        }
                            $consulta_con = "SELECT * FROM consentimientos";
                            $resultado_con = mysqli_query($conexion,$consulta_con);
                            while($tconsentimiento = mysqli_fetch_assoc($resultado_con)){
                        ?>
                        <option value="<?php echo $tconsentimiento["id"]; ?>"><?php echo $tconsentimiento["NOMBRE"]; ?></option>
                        <?php
                            }
                            mysqli_free_result($resultado);
                        ?>
                    </select>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="nombre" class="form_row8">Nombre del paciente:<br>
                    <input type="text" name="nombre" id="nombre" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label for="fecha" class="form_rowm">Fecha de cirugía:<br>
                    <input type="date" name="fecha" id="fecha" readonly value="<?php echo $fila["FECHA_CIRUGIA"];?>">
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
                <label for="responsable" class="form_row8">Persona responsable (quien firma): <span class="rojo">*</span><br>
                    <input type="text" name="responsable" id="responsable" value="<?php echo $nombre?>" onkeyup="capitalice(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="testigo1" class="form_row8">Testigo 1: <span class="rojo">*</span><br>
                    <input type="text" name="testigo1" id="testigo1" onkeyup="capitalice(this);" value="<?php echo $testigo1; ?>">
                </label>
                <label for="testigo2" class="form_row8">Testigo 2: <span class="rojo">*</span><br>
                    <input type="text" name="testigo2" id="testigo2" onkeyup="capitalice(this);" value="<?php echo $testigo2; ?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="cont_carta">
            <p class="parte_cuerpo">Inicio del cuerpo:</p>
            <p>El que suscribe, en pleno uso de sus facultades mentales, autorizo al <?php echo $fila["MEDICO"];?>, me someta al procedimiento clínico, terapéutico, invasivo, médico y/o quirúrgico llamado <?php echo $fila["CIRUGIA"];?>, habiéndoseme explicado a mi completa satisfacción, tanto de la naturaleza de mi enfermedad (<?php echo $fila["DIAGNOSTICO"];?>), como el motivo para realizar la operación ( [...]
            <br>
            <div class="form_group">
                <label for="motivos" class="form_row5_5">Motivo(s) de la operación: <span class="rojo">*</span><br>
                    <textarea name="motivos" id="motivos" placeholder="Describir los motivos de <?php echo $fila["CIRUGIA"];?>."><?php echo $motivos;?></textarea>
                </label>
            </div>
            <br>
            <p>), así como los resultados que se pueden esperar de ella y sus principales complicaciones, [...]</p>
            <br>
            <div id="autorecargable"></div>
            <div class="form_group">
                <label for="caso_particular" class="form_row5_5">Caso particular (redactar en primera persona):<br>
                    <textarea name="caso_particular" id="caso_particular" placeholder="Favor de continuar con la siguiente frase: En mi caso en particular,

Ej: En mi caso en particular, presenté cáncer de endometrio y fui operada (histerectomía con ooforectomía bilateral con 34 ganglios negativos) posteriormente recibí radioterapia y quimioterapia. Actualmente no tengo datos de actividad tumoral según mis controles médicos."><?php echo $cparticular;?></textarea>
                </label>
            </div>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar carta de consentimiento" class="btn_registro" onclick="validacion()">
            </div>
            <br>
        </div>
    </form>
<!-- Funciones JS -->
<script>
    $(document).ready(function(){
        recargarValores();
        $('#consentimiento').change(function(){
            recargarValores();
        });
    })

    function recargarValores(){
        $.ajax({
            type: "POST",
            url: "datos_consentimiento.php",
            data:"tipoconsentimiento=" + $('#consentimiento').val() + "&id=" + $('#registro').val(),
            success: function(r){
                $('#autorecargable').html(r);
            }
        });
    }
        function validacion(){
            if(document.form_registro.consentimiento.value == 0){
                document.form_registro.consentimiento.focus()
                return 0;
            }
            if(document.form_registro.responsable.value.length == 0){
                document.form_registro.responsable.focus()
                return 0;
            }
            if(document.form_registro.testigo1.value.length == 0){
                document.form_registro.testigo1.focus()
                return 0;
            }
            if(document.form_registro.testigo2.value.length == 0){
                document.form_registro.testigo2.focus()
                return 0;
            }
            if(document.form_registro.motivos.value.length == 0){
                document.form_registro.motivos.focus()
                return 0;
            }
            if(document.form_registro.nombre.value.length == 0){
                document.form_registro.nombre.focus()
                return 0;
            }
            if(document.form_registro.caso_especifico.value == 0){
                document.form_registro.caso_especifico.focus()
                return 0;
            }
            if(document.form_registro.complicaciones.value.length <= 26){
                var campovacio = document.querySelector('textarea[name="complicaciones"]');
                campovacio.value = "";
            }
            document.form_registro.submit();
        }
    </script>