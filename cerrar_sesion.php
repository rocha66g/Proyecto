<?php
session_start();
session_destroy();
echo "SESION FINALIZADA";
header("location:sesion.html");
?>