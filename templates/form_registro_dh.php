<form id="form_registro" name="form_registro" class="form_registro ancho1" action="../../../../crud/create_dh.php" method="post">
        <div class="contform_1">
            <p class="titulo_form">Datos del derechohabiente</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="cedula" class="form_row1">Cédula: <span class="rojo">*</span><br>
                    <input type="text" name="cedula" id="cedula" maxlength="10" onkeyup="mayus(this);">
                </label>
                <label for="clave_dh" class="form_row1_1">Tipo beneficiario: <span class="rojo">*</span><br>
                    <select name="clave_dh" id="clave_dh">
                        <option value="0">--  Seleccione una clave</option>
                        <option value="10">10 - TRABAJADOR</option>
                        <option value="20">20 - TRABAJADORA</option>
                        <option value="30">30 - ESPOSA</option>
                        <option value="31">31 - CONCUBINA</option>
                        <option value="32">32 - MUJER</option>
                        <option value="40">40 - ESPOSO</option>
                        <option value="41">41 - CONCUBINO</option>
                        <option value="50">50 - PADRE</option>
                        <option value="51">51 - ABUELO</option>
                        <option value="60">60 - MADRE</option>
                        <option value="61">61 - ABUELA</option>
                        <option value="70">70 - HIJO</option>
                        <option value="71">71 - HIJO CONYUGE</option>
                        <option value="80">80 - HIJA</option>
                        <option value="81">81 - HIJA CONYUGE</option>
                        <option value="90">90 - PENSIONADO</option>
                        <option value="91">91 - PENSIONADA</option>
                        <option value="92">92 - FAMS PENSIONADO</option>
                        <option value="95">95 - ASEGURADO POPULAR M</option>
                        <option value="96">96 - ASEGURADO POPULAR F</option>
                        <option value="97">97 - IMSS HOMBRE</option>
                        <option value="98">98 - IMSS MUJER</option>
                        <option value="99">99 - NO DERECHOHABIENTE</option>
                    </select>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre" class="form_row2">Nombre(s): <span class="rojo">*</span><br>
                    <input type="text" name="nombre" id="nombre" onkeyup="capitalice(this);">
                </label>
                <label for="apellido1" class="form_row2">Apellido paterno: <span class="rojo">*</span><br>
                    <input type="text" name="apellido1" id="apellido1" onkeyup="capitalice(this);">
                </label>
                <label for="apellido2" class="form_row2">Apellido materno:<br>
                    <input type="text" name="apellido2" id="apellido2" onkeyup="capitalice(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="edad" class="form_row3">Edad: <span class="rojo">*</span><br>
                    <input type="text" name="edad" id="edad" maxlength="3" pattern="(0-9)">
                </label>
                <label for="sexo">Sexo: <span class="rojo">*</span><p class="aux2">|</p>
                    <label><input type="radio" name="sexo" id="sexo" value="H"><span class="aux"> Hombre</span></label>
                    <label><input type="radio" name="sexo" id="sexo" value="M"><span class="aux"> Mujer</span></label>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="telefono1" class="form_row4">Teléfono 1: <span class="rojo">*</span><br>
                    <input type="tel" name="telefono1" id="telefono1" maxlength="10">
                </label>
                <label for="telefono2" class="form_row4">Teléfono 2:<br>
                    <input type="tel" name="telefono2" id="telefono2" maxlength="10">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="domicilio" class="domicilio">Domicilio: <span class="rojo">*</span><br>
                    <input type="text" name="domicilio" id="domicilio" onkeyup="capitalice(this);" class="capitalice">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="uemisora">Unidad emisora: <span class="rojo">*</span><br>
                    <select name="uemisora" id="uemisora">
                        <option value="0">-- Seleccione un estado</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="contform_2">
            <p class="titulo_form">Datos de la cirugía</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="diagnostico" class="form_row5">Diagnóstico: <span class="rojo">*</span><br>
                    <textarea name="diagnostico" id="diagnostico" onkeyup="mayus(this);"></textarea>
                </label>
                <label for="cirugia" class="form_row5">Cirugía proyectada: <span class="rojo">*</span><br>
                    <textarea name="cirugia" id="cirugia" onkeyup="mayus(this);"></textarea>
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="numero_medico" class="form_row6">No. Médico tratante: <span class="rojo">*</span><br>
                    <input type="text" name="numero_medico" id="numero_medico" value="<?php echo $NoEMPLEADO; ?>">
                </label>
                <label for="nombre_medico" class="form_row6_6">Médico tratante: <span class="rojo">*</span><br>
                    <input type="text" name="nombre_medico" id="nombre_medico" value="<?php echo $pref.$medicotratante; ?>" onkeyup="capitalice(this);">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="nombre_coor" class="form_row6_6">Coordinador médico: <span class="rojo">*</span><br>
                    <input type="text" name="nombre_coor" id="nombre_coor" value="<?php echo $pref2.$coordinador; ?>" onkeyup="capitalice(this);">
                </label>
                <label for="fecha" class="form_row6">Fecha de registro: <span class="rojo">*</span><br>
                <input type="date" name="fecha" id="fecha" value="<?php echo $hoy;?>">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Registrar" class="btn_registro" onclick="validacion()">
            </div>
        </div>
    </form>

    <!-- Funciones JS -->
    <script>
        function validacion(){
            if(document.form_registro.cedula.value.length == 0){
                document.form_registro.cedula.focus()
                return 0;
            } else {
                if(document.form_registro.cedula.value.length <10){
                alert("Cédula incompleta\nDebe llevar 10 caracteres.")
                document.form_registro.cedula.focus()
                return 0;
                }
            }
            if(document.form_registro.clave_dh.value == 0){
                document.form_registro.clave_dh.focus()
                return 0;
            }
            if(document.form_registro.nombre.value.length == 0){
                document.form_registro.nombre.focus()
                return 0;
            }
            if(document.form_registro.apellido1.value.length == 0){
                document.form_registro.apellido1.focus()
                return 0;
            }
            if(document.form_registro.edad.value.length == 0){
                document.form_registro.edad.focus()
                return 0;
            }
            if(document.form_registro.sexo.value !="H" && document.form_registro.sexo.value !="M"){
                alert("Seleccione un sexo.")
                document.form_registro.sexo.focus()
                return 0;
            }
            if(document.form_registro.telefono1.value.length == 0){
                document.form_registro.telefono1.focus()
                return 0;
            } else {
                if(document.form_registro.telefono1.value.length < 7){
                alert("Verifique la numeración de Teléfono 1.")
                document.form_registro.telefono1.focus()
                return 0;
                }
            }
            if(document.form_registro.domicilio.value.length == 0){
                document.form_registro.domicilio.focus()
                return 0;
            }
            if(document.form_registro.uemisora.value == 0){
                document.form_registro.uemisora.focus()
                return 0;
            }
            if(document.form_registro.diagnostico.value.length == 0){
                document.form_registro.diagnostico.focus()
                return 0;
            }
            if(document.form_registro.cirugia.value.length == 0){
                document.form_registro.cirugia.focus()
                return 0;
            }
            if(document.form_registro.numero_medico.value.length == 0){
                document.form_registro.numero_medico.focus()
                return 0;
            }
            if(document.form_registro.nombre_medico.value.length == 0){
                document.form_registro.nombre_medico.focus()
                return 0;
            }
            if(document.form_registro.nombre_coor.value.length == 0){
                document.form_registro.nombre_coor.focus()
                return 0;
            }
            if(document.form_registro.fecha.value.length == 0){
                document.form_registro.fecha.focus()
                return 0;
            }
            document.form_registro.submit();
        }
    </script>