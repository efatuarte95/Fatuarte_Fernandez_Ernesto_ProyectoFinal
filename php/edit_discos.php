<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupos</title>
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
          echo "No se han recibido datos del grupo";
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

          $query="SELECT * from grupos where id_grupo='".$_GET["id"]."'";

          if ($result = $connection->query($query))  {

            $obj = $result->fetch_object();

            if ($result->num_rows==0) {
              echo "NO EXISTE ESE GRUPO";
              exit();
            }

            $id = $obj->id_grupo;
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
            <legend>Información del Grupo</legend>
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

        $connection = new mysqli("192.168.1.30", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="update grupos set Nombree='$nombre',
        País='$pais',Género='$genero',Fecha_Debut='$fecha_debut'
        WHERE id_grupo='$id'";

        echo $query;
        if ($result = $connection->query($query)) {
          echo "Datos actualizados";
        } else {
          echo "Error al actualizar los datos";
        }

        ?>

      <?php endif ?>

  </body>
</html>
