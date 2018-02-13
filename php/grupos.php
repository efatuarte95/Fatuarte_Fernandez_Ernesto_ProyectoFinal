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
  <div class="container-fluid">
    <div class="row" id="menu">
      <div class="col-md-1">
        <a href="inicio.php"><img src="../imagenes/icono.jpeg" height="40" width="40"/></a>
      </div>
      <div class="col-md-2 offset-md-2">
        <a href="generos.php">Géneros</a>
      </div>
      <div class="col-md-2">
        <a href="solistas.php">Solistas</a>
      </div>
      <div class="col-md-2">
        <a href="grupos.php">Grupos</a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="portada.php" id="logoff">Log Off</a>
      </div>
    </div>
  </div>
  </div>
    <div class="container-fluid mt-2">
      <div class="row" id="grupos">
        <div class="col-md-2 offset-md-2">
          <a href="metallica.php">
          <div class="row">
            <img class="w-100" src="../imagenes/grupos/metallica.jpeg"/>
          </div>
          <div class="row justify-content-center ">
            <div class="col-auto">
              <p > Metallica </p>
            </div>
          </div></a>
        </div>
        <div class="col-md-2 offset-md-1">
        <a href="oreja.php">
        <div class="row">
            <img class="w-100" src="../imagenes/grupos/oreja.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > La Oreja de Van Gogh </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="beatles.php">
        <div class="row">
          <img class="w-100" src="../imagenes/grupos/beatles.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > The Beatles </p>
          </div>
        </div></a>
      </div>
    </div>
    <div class="row" id="grupos">
      <div class="col-md-2 offset-md-2">
        <a href="maroon.php">
        <div class="row">
          <img class="w-100" src="../imagenes/grupos/maroon.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Maroon 5 </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="rolling.php">
        <div class="row">
          <img class="w-100" src="../imagenes/grupos/rolling.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Rolling Stones </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="park.php">
        <div class="row">
          <img class="w-100" src="../imagenes/grupos/park.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Linkin' Park </p>
          </div>
        </div></a>
      </div>
    </div>
  <div class="row" id="grupos">
    <div class="col-md-2 offset-md-2">
      <a href="green_day.php">
      <div class="row">
        <img class="w-100" src="../imagenes/grupos/green_day.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Green Day </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="coldplay.php">
      <div class="row">
        <img class="w-100" src="../imagenes/grupos/coldplay.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Coldplay </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="camela.php">
      <div class="row">
        <img class="w-100" src="../imagenes/grupos/camela.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Camela </p>
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
