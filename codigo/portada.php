<html>
<head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style type="text/css">
html, body {
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
    }
  #logs {
    margin-left: 1000px;
    margin-top: 50px;
    width: 240px;
    height: 50px;
  }
  #logs a:first-child {
    float:left;
    width: 80px;
    margin:10px;
    font-size: 20px;
    border: 1px solid yellow;
    color: red;
    text-align: center;
  }
  #logs a:last-child {
    float:left;
    width:80px;
    margin:10px;
    font-size: 20px;
    border: 1px solid yellow;
    color: blue;
    text-align: center;
  }
</style>
<body>
  <img alt="full screen background image" src="../imagenes/portada.jpeg" id="img"/>
  <div id="logs">
           <a href="sign.php">Sign In</a>
           <a href="login.php">Log In</a>
  </div>
</body>
</html>
