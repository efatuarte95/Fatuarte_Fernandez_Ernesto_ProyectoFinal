<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Administración </title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css"> </style>
<body>
  <select name="option">
    <option value="add">Añadir</option>
    <option value="del">Borrar</option>
    <option value="edit">Editar</option>
  </select>
  <select name="tabla">
    <option value="add">Canciones</option>
    <option value="del">Discos</option>
    <option value="edit">Grupos</option>
    <option value="edit">Solistas</option>
    <option value="edit">Usuarios</option>
    <option value="edit">Valorar</option>
  </select>
  <a href=""><input type="submit" value="IR">

  <?php
      if ($_POST['value']=='add') {
        header("Location: add.php");
      } elseif ($_POST['value']=='del') {
        header("Location: del.php");
      } elseif ($_POST['value']=='edit') {
        header("Location: edit.php");
      }
  ?>

</body>
</html>
