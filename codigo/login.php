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

    <form action="login.php" method="post" style="text-align: center;">

      <p><input name="user" required></p>
      <p><input name="password" type="password" required></p>
      <p><input type="submit" value="Iniciar Sesion"></p>

    </form>



  </body>
</html>
