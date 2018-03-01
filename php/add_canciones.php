<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Añadir Canción </title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">

</style>

<body id="main">
  <img alt="full screen background image" src="../imagenes/admin.jpeg" id="img"/>
    <?php
  if (!isset($_POST["nombre"])) : ?>
      <form method="post">
        <fieldset>
          <legend>Añade los datos de la nueva canción</legend>
          <span>Nombre:</span><input type="text" name="nombre" required><br>
          <span>Duración:</span><input type="number" name="duracion" required><br>
          <span><input type="submit" value="Insertar">
        </fieldset>
      </form>

    <?php else: ?>

    <?php
        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
         if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
        exit();
   }

     $nombre=$_POST['nombre'];
     $duracion=$_POST['duracion'];
     $consulta= "INSERT INTO canciones VALUES('','$nombre','$duracion')";

     $result = $connection->query($consulta);

     if (!$result) {
        echo "Query Error <br>";
     } else {
         echo "Nueva cancion añadida <br>";
     }

   ?>

    <?php endif ?>

    <a href="inicio.php"><input type="button" style="color: #FF0000;" value="Volver"></a>

</body>
</html>
