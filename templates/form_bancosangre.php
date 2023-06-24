<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_bancosangre.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form">Banco de sangre (solicitud de transfusión).</p>
            <!-- ---------------------------------------------------------- -->
            <br>
            <p class="titulo_form2">Datos generales</p>
            <hr class="separador2">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label class="form_row8">Nombre del paciente:<br>
                    <input type="text" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label class="form_rowm">Cédula:<br>
                    <input type="text" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
                <label class="form_rowch">Edad:<br>
                    <input type="text" readonly value="<?php echo $fila["EDAD"];?>">
                </label>
                <label class="form_rowch">Sexo:<br>
                    <input type="text" readonly value="<?php echo $fila["SEXO"];?>">
                </label>
                <label class="form_rowxg">Servicio de:<br>
                    <input type="text" readonly value="<?php echo $fila2["SERVICIO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label class="form_row5">Diagnóstico:<br>
                    <textarea readonly><?php echo $fila["DIAGNOSTICO"];?></textarea>
                </label>
                <label for="cirugia" class="form_row5">Cirugía proyectada:<br>
                    <textarea readonly><?php echo $fila["CIRUGIA"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label class="form_row8">Cirujano:<br>
                    <input type="text" readonly value="<?php echo $fila["MEDICO"];?>">
                </label>
                <label for="noempleado" class="form_rowm">No. De empleado:<br>
                    <input type="text" readonly value="<?php echo $fila["NoEMPLEADO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <br><br>
            <p class="titulo_form2">Datos clínicos</p>
            <hr class="separador2">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label>Prioridad: <span class="rojo">*</span> <p class="aux2">|</p>
                    <label><input type="radio" name="motivo" id="motivo" value="Urgente"><span class="aux"> Urgente</span></label>
                    <label><input type="radio" name="motivo" id="motivo" value="Ordinario"><span class="aux"> Ordinario</span></label>
                    <label><input type="radio" name="motivo" id="motivo" value="Guarde y c"><span class="aux"> Guarde y c</span></label>
                </label>
                <script>
                    var motivosql = "<?php echo $fila4["MOTIVO"];?>";
                    var motivo1 = document.querySelector('input[name="motivo"][value="Urgente"]');
                    var motivo2 = document.querySelector('input[name="motivo"][value="Ordinario"]');
                    var motivo3 = document.querySelector('input[name="motivo"][value="Guarde y c"]');
                    if(motivo1.value == motivosql){
                        motivo1.checked = true;
                    }
                    if (motivo2.value == motivosql){
                        motivo2.checked = true;
                    }
                    if (motivo3.value == motivosql){
                        motivo3.checked = true;
                    }
                </script>
                <label class="form_row8">Motivo de transfusión:<br>
                    <input type="text" name="motivo2" id="motivo2" value="<?php echo $fila4["MOTIVO2"];?>" onkeyup="mayus(this);">
                </label>
                <label class="form_rowm">Fecha de la cirugía:<br>
                    <input type="date" readonly value="<?php echo $fila["FECHA_CIRUGIA"];?>">
                </label>
                <label class="form_rowm">Hora de la cirugía:<br>
                    <input type="time" readonly value="<?php echo $fila3["HORA"];?>">
                </label>
                <label for="sitio" class="form_rowxg">Sitio:<br>
                <!-- <select name="sitio" id="sitio"> -->
                <!-- <?php
                    // if($fila["SALA"] != "") {
                    //     echo ' <option selected value="'.$fila["SALA"].'">'.$fila["SALA"].'</option> ';
                    // } else{
                    //     echo '<option value="0">--Seleccione un sitio</option>';
                    // }
                ?>
                    <option value="Quirófano 1">Quirófano 1</option>
                    <option value="Quirófano 2">Quirófano 2</option>
                    <option value="Quirófano 3">Quirófano 3</option>
                    <option value="Quirófano 4">Quirófano 4</option>
                </select> -->
                    <input type="text" name="sitio" id="sitio" value="<?php echo $fila["SALA"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <br><br>
            <p class="titulo_form2">Antecedentes</p>
            <hr class="separador2">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label class="form_row8">Grupo saguíneo:<br>
                    <input type="text" value="<?php echo $fila3["T_SANGRE"] ?>">
                </label>
                <label class="form_row8">Factor Rh:<br>
                    <input type="text" value="<?php echo $fila3["FACTOR_RH"] ?>">
                </label>
                <label for="hb" class="form_row8">Hb:<br>
                    <input type="text" name="hb" id="hb" value="<?php echo $fila4["HB"] ?>">
                </label>
                <label for="hto" class="form_row8">Hto:<br>
                    <input type="text" name="hto" id="hto" value="<?php echo $fila4["HTO"] ?>">
                </label>
                <label for="tprevia">Transfusiones previas:<p class="aux2">|</p>
                    <label><input type="radio" name="tprevia" id="tprevia" value="Sí"><span class="aux"> Sí</span></label>
                    <label><input type="radio" name="tprevia" id="tprevia" value="No"><span class="aux"> No</span></label>
                </label>
                <script>
                    var tpreviasql = "<?php echo $fila4["TRANSFUSION_PREVIA"];?>";
                    var tprevia1 = document.querySelector('input[name="tprevia"][value="Sí"]');
                    var tprevia2 = document.querySelector('input[name="tprevia"][value="No"]');
                    if(tprevia1.value == tpreviasql){
                        tprevia1.checked = true;
                    }
                    if (tprevia2.value == tpreviasql){
                        tprevia2.checked = true;
                    }
                </script>
                <label for="ultimat" class="form_rowm">Ultima transfusión:<br>
                    <input type="date" name="ultimat" id="ultimat" value="<?php echo $fila4["FCH_ULT_TRANSFUSION"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
            <label for="motivo">Reacción transfusión previa:<p class="aux2">|</p>
                    <label><input type="checkbox" name="reaccion[]" value="Ninguna"><span class="aux"> Ninguna</span></label>
                    <label><input type="checkbox" name="reaccion[]" value="Urticaria"><span class="aux"> Urticaria</span></label>
                    <label><input type="checkbox" name="reaccion[]" value="Calosfrío"><span class="aux"> Calosfrío</span></label>
                    <label><input type="checkbox" name="reaccion[]" value="Cefalea"><span class="aux"> Cefalea</span></label>
                    <label><input type="checkbox" name="reaccion[]" value="Hipertermia"><span class="aux"> Hipertermia</span></label>
                    <label><input type="checkbox" name="reaccion[]" value="Otras"><span class="aux"> Otras</span></label>
                </label>
                <script>
                    function procesarCheckbox() {
                        var reaccionessql = "<?php echo $fila4["REACCIONES"];?>";
                        var reacciones = reaccionessql.split(', ');
                        document.getElementsByName("reaccion[]").forEach(function(cb) {
                            if (reacciones.includes(cb.value)) {
                                cb.checked = true;
                            }
                        });
                    }
                </script>
            </div>
            <!-- ---------------------------------------------------------- -->
            <br><br>
            <p class="titulo_form2">Requerimiento</p>
            <hr class="separador2">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label class="form_rowg">Concepto:<br>
                    <p class="concepto_s1">Concentrado glóbulos rojos</p>
                    <p class="concepto_s">Plasma fresco</p>
                    <p class="concepto_s">Plasma fresco congelado</p>
                    <p class="concepto_s">Concentrado plaquetario</p>
                    <p class="concepto_s">Sangre total</p>
                    <p class="concepto_s">Otros</p>
                </label>
                <label class="form_row8">Cantidad: <span class="rojo">*</span><br>
                    <input type="text" name="globulosr" id="globulosr" value="<?php echo $fila4["GLOBULOS_ROJOS"];?>" onkeyup="mayus(this);"> <br>
                    <input type="text" name="plasmaf" id="plasmaf" value="<?php echo $fila4["PLASMA_FRESCO"];?>" onkeyup="mayus(this);"> <br>
                    <input type="text" name="plasmafc" id="plasmafc" value="<?php echo $fila4["PLASMA_FRESCO_C"];?>" onkeyup="mayus(this);"> <br>
                    <input type="text" name="concentrado" id="concentrado" value="<?php echo $fila4["CONCENTRADO_PLAQUETARIO"];?>" onkeyup="mayus(this);"> <br>
                    <input type="text" name="stotal" id="stotal" value="<?php echo $fila4["SANGRE_TOTAL"];?>" onkeyup="mayus(this);"> <br>
                    <input type="text" name="otros" id="otros" value="<?php echo $fila4["OTROS"];?>" onkeyup="mayus(this);">
                </label>
                <label for="justificacion" class="form_row5">Justificación sangre total:<br>
                    <textarea name="justificacion" id="justificacion"><?php echo $fila4["JUSTIFICACION"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar Solicitud de Transfusión" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
    <br>
    <!-- Funciones JS -->
    <script>
        if (document.form_registro.cama.value == ""){
                document.form_registro.cama.focus();
        };
        function validacion(){
            if(document.form_registro.motivo.value !="Urgente" && document.form_registro.motivo.value !="Ordinario" && document.form_registro.motivo.value !="Guarde y c"){
                alert("Seleccione el motivo de transfusión.")
                document.form_registro.motivo.focus()
                return 0;
            }
            if(document.form_registro.globulosr.value.length == 0 && document.form_registro.plasmaf.value.length == 0 && document.form_registro.plasmafc.value.length == 0 && document.form_registro.concentrado.value.length == 0 && document.form_registro.stotal.value.length == 0 && document.form_registro.otros.value.length == 0){
                alert("Llene almenos un campo de la cantidad requerida en el apartado de Requerimiento.")
                document.form_registro.globulosr.focus()
                return 0;
            }
            document.form_registro.submit();
        }
    </script>