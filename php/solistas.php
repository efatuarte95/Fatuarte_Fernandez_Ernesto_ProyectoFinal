<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Sound System </title>
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
#inicio img {
  margin-top: 10px;
}
#img {
    z-index: -999;
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0.8;
}
#menu {
  background-color: black;
}

#menu div {
  text-align: center;
  font-size: 25px;
}

#logoff {
  font-size: 25px;
  text align: right;
}

#generos img {
  height: 220px;
  width: 220px;
}

#solistas img {
  height: 220px;
  width: 220px;
}

#grupos img {
  height: 220px;
  width: 220px;
}
</style>

<body id="main">
  <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>
  <?php
    if ($_SESSION["tipo"]=='Administrador') {
      include("cabecera_grupos.php");
    } else {
      include("cabecera.php");
    }
  ?>

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
              <th>Nombre</th>
              <th>País</th>
              <th>Género</th>
              <th>Año_Debut</th>
              <th>Portada</th>
          </thead><br>

    <?php

        while($obj = $result->fetch_object()) {
            echo "<tr>";
              echo "<td>".$obj->nombre."</td>";
              echo "<td>".$obj->pais."</td>";
              echo "<td>".$obj->genero."</td>";
              echo "<td>".$obj->fecha_debut."</td>";
              echo "<td><a href='discos_solistas.php?id=".$obj->id_solista."'><img src='$obj->portada' height='50' width='50'/></a></td>";
            echo "</tr>";

        }

        $result->close();
        unset($obj);
        unset($connection);

    }
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
