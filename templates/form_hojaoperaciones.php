<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_operaciones.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form">Hoja de operaciones.</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="nombre" class="form_row8">Nombre del paciente:<br>
                    <input type="text" name="nombre" id="nombre" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label for="cedula" class="form_rowm">Cédula:<br>
                    <input type="text" name="cedula" id="cedula" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
                <label for="edad" class="form_rowch">Edad:<br>
                    <input type="text" name="edad" id="edad" readonly value="<?php echo $fila["EDAD"];?>">
                </label>
                <label for="sexo" class="form_rowch">Sexo:<br>
                    <input type="text" name="sexo" id="sexo" readonly value="<?php echo $fila["SEXO"];?>">
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
                <label for="cama" class="form_rowch">No. De cama:<br>
                    <input type="text" name="cama" id="cama" value="<?php echo $fila2["NoCAMA"];?>">
                </label>
                <label for="hora" class="form_rowm">Hora de la cirugía:<br>
                    <input type="time" name="hora" id="hora" value="<?php echo $fila2["HORA"];?>">
                </label>
                <label for="duracion" class="form_rowg">Duración de la cirugía:<br>
                    <input type="number" name="duracion" id="duracion" value="<?php echo $fila2["DURACION"];?>">
                </label>
                <label for="posicion" class="form_row8">Posición:<br>
                    <select name="posicion" id="posicion">
                        <?php
                            if($fila2["POSICION"] != "") {
                                echo ' <option selected value="'.$fila2["POSICION"].'">'.$fila2["POSICION"].'</option> ';
                            } else{
                                echo '<option value="">-- Seleccione una opción</option>';
                            }
                        ?>
                        <option value="DECÚBITO DORSAL">DECÚBITO DORSAL</option>
                        <option value="DECÚBITO VENTRAL">DECÚBITO VENTRAL</option>
                        <option value="LATERAL">LATERAL</option>
                        <option value="SENTADO">SENTADO</option>
                    </select>
                </label>
                <label for="tsangre" class="form_row8">Grupo saguíneo:<br>
                    <select name="tsangre" id="tsangre">
                        <?php
                            if($fila2["T_SANGRE"] != "") {
                                echo ' <option selected value="'.$fila2["T_SANGRE"].'">'.$fila2["T_SANGRE"].'</option> ';
                            } else{
                                echo '<option value="">-- Seleccione un grupo</option>';
                            }
                        ?>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </label>
                <label for="rh" class="form_row8">Factor Rh:<br>
                    <select name="rh" id="rh">
                        <?php
                            if($fila2["FACTOR_RH"] != "") {
                                echo ' <option selected value="'.$fila2["FACTOR_RH"].'">'.$fila2["FACTOR_RH"].'</option> ';
                            } else{
                                echo '<option value="">-- Seleccione un valor</option>';
                            }
                        ?>
                        <option value="POSITIVO">POSITIVO</option>
                        <option value="NEGATIVO">NEGATIVO</option>
                    </select>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="colaboracion" class="form_row8">Colaboración del servicio de:<br>
                    <input type="text" name="colaboracion" id="colaboracion" onkeyup="mayus(this);" value="<?php echo $fila2["S_REQUERIDO"];?>"></input>
                </label>
                <label for="tanestesia">Tipo de anestesia:<br>
                        <select name="tanestesia" id="tanestesia">
                            <?php
                                if($fila2["ANESTESIA"] != "") {
                                    echo ' <option selected value="'.$fila2["ANESTESIA"].'">'.$fila2["ANESTESIA"].'</option> ';
                                } else{
                                    echo '<option value="">-- Seleccione una opción</option>';
                                }
                            ?>
                            <option value="LOCAL">LOCAL</option>
                            <option value="REGIONAL">REGIONAL</option>
                            <option value="GENERAL">GENERAL</option>
                        </select>
                    </label>
                    <label for="danestesia" class="form_rowg">Duración de la anestesia:<br>
                        <input type="number" name="danestesia" id="danestesia" value="<?php echo $fila2["D_ANESTESIA"];?>">
                    </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="instrumental" class="form_row5_5">Instrumental requerido:<br>
                    <textarea name="instrumental" id="instrumental" onkeyup="mayus(this);"><?php echo $fila2["INSTRUMENTAL"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="postoperatorio" class="form_row5">Diagnóstico postoperatorio:<br>
                    <textarea name="postoperatorio" id="postoperatorio" onkeyup="mayus(this);"><?php echo $fila2["D_POSTOPERATORIO"];?></textarea>
                </label>
                <label for="observaciones" class="form_row5">Observaciones especiales:<br>
                    <textarea name="observaciones" id="observaciones" onkeyup="mayus(this);"><?php echo $fila2["OBSERVACIONES"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="ayudante1" class="form_row8">1er Ayudante:<br>
                    <input type="text" name="ayudante1" id="ayudante1" onkeyup="capitalice(this);" value="<?php echo $fila2["AYUDANTE1"];?>">
                </label>
                <label for="ayudante2" class="form_row8">2do Ayudante:<br>
                    <input type="text" name="ayudante2" id="ayudante2" onkeyup="capitalice(this);" value="<?php echo $fila2["AYUDANTE2"];?>">
                </label>
                <label for="ayudante3" class="form_row8">3er Ayudante:<br>
                    <input type="text" name="ayudante3" id="ayudante3" onkeyup="capitalice(this);" value="<?php echo $fila2["AYUDANTE3"];?>">
                </label>
                <label for="anestesiologo" class="form_row8">Anestesiólogo:<br>
                    <input type="text" name="anestesiologo" id="anestesiologo" onkeyup="capitalice(this);" value="<?php echo $fila2["ANESTESIOLOGO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="descripcion" class="form_row5_5">Descripción de la operación:<br>
                    <textarea name="descripcion" id="descripcion" onkeyup="mayus(this);" placeholder="Describa en detalle antisepsia de la piel, incisiones, órganos explorados, hallazgos, técnica, operación practicada, piezas enviadas a examen histopatológico, accidentes, estado postoperatorio inmediato, etc."><?php echo $fila2["DESCRIPCION"];?></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="submit" value="Generar Hoja de Operaciones" class="btn_registro">
            </div>
        </div>
    </form>
    <br>
    <!-- Funciones JS -->
    <script>
        if (document.form_registro.cama.value == ""){
                document.form_registro.cama.focus();
        };
    </script>