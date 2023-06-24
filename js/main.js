// FECHA DEL NAV --- todos los perfiles
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre",  "Noviembre","Diciembre");
    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    var f=new Date();
    fecha = document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

// DataTable-Derechohabientes
$(document).ready(function(){
    $("#tabla_derechohabientes").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19] },
            { "bSearchable": false, "aTargets": [5,6,7,8,9,10,11,12,13,14,15,17,18,19] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        fixedColumns: {
            left: 1,
            right: 1
        },
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});


















// DataTable-Coordinadores
$(document).ready(function(){
    $("#tabla_coordinadores").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [1,2,3,4,5,6,7,8,9,10] },
            { "bSearchable": false, "aTargets": [4,6,7,8,10] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        fixedColumns: {
            left: 1
        },
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});

// DataTables-Médicos
$(document).ready(function(){
    $(".tabla_medicos").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [1,2,3,4,5,6,7,8] },
            { "bSearchable": false, "aTargets": [4,5,6,7,8] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        fixedColumns: {
            left: 1
        },
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});

// DataTable-Médico
$(document).ready(function(){
    $("#tabla_medico").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [1,2,3,4,5,6,7,8,9] },
            { "bSearchable": false, "aTargets": [4,5,6,7,8,9] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        fixedColumns: {
            left: 1,
            right: 1
        },
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});

// DataTable-Áreas
$(document).ready(function(){
    $("#tabla_areas").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [0,1,2] },
            { "bSearchable": false, "aTargets": [1,2] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});

// DataTable-Usuarios
$(document).ready(function(){
    $("#tabla_usuarios").DataTable({
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [0,1,2,3,4,5,6] },
            { "bSearchable": false, "aTargets": [1,2,3,4,5,6] }
        ],
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json"
        },
        paging: true,
        // Extención FixedHeader
        fixedHeader: true,
        // Extención Scroller
        deferRender: true,
        fixedColumns: {
            left: 1
        },
        scroller: true,
        scrollCollapse: true,
        scrollY:"45vh",
        scrollX:"100%"
    });
});

// Funcion para editar datos de las tablas
function editar(url) {
    var editar = true;
    if (editar == true){
      window.location=url;
    }
}
// Funciones para borrar datos de las tablas
function eliminarcoor(url) {
    var eliminar = confirm("Al aceptar, se borrarán los datos y perfil de usuario de este coordinador.\n\n¿Desea continuar?");
    if (eliminar == true){
      window.location=url;
    }
}
function eliminararea(url) {
    var eliminar = confirm("Al aceptar, se borrará esta área médica y su coordinador.\n\n¿Desea continuar?");
    if (eliminar == true){
      window.location=url;
    }
}
function eliminaruser(url) {
    var eliminar = confirm("Al aceptar, se borrará el perfil de este usuario.\n\n¿Desea continuar?");
    if (eliminar == true){
      window.location=url;
    }
}
function eliminarmedico(url) {
    var eliminar = confirm("Al aceptar, se borrarán los datos y perfil de usuario de este médico.\n\n¿Desea continuar?");
    if (eliminar == true){
      window.location=url;
    }
}

// Funciones para formularios
function mayus(input) {
    var texto = input.value;
    input.value = texto.toUpperCase();
}
function capitalice(e) {
    e.value = e.value.toLowerCase().replace(/(^\w{1})|(\s+\w{1})/g, letra => letra.toUpperCase());
}