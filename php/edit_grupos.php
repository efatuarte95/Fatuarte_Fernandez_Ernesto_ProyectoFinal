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
            $nombre = $obj->nombre;
            $pais = $obj->pais;
            $genero = $obj->genero;
            $fecha_debut = $obj->fecha_debut;

          } else {
            echo "No se han recuperar los datos del grupo";
            exit();
          }

        ?>
        <form method="post">
          <fieldset>
            <legend>Información de <?php  echo "$_GET[nombre]"; ?></legend>
            <span>Nombre:</span><input value='<?php echo $nombre; ?>' type="text" name="nombre" required><br>
            <span>País:</span><input value='<?php echo $pais; ?>'type="text" name="pais" required><br>
            <span>Género:</span><input type="text" value='<?php echo $genero; ?>'name="genero" required><br>
            <span>Año de Debut:</span><input type="date" name="fecha_debut" value='<?php echo $fecha_debut; ?>'><br>
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

        $query="update grupos set nombre='$nombre',
        pais='$pais',genero='$genero',fecha_debut='$fecha_debut'
        WHERE id_grupo='$id'";

        if ($result = $connection->query($query)) {
          echo "Datos actualizados <br>";
        } else {
          echo "Error al actualizar los datos";
        }

        ?>

      <?php endif ?>
      <a href="editar_grupos.php"><input type="button" style="color: #FF0000" value="Volver"></a>


  </body>
</html>
