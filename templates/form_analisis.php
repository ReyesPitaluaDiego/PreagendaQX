<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/pdf_analisis.php" method="post" target="_blank">
        <div class="contform_1_1">
            <p class="titulo_form">Solicitud de análisis.</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="text" name="registro" id="registro" value="<?php echo $fila["NoREGISTRO"];?>" hidden>
                <label for="nombre" class="form_row8">Nombre del paciente:<br>
                    <input type="text" readonly value="<?php echo $fila["NOMBRE"];?> <?php echo $fila["PRIMER_APELLIDO"];?> <?php echo $fila["SEGUNDO_APELLIDO"];?>">
                </label>
                <label for="cedula" class="form_rowm">Cédula:<br>
                    <input type="text" readonly value="<?php echo $fila["CEDULA"];?>/<?php echo $fila["TIPO_BENEFICIARIO"];?>">
                </label>
                <label for="edad" class="form_rowxg">Servicio:<br>
                    <input type="text" readonly value="<?php echo $fila2["SERVICIO"];?>">
                </label>
                <label for="cama" class="form_rowch">No. De cama:<br>
                    <input type="text" readonly value="<?php echo $fila3["NoCAMA"];?>">
                </label>
                <label for="cama" class="form_rowm">Unidad:<br>
                    <input type="text" readonly value="<?php echo $fila["UNIDAD"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre_coor" class="form_row8">Médico tratante:<br>
                    <input type="text" name="nombre_coor" id="nombre_coor" readonly value="<?php echo $fila["MEDICO"];?>">
                </label>
                <label for="noempleado" class="form_rowm">No. De empleado:<br>
                    <input type="text" name="noempleado" id="noempleado" readonly value="<?php echo $fila["NoEMPLEADO"];?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <hr class="separador">
            <!-- ---------------------------------------------------------- -->
            <p class="titulo_form">Selecciones uno o más estudíos: <span class="rojo">*</span></p>
            <!-- ---------------------------------------------------------- -->
            <table>
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="BIOMETRIA HEMATICA"> BIOMETRIA HEMATICA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="COPROANALISIS"> COPROANALISIS
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="CALCIO"> CALCIO
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TIPO SANGUINEO Y RH"> TIPO SANGUINEO Y RH
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="COPROCULTIVO"> COPROCULTIVO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="FOSFORO"> FOSFORO
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TIEMPO DE COAGULACION"> TIEMPO DE COAGULACION
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="EXAMEN GENERAL DE ORINA"> EXAMEN GENERAL DE ORINA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TRIGLICERIDOS"> TRIGLICERIDOS
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TIEMPO DE SANGRADO"> TIEMPO DE SANGRADO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="PRUEBA DE EMBARAZO"> PRUEBA DE EMBARAZO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="PRUEBAS FUNCIONALES HEPATICAS"> PRUEBAS FUNCIONALES HEPATICAS
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TIEMPO PARCIAL D ETROMBOPLASTINA"> TIEMPO PARCIAL D ETROMBOPLASTINA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="PRUEBA DE EMBARAZO"> PRUEBA DE EMBARAZO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="PROTEINAS SERICAS"> PROTEINAS SERICAS
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="RECUENTO DE PLAQUETAS"> RECUENTO DE PLAQUETAS
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="DOSIFICASCION DE GONADOTROPINAS"> DOSIFICASCION DE GONADOTROPINAS
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="BILIRRUBINAS"> BILIRRUBINAS
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="RETICULOCITOS"> RETICULOCITOS
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="EXUDADO FARINGEO"> EXUDADO FARINGEO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TRANSAMINASA PIRUVICA"> TRANSAMINASA PIRUVICA
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="QUIMICA SANGUINEA"> QUIMICA SANGUINEA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="BACTERIOSCOPIA GENITAL"> BACTERIOSCOPIA GENITAL
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="TRANSAMINASA OXALACETICA"> TRANSAMINASA OXALACETICA
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="GLICEMIA"> GLICEMIA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="REACCIONES FEBRILES"> REACCIONES FEBRILES
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="FOSFATASA ALCALINA"> FOSFATASA ALCALINA
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="UREA Y CREATININA"> UREA Y CREATININA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="REACCIONES LUETICA"> REACCIONES LUETICA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="FOSOFATASA ACIDA"> FOSOFATASA ACIDA
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="ACIDO URICO"> ACIDO URICO
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="ANTIESTREPTOLISINAS"> ANTIESTREPTOLISINAS
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="RETENCION DE BROMOSULFALEINA"> RETENCION DE BROMOSULFALEINA
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="COLESTEROL TOTAL"> COLESTEROL TOTAL
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="PROTEINA C REACTIVA"> PROTEINA C REACTIVA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="COOMBS DIRECTO"> COOMBS DIRECTO
                    </td>
                </tbody>
                <!-- ----------------------- -->
                <tbody>
                    <td>
                        <input type="checkbox" name="estudios[]" value="CURVA DE TOLERANCIA GLUCOSA"> CURVA DE TOLERANCIA GLUCOSA
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="FACTOR REUMATOIDE"> FACTOR REUMATOIDE
                    </td>
                    <td>
                        <input type="checkbox" name="estudios[]" value="COOMBS INDIRECTO"> COOMBS INDIRECTO
                    </td>
                </tbody>
            </table>
            <script>
                function procesarCheckbox() {
                    var estudiossql = "<?php echo $fila4["ESTUDIOS"];?>";
                    var estudio = estudiossql.split(', ');
                    document.getElementsByName("estudios[]").forEach(function(cb) {
                        if (estudio.includes(cb.value)) {
                            cb.checked = true;
                        }
                    });
                }
            </script>
            <!-- ---------------------------------------------------------- -->
            <br>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="otros" class="form_row8">Otos estudios:<br>
                    <input type="text" name="otros" id="otros" onkeyup="mayus(this);" value="<?php echo $fila4["ESTUDIOS_OTROS"];?>"></input>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Generar Solicitud de Análisis" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>
    <br>
    <!-- Funciones JS -->
    <script>
        function validacion(){
            const checkboxes = document.getElementsByName("estudios[]");
            var seleccionado = false;

            for(var i=0; i<checkboxes.length; i++) {
                if(checkboxes[i].checked) {
                    seleccionado = true;
                }
            }
            if(!seleccionado && document.form_registro.otros.value.length == 0){
                alert("Debe seleccionar al menos una opción.")
                return 0;
            }
            document.form_registro.submit();
        }
    </script>