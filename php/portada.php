<html>
<head>
    <meta charset="utf-8">
    <title> Sound System </title>
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
    opacity: 0.9;
}

#log {
  margin-top: 10px;
  text-align: center;
  border: 1px solid red;
  font-size: 20px;
  background-color: black;
}

#sign {
  margin-top: 10px;
  text-align: center;
  border: 1px solid red;
  font-size: 20px;
  background-color: black;
}

#text {
  margin-top: 120px;
  margin-left: 500px;
  font-size: 55px;
  color: blue;
}

#ss {
  margin-top: -40px;
  margin-left: 600px;
}
</style>

<body id="main">
  <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 offset-md-8">
        <div class="row">
          <div class="col-md-5" id="log">
            <a href="login.php">LOG IN</a>
          </div>
          <div class="col-md-5 offset-md-1" id="sign">
            <a href="register.php">SIGN IN</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id=text>
      <p> SoundSystem </p>
    </div>
    <div class="row" id=ss>
      <img src="../imagenes/icono.jpeg" height="155" width="150"/></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
