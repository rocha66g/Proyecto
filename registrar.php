<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <?php
$Nombres = $_POST["nombres"];
$Apellidos = $_POST["apellidos"];
$Genero = $_POST["genero"];
$Correo = $_POST["correo"];
$Contraseña = $_POST["contraseña"];
$Confirmar_contraseña = $_POST["contraseña2"];
$ID = mt_rand(0,100000);
include("conexion.php");
function repetido($Correo){
    $sql_repetido = "SELECT*from clientes where Correo = '$Correo'";
    $con=conectar();
    $resultado=$con->query($sql_repetido);
    if(mysqli_num_rows($resultado)>0){
        return 1;
    }
    else{
        return 0;
    }
}
if(!empty($Nombres) && !empty($Apellidos) && !empty($Genero) && !empty($Correo) && !empty($Contraseña) && !empty ($Confirmar_contraseña)){
    if(repetido($Correo)==0){
        if($Contraseña == $Confirmar_contraseña){
            $Contra_cifrada=password_hash($Contraseña,PASSWORD_DEFAULT,array("cost">=10)); 
            $con=conectar();
            $sql="INSERT INTO clientes (Nombres, Apellidos, Genero, Correo, Contraseña, ID) VALUES ('$Nombres', '$Apellidos', '$Genero', '$Correo', '$Contra_cifrada','$ID')";
            $resultado=$con->query($sql);
            if($resultado){
                echo "GUARDADO CON EXITO";
            }
            else{
                echo "NO SE GUARDO NADA";
            }
        }
        else{
            print("Las contraseñas no son iguales");
        }
    }
    else{
        echo "ESTE CORREO YA EXISTE EN NUESTRA BASE DE DATOS, INTENTA CON UNO NUEVO";
        
    }
    }
?>
</head>
<body>
</body>
</html>
