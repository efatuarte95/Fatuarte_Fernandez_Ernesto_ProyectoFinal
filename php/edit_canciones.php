<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Editar Canciones </title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">

</style>
<body id="main">
  <img alt="full screen background image" src="../imagenes/admin.jpeg" id="img"/>

      <?php

        if (empty($_GET)) {
          echo "No se han recibido datos de la canción";
          exit();
        }


      ?>

      <?php if (!isset($_POST["nombre"])) : ?>

        <?php

          $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
          $connection->set_charset("uft8");

          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $query="SELECT * from canciones where id_cancion='".$_GET["id"]."'";

          if ($result = $connection->query($query))  {

            $obj = $result->fetch_object();

            if ($result->num_rows==0) {
              echo "NO EXISTE ESA CANCIÓN";
              exit();
            }

            $id = $obj->id_solista;
            $nombre = $obj->nombre;
            $duracion = $obj->duracion;

          } else {
            echo "No se han recuperar los datos de la canción";
            exit();
          }

        ?>
        <form method="post">
          <fieldset>
            <legend>Información de <?php  echo "$_GET[nombre]"; ?></legend>
            <span>Nombre:</span><input value='<?php echo $nombre; ?>' type="text" name="nombre" required><br>
            <span>Duración:</span><input value='<?php echo $duracion; ?>'type="number" name="duracion" required><br>
            <input type="hidden" name="id" value='<?php echo $id; ?>'>
            <p><input type="submit" value="Actualizar"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $duracion = $_POST["duracion"];

        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="update canciones set nombre='$nombre',
        duracion='$duracion' WHERE id_solista='$id'";

        if ($result = $connection->query($query)) {
          echo "Datos actualizados <br>";
        } else {
          echo "Error al actualizar los datos";
        }

        ?>

      <?php endif ?>
      <a href="inicio.php"><input type="button" style="color: #FF0000" value="Volver"></a>


  </body>
</html>
