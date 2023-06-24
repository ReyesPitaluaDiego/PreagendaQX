<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

    require "../../../../bd.php";
    $fch1 = $_POST['desde'];
    $fch2 = $_POST['hasta'];

    require_once ("../../../../templates/datos_reporte.php");
?>