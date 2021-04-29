<?php
require 'conexion.php';
session_start();
$dui = $_POST['dui'];
$contraseña = $_POST['contraseña'];




$q = "SELECT COUNT(*) as contar from donantes where dui = '$dui' and contraseña = '$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){ 
$_SESSION['username'] = $dui;
  
$mensaje = "¡Iniciaste sesion!";
               echo "<script>";
    echo "alert('$mensaje');";  
    echo "window.location = '../panelU.html';";
    echo "</script>"; 
//header("Location: ./../panelU.html");
  


}else{

    $mensaje = "El usuario o la contraseña que ingreso, son incorrectos";
    echo "<script>";
    echo "alert('$mensaje');";  
    echo "window.location = '../login.html';";
    echo "</script>"; 
    




}


