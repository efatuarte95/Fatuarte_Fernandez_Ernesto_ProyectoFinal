<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Añadir Usuario </title>
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
span {
  width: 180px;
  display: inline-block;
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
  if (!isset($_POST["nombre"])) : ?>
      <form method="post">
        <fieldset>
          <legend>Añade los datos del nuevo usuario</legend>
          <span>Nombre de Usuario:</span><input type="text" name="nombre_usuario" required><br>
          <span>Contraseña:</span><input type="text" name="password" required><br>
          <span>Nombre:</span><input type="text" name="nombre" required><br>
          <span>Apellidos:</span><input type="text" name="apellidos" required><br>
          <span>Fecha de Nacimiento:</span><input type="date" name="fecha_nacimiento" required><br>
          <span>Sexo:</span><input type="text" name="sexo" required><br>
          <span>Tipo:</span><input type="text" name="tipo" required><br>
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

     $nombre_usuario=$_POST['nombre_usuario'];
     $nombre=$_POST['nombre'];
     $apellidos=$_POST['apellidos'];
     $fecha_nacimiento=$_POST['fecha_nacimiento'];
     $sexo=$_POST['sexo'];
     $tipo=$_POST['tipo'];

     $consulta= "INSERT INTO usuarios VALUES('','$nombre_usuario',md5('".$_POST['password']."'), '$fecha_nacimiento', '$sexo', '$tipo', '$nombre', '$apellidos')";

     $result = $connection->query($consulta);

     if (!$result) {
        echo "Query Error";
     } else {
         echo "Nuevo usuario añadido";
     }

   ?>

    <?php endif ?>

    <a href="inicio.php"><input type="button" style="color: #FF0000;" value="Volver"></a>


</body>
</html>
