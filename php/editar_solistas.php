<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Editar Solistas </title>
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">
html, body {
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
}

span {
  width: 150px;
  display: inline-block;
}

#inicio img {
  margin-top: 10px;
}

#img {
    z-index: -899;
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0.8;
}
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

    $query="SELECT * from solistas";

    if ($result = $connection->query($query)) {

    ?>
        <table style="border:1px solid black">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>País</th>
              <th>Género</th>
              <th>Año_Debut</th>
          </thead><br>

    <?php

        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->id_solista."</a></td>";
              echo "<td>".$obj->nombre."</td>";
              echo "<td>".$obj->pais."</td>";
              echo "<td>".$obj->genero."</td>";
              echo "<td>".$obj->fecha_debut."</td>";
              echo "<td><a href='edit_solistas.php?id=".$obj->id_solista."'><img src='../imagenes/editar.jpeg' height='25' width='25'/></a></td>";
            echo "</tr>";

        }

        $result->close();
        unset($obj);
        unset($connection);

    }
  ?>
</table>
  <a href='solistas.php'><input type='button' style='color: #FF0000' value='Volver'></a>

</body>
</html>
