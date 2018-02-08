<?php
  session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Sound System </title>
<<<<<<< HEAD
=======
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">
html, body {
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
}
<<<<<<< HEAD
#inicio img {
  margin-top: 10px;
}
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#img {
    z-index: -999;
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
<<<<<<< HEAD
    opacity: 0.8;
}
#menu {
  background-color: black;
}
=======
    opacity: 0.7;
}

#main {
  background-image: url("../imagenes/portada.jpeg");
}

#menu {
  background-color: black;
}

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#menu div {
  text-align: center;
  font-size: 25px;
  color: red;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#generos img {
  height: 220px;
  width: 220px;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#solistas img {
  height: 220px;
  width: 220px;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#grupos img {
  height: 220px;
  width: 220px;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#genpopular {
  font-size: 20px;
  color: yellow;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#solpopular {
  font-size: 20px;
  color: yellow;
}
<<<<<<< HEAD
=======

>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
#grpopular {
  font-size: 20px;
  color: yellow;
}
</style>
<body id="main">
  <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>
  <div class="container-fluid">
    <div class="row" id="menu">
      <div class="col-md-1">
        <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40"/></a>
      </div>
      <div class="col-md-3 offset-md-1">
        <a href="generos.php">Géneros</a>
      </div>
      <div class="col-md-3">
        <a href="solistas.php">Solistas</a>
      </div>
      <div class="col-md-3">
        <a href="grupos.php">Grupos</a>
      </div>
    </div>
  </div>
    <div class="container-fluid mt-2">
      <div class="row" id="grupos">
        <div class="col-md-2 offset-md-2">
          <a href="eminem.php">
          <div class="row">
            <img class="w-100" src="../imagenes/solistas/eminem.jpeg"/>
          </div>
          <div class="row justify-content-center ">
            <div class="col-auto">
              <p > Eminem </p>
            </div>
          </div></a>
        </div>
        <div class="col-md-2 offset-md-1">
        <a href="sanz.php">
        <div class="row">
            <img class="w-100" src="../imagenes/solistas/sanz.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Alejandro Sanz </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="madonna.php">
        <div class="row">
          <img class="w-100" src="../imagenes/solistas/madonna.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Madonna </p>
          </div>
        </div></a>
      </div>
    </div>
    <div class="row" id="grupos">
      <div class="col-md-2 offset-md-2">
        <a href="lennon.php">
        <div class="row">
          <img class="w-100" src="../imagenes/solistas/lennon.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > John Lennon </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="marley.php">
        <div class="row">
          <img class="w-100" src="../imagenes/solistas/marley.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Bob Marley </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="alboran.php">
        <div class="row">
          <img class="w-100" src="../imagenes/solistas/alboran.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Pablo Alborán </p>
          </div>
        </div></a>
      </div>
    </div>
  <div class="row" id="grupos">
    <div class="col-md-2 offset-md-2">
      <a href="jackson.php">
      <div class="row">
        <img class="w-100" src="../imagenes/solistas/jackson.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Michael Jackson </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="amy.php">
      <div class="row">
        <img class="w-100" src="../imagenes/solistas/amy.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Amy Winehouse </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="adams.php">
      <div class="row">
        <img class="w-100" src="../imagenes/solistas/adams.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Bryan Adams </p>
        </div>
      </div></a>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
