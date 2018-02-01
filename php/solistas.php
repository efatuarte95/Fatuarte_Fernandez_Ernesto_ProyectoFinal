<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
  </head>
  <style type="text/css">
  html, body {
          height: 100%;
          width: 100%;
          padding: 0;
          margin: 0;
      }

      #img {
          z-index: -999;
          width: 100%;
          height: auto;
          position: fixed;
          top: 0;
          left: 0;
          opacity: 0.7;
      }

      #inicio {
        position: relative;
        height: 60px;
        border: 1px solid red;
        background-color: black;
        padding-top: 20px;
        line-height: 65px;
      }

      #inicio a:last-child {
        margin-left: 150px;
        margin-right: -500px;
      }

      #inicio a:nth-last-child(2) {
        margin-left: 150px;
        margin-right: 150px;
      }

      #inicio a:nth-last-child(3) {
        margin-left: 150px;
        margin-right: 150px;
      }

      #inicio a:nth-last-child(4) {
        margin-left: -760px;
        margin-right: 50px;
      }

      #inicio img {
        position: absolute;
        height: 40px;
        width: 40px;
        margin-top: 12px;
      }

      #main div {
        margin-top: 40px;
      }

      #main div img {
        height: 150px;
        width: 150px;
      }

      #main div a {
        margin-left: 100px;
        margin-right: 100px;
      }
    </style>
  <body>
    <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>
    <div id="inicio" style="text-align: center; margin-top: -30px;">
      <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40" /></a>
      <a href="generos.php">Generos</a>
      <a href="solistas.php">Solistas</a>
      <a href="grupos.php">Grupos</a>
    </div>
    <div id="main" style="text-align: center;">
      <div>
        <a href="amy.php"><img src="../imagenes/solistas/amy.jpeg"/></a>
        <a href="marley.php"><img src="../imagenes/solistas/marley.jpeg"/><//></a>
        <a href="sanz.php"><img src="../imagenes/solistas/sanz.jpeg"/><//></a>
      </div>
      <div>
        <a href="lennon.php"><img src="../imagenes/solistas/lennon.jpeg"/></a>
        <a href="alboran.php"><img src="../imagenes/solistas/alboran.jpeg"/></a>
        <a href="jackson.php"><img src="../imagenes/solistas/jackson.jpeg"/></a>
      </div>
      <div>
        <a href="eminem.php"><img src="../imagenes/solistas/eminem.jpeg"/></a>
        <a href="adams.php"><img src="../imagenes/solistas/adams.jpeg"/></a>
        <a href="madonna.php"><img src="../imagenes/solistas/madonna.jpeg"/></a>
      </div>


    <?php
        if (isset($_POST["user"])) {

          $connection = new mysqli("192.168.1.152", "root", "Admin2015", "proyecto", "3316");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          $consulta="select * from usuarios where
          nombre_usuario='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";

          if ($result = $connection->query($consulta)) {

              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                $_SESSION["user"]=$_POST["user"];

                header("Location: inicio.php");
              }

          } else {
            echo "Consulta Incorrecta";
          }
      }
    ?>

  </body>
</html>
