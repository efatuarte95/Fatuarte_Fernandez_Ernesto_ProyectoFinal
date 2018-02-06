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

  #inicio img {
    margin-top: 10px;
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

  form {
    margin-top: 30px;
  }

  form p:last-child {
      margin-left: 125px;
  }

  </style>


  <body>

    <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>

    <div id="inicio" style="text-align: center;">
      <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40" /></a>
    </div>
    <hr></hr>

    <?php
        if (isset($_POST["user"])) {

          $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");

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
                $obj = $result-> fetch_object();
                $tipo = $obj->tipo;

                $_SESSION["user"]=$_POST["user"];
                $_SESSION["tipo"]=$tipo;

                if ($tipo=='Administrador') {
                  header("Location: inicio.php");
                }
                else {
                header("Location: inicio.php");
                }
              }

          } else {
            echo "Consulta Incorrecta";
          }
      }
    ?>

    <form action="login.php" method="post" style="text-align: center;">

      <p><input name="user" placeholder="Enter Username" required></p>
      <p><input name="password" type="password" placeholder="Password" required></p>
      <p><input type="submit" value="Iniciar Sesion"></p>

    </form>



  </body>
</html>
