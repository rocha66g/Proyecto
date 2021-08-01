<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("nav").hide();
  });
  $("#show").click(function(){
    $("nav").show();
  });
});
</script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .shows,.hides{
    color: black;
    background-color: #1abc9c;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>
<?php
session_start();
error_reporting(0);
include ("conexion.php");
$varsesion=$_SESSION["usuario"];
if($varsesion==null || $varsesion==""){
  echo '<script language="javascript">alert("NO HAS INICIADO SESION");</script>';
  //sleep(6);
  header("location: sesion.html");
  die();
}
?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="pag_principal.html">INICIO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sugerencias.php">COMENTARIOS</a></li>
        <li><a href="#">NOTIFICACIONES</a></li>
        <li><a href="cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>
<button id="hide" class="hides">OCULTAR</button>
<button id="show" class="shows">MOSTRAR</button>
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">BIENVENIDO <?php echo $_SESSION["usuario"];  ?></h3> 
  <img src="images/IMAGEN2.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
</div>
</body>
</html>
