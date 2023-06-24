// Función de acordeon y modal-password
$(".icon_open").click(function(){
    var t = $(".tipo_perfil");
    var tp = t.next();
    tp.slideToggle();
});
$("#open_modal").click(function(){
    var t = $(".usuario_contraseña");
    t.slideToggle();
});

var fondomodal = document.getElementById("modal");
var open = document.getElementById("open_modal");
var close = document.getElementById("close_modal");
open.onclick = function () {
    fondomodal.style.display = "block";
};
close.onclick = function () {
    fondomodal.style.display = "none";
};
window.onclick = function (event) {
    if (event.target == fondomodal) {
        fondomodal.style.display = "none";
    }
};