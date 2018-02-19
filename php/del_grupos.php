<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Grupos</title>
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


      <?php else: ?>

        <?php



        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="delete from grupos WHERE id_grupo='$id'";

        if ($result = $connection->query($query)) {
          echo "Grupo eliminado <br>";
        } else {
          echo "Error al eliminar <br>";
        }

        ?>

      <?php endif ?>

      <a href='grupos.php'><input type='button' style='color: #FF0000' value='Volver'></a>


  </body>
</html>
