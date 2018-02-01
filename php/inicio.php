<html>
<head>
    <meta charset="utf-8">
    <title> Sound System </title>
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<style type="text/css">
#main {
  background-image: url("../imagenes/portada.jpeg");
}

#menu {
  background-color: yellow;
}

#menu div {
  border: 1px solid red;
  text-align: center;
  font-size: 25px;
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
<body id="main">
  <div class="container-fluid">
    <div class="row" id="menu">
      <div class="col-md-1">
        <a href="inicio.php"><img src="../imagenes/ss.jpeg" height="40" width="40"/></a>
      </div>
      <div class="col-md-3">
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
    <div class="container-fluid">
    <div class="row" id="genpopular">
      <div class="col-md-8 offset-md-5">
        <p> Géneros más populares </p>
      </div>
    </div>
    <div class="row" id="grupos">
        <div class="col-md-2 offset-md-1">
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
    </div>
    <div class="row" id="solpopular">
      <div class="col-md-8 offset-md-5 mt-3">
        <p> Solistas más populares </p>
      </div>
    </div>
    <div class="row" id="grupos">
      <div class="col-md-2 offset-md-1">
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
    </div>
  <div class="row" id="grpopular">
    <div class="col-md-8 offset-md-5 mt-3">
      <p> Grupos más populares </p>
    </div>
  </div>
  <div class="row" id="grupos">
    <div class="col-md-2 offset-md-1">
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
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
