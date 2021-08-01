<!DOCTYPE html>
<html lang="es">
<head>
  <title>AGREGAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.container-fluid {
    color: black;
}

  </style>
</head>
<body>
<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION["usuario"];
if($varsesion==null || $varsesion==""){
    echo '<script language="javascript">alert("NO HAS INICIADO SESION");</script>';
    header("location: sesion.html");
  die();
}
?>

<div class="container-fluid bg-1 text-center">
  <h3 class="margin">NUEVO REGISTRO</h3> 
  <div>
  <form>
    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="Nombre" placeholder="Ingresa tu nombre..">

    <label for="lname">Nota</label>
    <input type="text" id="lname" name="Nota" placeholder="Agrega un comentario..">

    <label for="country">Estado</label>
    <select id="country" name="Estado">
      <option value="ME GUSTA">ME GUSTA</option>
      <option value="NO ME GUSTA">NO ME GUSTA</option>
    </select>
  
    <input type="submit" value="ENVIAR">
  </form>

  </div>
</div>
<?php
include("conexion.php");
$Nombre=$_GET["Nombre"];
$Nota=$_GET["Nota"];
$Estado=$_GET["Estado"];
if(!empty($Nombre) && !empty($Nota) && !empty($Estado)){
    $sql="INSERT INTO sugerencias (Nombre,Sugerencia,Estado) VALUES ('$Nombre','$Nota','$Estado')";
    $con=conectar();
    $resultado=$con->query($sql);
    if($resultado){
        echo "GUARDADO CON EXITO";
        header("location: sugerencias.php");
    }
    else{
        echo "NO SE GUARDO NADA";
    }
}
else{   
  echo '<script language="javascript">alert("FALTAN LLENAR CAMPOS");</script>'; ?>
   <div class="alert alert-warning">
    <strong>ERROR</strong>FALTA LLENAR ALGUNOS CAMPOS.
  </div>
  <?php
}
?>
</body>
</html>
