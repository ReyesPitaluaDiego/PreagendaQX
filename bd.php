<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="preagendaqx";
    // $dbname="issste";

     $conexion = mysqli_connect($host,$user,$password,$dbname);
     if(!$conexion){
        echo 'No se pudo establecer conexión con la BD.';
      }
?>