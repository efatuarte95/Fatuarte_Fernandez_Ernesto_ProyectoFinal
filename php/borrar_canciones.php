<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Borrar Canciones </title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">

</style>

<body id="main">
  <img alt="full screen background image" src="../imagenes/admin.jpeg" id="img"/>
  <?php

  $connection = new mysqli("localhost", "root", "Admin2015", "proyecto", "3316");
    $connection->set_charset("uft8");

    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }

    $query="SELECT * from canciones group by id_grupo";

    if ($result = $connection->query($query)) {

    ?>
        <table style="border:1px solid black">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Duracion</th>
          </thead><br>

    <?php

        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->id_cancion."</td>";
              echo "<td>".$obj->nombre."</td>";
              echo "<td>".$obj->duracion."</td>";
              echo "<td><a href='del_canciones.php?id=".$obj->id_cancion."'><img src='../imagenes/delete.jpeg' height='25' width='25'/></a></td>";
            echo "</tr>";

        }

        $result->close();
        unset($obj);
        unset($connection);

    }
  ?>
</table>
  <a href='inicio.php'><input type='button' style='color: #FF0000' value='Volver'></a>

</body>
</html>
