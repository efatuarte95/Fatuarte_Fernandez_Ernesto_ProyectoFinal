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

  #inicio img {
    margin-top: 10px;
  }

  form {
      margin-top: 50px;
      margin-left: 480px;
  }

  form p:last-child {
      margin-left: 137px;
  }

  form p:first-child input {
      width: 150px;
  }

  form p:nth-child(2) input {
      width: 232px;
  }

  form p:nth-child(3) input {
      width: 140px;
  }

  form p:nth-child(4) input {
      width: 151px;
  }

  form p:nth-child(5) input {
      width: 236px;
  }

  form p:nth-child(6) input {
      width: 10px;
  }

  form p:last-child input {
      width: 200px;
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
                echo "REGISTRO INVÁLIDO";
              } else {
                $_SESSION["user"]=$_POST["user"];

                header("Location: inicio.php");
              }

          } else {
            echo "Nombre de usuario ya existente";
          }
      }
    ?>

    <form action="register.php" method="post">
      <p style="color:blue">Nombre de Usuario:
      <input name="user" placeholder="Enter Username" required></p>
      <p style="color:red">Password:
      <input name="password" type="password" placeholder="Password" required></p>
      <p style="color:blue">Fecha de Nacimiento:
      <input type="date" name="fecha"></p>
      <p style="color:red">Nombre de Usuario:
      <input name="nombre" placeholder="Nombre" required></p>
      <p style="color:blue">Apellidos:
      <input name="apellidos" placeholder="Apellidos" required></p>
      <p style="color:red">Sexo:
      <input type="radio" name="sexo" value="hombre">Hombre
      <input type="radio" name="sexo" value="mujer">Mujer</p>
      <p><input type="submit" value="Registrarse"></p>
    </form>

  </body>
</html>
