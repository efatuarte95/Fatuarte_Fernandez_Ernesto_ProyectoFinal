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
    <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40" /></a>
    <div id="inicio" style="text-align: center; margin-top: -30px;">
      <a href="generos.php">Generos</a>
      <a href="solistas.php">Solistas</a>
      <a href="grupos.php">Grupos</a>
    </div>
    <div id="main" style="text-align: center;">
      <div>
        <p> Generos más populares </p>
        <a href="pop.php"><img src="../imagenes/generos/pop.jpeg" height="150" width="150"/></a>
        <a href="rock.php"><img src="../imagenes/generos/rock.jpeg" height="156" width="150"/><//></a>
        <a href="latino.php"><img src="../imagenes/generos/latino.jpeg" height="150" width="150"/><//></a>
      </div>
      <div>
        <p> Solistas más populares </p>
        <a href="lennon.php"><img src="../imagenes/solistas/lennon.jpeg" height="150" width="150"/></a>
        <a href="alboran.php"><img src="../imagenes/solistas/alboran.jpeg" height="150" width="150"/></a>
        <a href="madonna.php"><img src="../imagenes/solistas/madonna.jpeg" height="150" width="150"/></a>
      </div>
      <div>
        <p> Grupos más populares </p>
        <a href=""><img src=""/></a>
        <a href=""><img src=""/></a>
        <a href=""><img src="" /></a>
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
