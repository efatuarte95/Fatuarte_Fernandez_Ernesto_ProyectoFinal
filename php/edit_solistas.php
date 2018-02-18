<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Solistas</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 150px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <?php

        if (empty($_GET)) {
          echo "No se han recibido datos del solista";
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

          $query="SELECT * from solistas where id_solista='".$_GET["id"]."'";

          if ($result = $connection->query($query))  {

            $obj = $result->fetch_object();

            if ($result->num_rows==0) {
              echo "NO EXISTE ESE SOLISTA";
              exit();
            }

            $id = $obj->id_solista;
            $nombre = $obj->Nombre;
            $pais = $obj->País;
            $genero = $obj->Género;
            $fecha_debut = $obj->Fecha_Debut;

          } else {
            echo "No se han recuperar los datos del grupo";
            exit();
          }

        ?>
        <form method="post">
          <fieldset>
            <legend>Información del Solista</legend>
            <span>Nombre:</span><input value='<?php echo $nombre; ?>' type="text" name="nombre" required><br>
            <span>País:</span><input value='<?php echo $pais; ?>'type="text" name="pais" required><br>
            <span>Género:</span><input type="text" value='<?php echo $genero; ?>'name="genero" required><br>
            <span>Fecha de Debut:</span><input type="date" name="fecha" value='<?php echo $fecha_debut; ?>'><br>
            <input type="hidden" name="id" value='<?php echo $id; ?>'>
            <p><input type="submit" value="Actualizar"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $pais = $_POST["pais"];
        $genero = $_POST["genero"];
        $fecha_debut = $_POST["fecha_debut"];
        $dni = $_POST["dni"];

        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="update solistas set nombre='$nombre',
        pais='$pais',genero='$genero',fecha_debut='$fecha_debut'
        WHERE id_solista='$id'";

        if ($result = $connection->query($query)) {
          echo "Datos actualizados <br>";
        } else {
          echo "Error al actualizar los datos <br>";
        }

        ?>

      <?php endif ?>

      <a href="editar_solistas.php"><input type="button" style="color: #FF0000" value="Volver"></a>

  </body>
</html>
