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
  <body>

    <div id="inicio" style="text-align: center;">
      <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40" /></a>
    </div>
    <hr></hr>

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

    <form action="register.php" method="post" style="text-align: center;">

      <p>Nombre de Usuario: <input name="user" required></p>
      <p>Password: <input name="password" type="password" required></p>
      <p>Fecha de Nacimiento: <input type="date" name="fecha"></p>
      <p><input type="submit" value="Registrarse"></p>
    </form>

  </body>
</html>
