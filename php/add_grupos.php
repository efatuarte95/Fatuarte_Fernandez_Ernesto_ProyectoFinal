<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Añadir </title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style>
  span {
    width: 150px;
    display: inline-block;
  }

</style>
<body>
    <?php
  if (!isset($_POST["name"])) : ?>
      <form method="post">
        <fieldset>
          <legend>GRUPOS</legend>
          <span>Nombre:</span><input type="text" name="name" required><br>
          <span>País:</span><input type="text" name="pais" required><br>
          <span>Género:</span><input type="text" name="genero" required><br>
          <span>Fecha de Debut:</span><input type="date" name="fecha_debut" required><br>
          <span><input type="submit" value="Insertar"><br>
        </fieldset>
      </form>

    <?php else: ?>

    <?php
        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
         if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
        exit();
   }

     $codigo=$_POST['name'];
     $consulta= "INSERT INTO GRUPOS VALUES('$codigo','".$_POST['id']."','".$_POST['lastname']."')";

     $result = $connection->query($consulta);

     if (!$result) {
        echo "Query Error";
     } else {
         echo "Nuevo grupo añadido";
     }

   ?>

    <?php endif ?>
</body>
</html>
