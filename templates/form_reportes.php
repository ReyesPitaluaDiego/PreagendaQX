<section class="ancho contenedor_reportes">
    <form method="post" name="FormRangoFechas" id="FormRangoFechas" class="form_buscarfchs">
        <div class="form_group">
            <label class="form_row8_8">Fecha de inicio: <span class="rojo">*</span><br>
                <input type="date" name="fch1" id="fch1">
            </label>
        </div>
        <br>
        <div class="form_group">
            <label class="form_row8_8">Fecha fin: <span class="rojo">*</span><br>
                <input type="date" name="fch2" id="fch2">
            </label>
        </div>
        <br>
        <div class="form_group">
            <button class="btn_registro" id="btnBuscarFchs">Buscar</button>
        </div>
    </form>
    <div class="contenedor_tabla_reporte">
        <p><strong>Programación semanal de cirugias:</strong></p>
        <br>
        <div id="autorecargable"></div>
    </div>
   </section>

   <script>
    $('#btnBuscarFchs').on('click',function(){
        var desde = $('#fch1').val();
        var hasta = $('#fch2').val();
        var url = "datos_reporte.php";

        $.ajax({
            type: "POST",
            url: url,
            data: 'desde='+desde+'&hasta='+hasta,
            success: function(r){
                $('#autorecargable').html(r);
            }
        });
        return false;
    });
   </script>