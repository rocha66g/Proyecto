<!DOCTYPE html>
<html lang="es">
<head>
  <title>SUGERENCIAS</title>
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
    $("table ").hide();
  });
  $("#show").click(function(){
    $("table").show();
  });
});
</script>
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  height: 20%;
  color: black;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 10px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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
    background-color: gray;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;
color: white;}
  </style>
</head>
<body>
<?php
session_start();
error_reporting(0);
$conexion=mysqli_connect('localhost','root','12345678','usuarios2');
$varsesion=$_SESSION["usuario"];
if($varsesion==null || $varsesion==""){
    echo '<script language="javascript">alert("NO HAS INICIADO SESION");</script>';
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
      <a class="navbar-brand" href="pag_principal.php">INICIO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">COMENTARIOS</a></li>
        <li><a href="#">NOTIFICACIONES</a></li>
        <li><a href="cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bg-1 text-center">
<table id="customers">
<tr>
    <th>Nombre</th>
    <th>Comentarios</th>
    <th>Estado</th>
  </tr>
<?php
$consulta="SELECT*from sugerencias";
$result = mysqli_query($conexion,$consulta);
while ($mostrar=mysqli_fetch_array($result)){
?>
  <tr>
    <td><?php echo $mostrar["Nombre"]; ?></td>
    <td><?php echo $mostrar["Sugerencia"]; ?></td>
    <td><?php echo $mostrar["Estado"]; ?></td>
  </tr>
    <?php
}
    ?>
<a class="hides" href="agregar_nota.php" >Agregar</a>
</table>
<p></p>
<button id="hide" class="hides">OCULTAR</button>
<button id="show" class="shows">MOSTRAR</button>


</div>
</body>
</html>
