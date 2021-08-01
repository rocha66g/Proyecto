<?php 
function conectar(){
    $user="root";
    $contra="12345678";
    $server="localhost";
    $db="usuarios2";
    $con=mysqli_connect($server,$user,$contra,$db) or die ("error al conectar a la base de datos");
    return $con;
}
?>