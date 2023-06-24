<!-- FORMULARIO ORDEN DE INGRESO-->
<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_orden.php" method="post" target="_blank">
        <div class="contform_1">
            <p class="titulo_form">Orden de ingreso.</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="hidden" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>">
                <label for="nombre" class="form_row7">Nombre del paciente:<br>
                    <input type="text" name="nombre" id="nombre" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="cedula" class="form_row8">Cédula:<br>
                    <input type="text" name="cedula" id="cedula" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
                <label for="edad" class="form_row3">Edad:<br>
                    <input type="text" name="edad" id="edad" readonly value="<?php echo $fila["EDAD"];?>">
                </label>
                <label for="sexo" class="form_row3">Sexo:<br>
                    <input type="text" name="sexo" id="sexo" readonly value="<?php echo $fila["SEXO"];?>">
                </label>
                <label for="telefono1" class="form_row9">Teléfono 1:<br>
                    <input type="tel" name="telefono1" id="telefono1" readonly value="<?php echo $fila["TELEFONO1"];?>">
                </label>
                <label for="telefono2" class="form_row9">Teléfono 2:<br>
                    <input type="tel" name="telefono2" id="telefono2" readonly value="<?php echo $fila["TELEFONO2"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="domicilio" class="domicilio">Domicilio:<br>
                    <input type="text" name="domicilio" id="domicilio" readonly value="<?php echo $fila["DOMICILIO"];?>">
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
                <label for="nombre_coor" class="form_row6_6">Médico tratante:<br>
                    <input type="text" name="nombre_coor" id="nombre_coor" readonly value="<?php echo $fila["MEDICO"];?>">
                </label>
                <label for="fecha" class="form_row6">Fecha de cirugía:<br>
                    <input type="date" name="fecha" id="fecha" readonly value="<?php echo $fila["FECHA_CIRUGIA"];?>">
                </label>
            </div>
        </div>
        <div class="contform_2 aux_contform_2">
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                    <label for="fecha_ingreso" class="form_row6">
                        Fecha de ingreso:<br>
                        <input type="date" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $fila2["INGRESO"];?>">
                    </label>
                    <label for="hora" class="form_row6">
                        Hora:<br>
                        <input type="time" name="hora" id="hora" value="<?php echo $fila2["HORA"];?>">
                    </label>
                    <label for="servicio" class="form_row6">
                        Pasa a servicio de: <span class="rojo">*</span><br>
                        <select name="servicio" id="servicio">
<?php
    if($fila2["SERVICIO"] != "") {
        echo ' <option selected value="'.$fila2["SERVICIO"].'">'.$fila2["SERVICIO"].'</option> ';
    } else{
        echo '<option value="0">--Seleccione un servicio</option>';
    }
?>
                            <option value="ANGIOLOGÍA">ANGIOLOGÍA</option>
                            <option value="CIRUGÍA GENERAL">CIRUGÍA GENERAL</option>
                            <option value="CIRUGÍA MAXILOFACIAL">CIRUGÍA MAXILOFACIAL</option>
                            <option value="CIRUGÍA RECONSTRUCTIVA">CIRUGÍA RECONSTRUCTIVA</option>
                            <option value="COLOPROCTOLOGÍA">COLOPROCTOLOGÍA</option>
                            <option value="NEUROCIRUGÍA">NEUROCIRUGÍA</option>
                            <option value="OFTALMOLOGÍA">OFTALMOLOGÍA</option>
                            <option value="ONCOLOGÍA QUIRÚRGICA">ONCOLOGÍA QUIRÚRGICA</option>
                            <option value="ORTOPEDIA">ORTOPEDIA</option>
                            <option value="UROLOGÍA">UROLOGÍA</option>
                        </select>
                    </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar Orden de Ingreso" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
    <!-- Funciones JS -->
    <script>
        function validacion(){
            if(document.form_registro.servicio.value == 0){
                document.form_registro.servicio.focus()
                return 0;
            }
        document.form_registro.submit();
        }
    </script>