<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Discos</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style></style>
  </head>
  <body>

    <?php
        $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
         if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
        exit();
   }

     $id=$_GET['id'];
     $consulta= "DELETE FROM discos WHERE id_disco='$id'";

     $result = $connection->query($consulta);

     if (!$result) {
        echo "Query Error <br>";
     } else {
         echo "Grupo eliminado <br>";
     }

   ?>

      <a href='borrar_discos.php'><input type='button' style='color: #FF0000' value='Volver'></a>


  </body>
</html>
