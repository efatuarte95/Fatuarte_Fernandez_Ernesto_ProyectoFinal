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
<<<<<<< HEAD
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
=======
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
    }

#img {
  z-index: -999;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
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
</style>

=======

#genpopular {
  font-size: 20px;
  color: yellow;
}

#solpopular {
  font-size: 20px;
  color: yellow;
}

#grpopular {
  font-size: 20px;
  color: yellow;
}
</style>
>>>>>>> 60e21fc78c81d3b7f7076cdec8d13ca01fa82e54
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
          <a href="classic.php">
          <div class="row">
            <img class="w-100" src="../imagenes/generos/classic.jpeg"/>
          </div>
          <div class="row justify-content-center ">
            <div class="col-auto">
              <p > Clásica </p>
            </div>
          </div></a>
        </div>
        <div class="col-md-2 offset-md-1">
        <a href="heavy.php">
        <div class="row">
            <img class="w-100" src="../imagenes/generos/heavy.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Heavy Metal </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="rap.php">
        <div class="row">
          <img class="w-100" src="../imagenes/generos/rap.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Rap </p>
          </div>
        </div></a>
      </div>
    </div>
    <div class="row" id="grupos">
      <div class="col-md-2 offset-md-2">
        <a href="pop.php">
        <div class="row">
          <img class="w-100" src="../imagenes/generos/pop.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Pop </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="latina.php">
        <div class="row">
          <img class="w-100" src="../imagenes/generos/latino.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Latino </p>
          </div>
        </div></a>
      </div>
      <div class="col-md-2 offset-md-1">
        <a href="rock.php">
        <div class="row">
          <img class="w-100" src="../imagenes/generos/rock.jpeg"/>
        </div>
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p > Rock </p>
          </div>
        </div></a>
      </div>
    </div>
  <div class="row" id="grupos">
    <div class="col-md-2 offset-md-2">
      <a href="indie.php">
      <div class="row">
        <img class="w-100" src="../imagenes/generos/indie.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Indie </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="country.php">
      <div class="row">
        <img class="w-100" src="../imagenes/generos/country.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Country </p>
        </div>
      </div></a>
    </div>
    <div class="col-md-2 offset-md-1">
      <a href="jazz.php">
      <div class="row">
        <img class="w-100" src="../imagenes/generos/jazz.jpeg"/>
      </div>
      <div class="row justify-content-center ">
        <div class="col-auto">
          <p > Jazz </p>
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
