<?php
  session_start();
  session_destroy();
?>
<html>
  <head>
    <title>close session</title>
    <META HTTP-EQUIV=Refresh CONTENT="2; URL=index.php">
    <meta charset="utf-8">
  </head>
  <body>
    <style>
      @import url("css/normalize.css");
      .contenedor{
        margin: auto;
        text-align: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;
      }
      .contenedor img{
        width: 200px;
      }
    </style>
    <div class="contenedor">
      <img src="https://cliply.co/wp-content/uploads/2019/08/371908110_HOURGLASS_400px.gif" alt="">
      <h3>Cerrando sessión...</h3>
    </div>
  </body>
</html>