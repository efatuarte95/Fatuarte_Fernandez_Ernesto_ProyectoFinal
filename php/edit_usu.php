<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Editar Usuarios </title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">

</style>
<body id="main">
  <img alt="full screen background image" src="../imagenes/admin.jpeg" id="img"/>

      <?php

        if (empty($_GET)) {
          echo "No se han recibido datos del usuario";
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

          $query="SELECT * from usuarios where id_usuario='".$_GET["id"]."'";

          if ($result = $connection->query($query))  {

            $obj = $result->fetch_object();

            if ($result->num_rows==0) {
              echo "NO EXISTE ESE USUARIO";
              exit();
            }

            $id = $obj->id_usuario;
            $nombre_usuario = $obj->nombre_usuario;
            $nombre = $obj->nombre;
            $apellidos = $obj->apellidos;
            $fecha_nacimiento = $obj->fecha_nacimiento;
            $sexo = $obj->sexo;
            $tipo = $obj->tipo;

          } else {
            echo "No se han recuperar los datos del usuario";
            exit();
          }

        ?>
        <form method="post">
          <fieldset>
            <legend>Información del usuario</legend>
            <span>Nombre de Usuario:</span><input value='<?php echo $nombre_usuario; ?>' type="text" name="nombre_usuario" required><br>
            <span>Nombre:</span><input value='<?php echo $nombre; ?>'type="text" name="nombre" required><br>
            <span>Apellidos:</span><input value='<?php echo $apellidos; ?>' type="text" name="apellidos" required><br>
            <span>Fecha de Nacimiento:</span><input value='<?php echo $fecha_nacimiento; ?>'type="date" name="fecha_nacimiento" required><br>
            <span>Sexo:</span><input value='<?php echo $sexo; ?>' type="text" name="sexo" required><br>
            <span>Tipo:</span><input value='<?php echo $tipo; ?>'type="text" name="tipo" required><br>
            <input type="hidden" name="id" value='<?php echo $id; ?>'>
            <p><input type="submit" value="Actualizar"></p>
          </fieldset>
        </form>

      <?php else: ?>

        <?php

        $id = $_POST["id"];
        $nombre_usuario = $_POST["nombre_usuario"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $sexo = $_POST["sexo"];
        $tipo = $_POST["tipo"];

        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
        $connection->set_charset("uft8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="update usuarios set nombre_usuario='$nombre_usuario',
        fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', tipo='$tipo', nombre='$nombre',
        apellidos='$apellidos' WHERE id_usuario='$id'";

        if ($result = $connection->query($query)) {
          echo "Usuario actualizado <br>";
        } else {
          echo "Error al actualizar los datos <br>";
        }

        ?>

      <?php endif ?>
      <a href='inicio.php'><input type='button' style='color: #FF0000' value='Volver'></a>


  </body>
</html>
