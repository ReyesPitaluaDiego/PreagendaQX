<section class="modal" id="modal">
        <form id="form_registro" name="form_registro" class="form_registro ancho1 form_modal" action="../../crud/update_password.php" method="post">
        <div class="contform_modal">
            <div class="circulo" id="close_modal"><i class="fa-solid fa-xmark"></i></div>
            <p class="titulo_form">Nueva contraseña</p>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <label for="actual" class="form_row12">Contraseña actual: <span class="rojo">*</span><br>
                    <input type="password" name="actual" id="actual">
                </label>
            </div>
            <div class="form_group">
                <label for="nueva" class="form_row12">Nueva contraseña: <span class="rojo">*</span><br>
                    <input type="password" name="nueva" id="nueva">
                </label>
            </div>
            <div class="form_group">
                <label for="nuevac" class="form_row12">
                    <input type="password" name="nuevac" id="nuevac" placeholder="Confirme nueva contraseña">
                </label>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="form_group">
                <input type="button" value="Cambiar contraseña" class="btn_registro" onclick="validacion()">
            </div>
        </div>
        </form>
</section>
<!-- Funciones JS -->
<script>
function validacion(){
    if(document.form_registro.actual.value.length == 0){
        document.form_registro.actual.focus()
        return 0;
    }
    if(document.form_registro.nueva.value.length == 0){
        document.form_registro.nueva.focus()
        return 0;
    }
    if(document.form_registro.nuevac.value.length == 0){
        document.form_registro.nuevac.focus()
        return 0;
    }
    if(document.form_registro.nueva.value !== document.form_registro.nuevac.value){
        alert("Nueva contraseña no coincide");
        document.form_registro.nueva.focus()
        return 0;
    }
    document.form_registro.submit();
}
</script>