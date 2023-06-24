<style>
    *{
        font-size: 11px;
        font-family: Helvetica;
    }
    .encabezado_consentimiento{
        border-bottom: 2px #ccc solid;
        height: 65px;
        font-size: 11px;
        position: relative;
    }
    .encabezado_consentimiento img{
        height: 55px;
        position: absolute;
        top: 0;
        left: 0;
    }
    .encabezado_consentimiento div{
        text-align: right;
        width: 350px;
        float: right;
    }
    .titulo2{
        font-size: 14px;
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: center;
    }
    .encabezado{
        border-bottom: 2px #ccc solid;
        height: 65px;
        margin-bottom: 30px;
    }
    .encabezado_justecmed{
        border: none;
    }
    .encabezado .logo1{
        height: 55px;
        float: left;
    }
    .encabezado .cont_titulo{
        width: 365px;
        float: left;
    }
    .encabezado .logo2{
        height: 55px;
        float: left;

    }
    .titulo{
        font-size: 14px;
        text-align: center;
        margin-top: 35px;
    }
    .row{
        margin-bottom: 8px;
    }
    input{
        border: none;
        border-bottom: 1px #333 solid;
        font-weight: bold;
        color: #333;
        padding: 0px 0px 0px 5px;
        text-transform: uppercase;
    }
    /* Labels */
    .edad, .f_cirugia, .posicion, .transfusion{
        margin-left: 15px;
    }
    .nombre input{
        width: 628px;
        margin-left: 15px;
    }
    .tsangre input{
        width: 119px;
        margin-left: 15px;
        text-align: center;
    }
    .rh input{
        width: 119px;
        margin-left: 60px;
        text-align: center;
    }
    .cedula input{
        width: 176px;
        margin-left: 42px;
    }
    .edad input{
        text-align: center;
        margin-left: 15px;
        width: 70px;
    }
    .servicio input{
        margin-left: 15px;
        width: 161px;
        text-align: center;
    }
    .f_cirugia input{
        margin-left: 15px;
        width: 100px;
        text-align: center;
    }
    .diagnostico input{
        margin-left: 15px;
        width: 524px;
    }
    .cirugia input{
        margin-left: 46px;
        width: 524px;
    }
    .duracion input{
        margin-left: 15px;
        width: 100px;
        text-align: center;
    }
    .posicion input{
        margin-left: 15px;
        width: 163px;
        text-align: center;
    }
    .colaboracion input{
        margin-left: 15px;
        width: 279px;
        text-align: center;
    }
    .unidad input{
        margin-left: 15px;
        width: 296px;
    }
    .firma{
        width: 50%;
        margin: auto;
        text-align: center;
    }
    .firma2{
        width: 45%;
        margin: auto;
        text-align: center;
    }
    .firma_t{
        width: 90%;
        margin: auto;
        text-align: center;
    }
    .sello{
        width: 55%;
        height: 150px;
        margin: auto;
        border: 1px #333 solid;
    }
    .firma_t p, .firma2 p{
        text-transform: none;
        line-height: 20px;
    }
    .firma hr, .firma2 hr, .firma_t hr{
        border: .5px #333 solid;
    }
    .f{
        color: #ccc;
    }
    p{
        text-transform: uppercase;
    }
    .cont_equipo{
        width: 49.5%;
        float: left;
    }
    .cont_datos{
        width: 35%;
        float: right;
    }
    .cont_testigo1{
        width: 49.5%;
        float: left;
    }
    .cont_testigo2{
        width: 49.5%;
        float: right;
    }
    .cirujano1 input{
        margin-left: 53px;
        width: 239px;
    }
    .cirujano2 input{
        margin-left: 28px;
        width: 239px;
    }
    .cirujano3 input{
        margin-left: 25px;
        width: 239px;
    }
    .cirujano4 input{
        margin-left: 28px;
        width: 239px;
    }
    .cirujano5 input{
        margin-left: 15px;
        width: 239px;
    }
    .cont_equ_datos{
        border-top: 1px #ccc solid;
        padding-top: 20px;
        height: 135px;
    }
    .observaciones1 input{
        margin-left: 32px;
        width: 516px;
    }
    .observaciones2 input{
        margin-left: 15px;
        width: 516px;
    }
    .observaciones3 input{
        margin-left: 69px;
        width: 516px;
    }
    .observaciones4 input{
        margin-left: 40px;
        width: 516px;
    }
    .nota_descripcion{
        text-transform: none;
    }
    .descripcion textarea{
        color: #333;
        font-weight: bold;
        height: 130px;
        border: 1px #333 solid;
        border-radius: 5px;
        margin-top: 5px;
        padding: 5px;
    }
    .justecmed2{
        text-align: center;
        width: 100%;
        text-decoration: underline;
    }
    .justecmed textarea{
        color: #333;
        height: 130px;
        border: 1px #333 solid;
        border-radius: 5px;
        margin-top: 5px;
        padding: 5px;
    }
    .cuerpo{
        text-transform: none;
        text-align: justify;
        line-height: 20px;
    }

    /* JUSTIFICACIÓN */
    /* Labels */
    .fecha_jus{
        text-align: right;
    }

    /* BANCO DE SANGRE */
    .caja{
        border: 1px #333 solid;
        padding: 5px 0px 0px 5px;
    }
    .caja2{
        border: 1px #333 solid;
        padding: 0px 0px 0px 5px;
    }
    .tipo_datos{
        border: 1px #333 solid;
        border-bottom: 0px;
        background-color: #ccc;
        padding: 2px 5px;
    }
    .titulo3{
        font-size: 11px;
        margin: 0px;
        font-weight: normal;
    }
    .nombre3 input{
        width: 352px;
        margin-left: 15px;
    }
    .servicio2 input{
        margin-left: 11px;
        width: 474px;
    }
    .img_check{
        width: 11px;
    }
    .cb1{
        margin-left: 27px;
    }
    .cb2{
        margin-left: 21px;
    }
    .cb3{
        margin-left: 10px;
    }
    .f_cirugia2 input{
        margin-left: 15px;
        width: 100px;
        text-align: center;
    }
    .c_hora input{
        margin-left: 20px;
        width: 100px;
        text-align: center;
    }
    .sitio input{
        margin-left: 23px;
        width: 100px;
        text-align: center;
    }
    .tipo_datos1_1{
        padding: 2px 0px;
        margin-bottom: 5px;
    }
    .tipo_datos1_2{
        border: 1px #333 solid;
        background-color: #ccc;
        padding: 2px 5px;
    }
    .cont_firma_clave_med{
        border: 1px #333 solid;
        border-top: 0px;
        text-align: center;
        padding-top: 40px;
    }
    table{
        border-collapse: collapse;
        width: 100%;
    }
    .thead{
        background-color: #ccc;
    }
    .thead td{
        border: 1px #333 solid;
        padding: 0px 5px;
        height: 20px;
    }
    .tbody td{
        padding: 0px 5px;
        border: 1px #333 solid;
        height: 20px;
    }
    .center{
        text-align: center;
    }
    .td_sinborder{
        border: none !important;
        border-left: 1px #333 solid;
    }
    .td_sinborder2{
        border: none !important;
        border-bottom: 1px #333 solid;
    }
    .td_sinborder3{
        border: none !important;
    }
    .td_sinborder4{
        border: none !important;
        border-right: 1px #333 solid;
    }
    .tbl_antecedentes .ancho{
        width: 150px;
    }
    .tbl_antecedentes .ancho2{
        width: 100px;
    }
    .tbl_datosclinicos #ancho1{
        width: 150px;
    }

    /* SOLICITUD DE INTERCONSULTA */
    /* Labels */
    .cedula3, .fecha{
        margin-left: 15px;
    }

    .nombre4 input{
        width: 414px;
        margin-left: 15px;
    }
    .nombre5 input{
        width: 337px;
        margin-left: 10px;
    }
    .cedula3 input{
        width: 125px;
        margin-left: 15px;
        text-align: center;
    }
    .sexo input{
        text-align: center;
        margin-left: 33px;
        width: 70px;
    }
    .fecha input{
        width: 212px;
        margin-left: 15px;
        text-align: center;
    }
    .servicio3 input{
        margin-left: 11px;
        width: 520px;
    }
    .motivo input{
        margin-left: 54px;
        width: 520px;
    }
    .firma3{
        margin-left: 60%;
    }
    .firma3 input{
        width: 203px;
        margin-left: 15px;
    }
    .firma3 p{
        margin-left: 80%;
    }
    .firma4{
        margin-left: 55%;
    }
    .firma4 input{
        width: 203px;
        margin-left: 15px;
    }
    .firma4 p{
        margin-left: 80%;
    }
    .nota h1{
        font-weight: normal;
        text-align: justify;
    }
    .separador{
        border: 1px #333 dotted;
    }
    .stm{
        text-align: right;
    }

    /* SOLICITUD DE ANALISIS */
    /* Labels */
    .umf{
        margin-left: 15px;
    }
    .nombre6 input{
        width: 410px;
        margin-left: 37px;
    }
    .nombre7 input{
        width: 474px;
        margin-left: 48px;
    }
    .servicio4 input{
        margin-left: 39.5px;
        width: 247px;
    }
    .umf input{
        margin-left: 15px;
        width: 145px;
        text-align: center;
    }
    .diagnostico3 input{
        margin-left: 15px;
        width: 623px;
    }
    .fecha2 input{
        width: 623px;
        margin-left: 54.5px;
    }
    .tbl_estudios .tbody td{
        padding: 0px 5px 0px 0px;
        border: 1px #333 none;
        height: 25px;
    }
    .tbl_estudios .tbody .img_check{
        width: 15px;
    }
    .otrosestudios input{
        width: 601px;
        margin-left: 15px;
    }
    footer{
        display: block;
        clear: both;
        width: 100%;
    }
    footer img{
        width: 100%;
        position: absolute;
        bottom: 60px;
    }
</style>