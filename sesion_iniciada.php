<?php
 $correo=$_POST["correo"];
 $contraseña=$_POST["contraseña"];
 $conexion = mysqli_connect("localhost","root","12345678","usuarios2");
 $consulta="SELECT Correo, Contraseña FROM clientes WHERE Correo='$correo'"; // and Contraseña = '$contraseña'";
 $resultado = mysqli_query($conexion,$consulta);
 $buscar_pass=mysqli_fetch_array($resultado);
 $filas = mysqli_num_rows($resultado);
    if($filas>0 &&(password_verify($contraseña,$buscar_pass["Contraseña"]))){
        echo "SIMONA LA MONA";
        session_start();
        $_SESSION["usuario"]=$correo;
        header("location: pag_principal.php");
    }
    else{
        print("USUARIO NO ENCONTRADO");
    }
?>
