<?php
$user = $_POST["user"];

$pass = $_POST["pass"];

$usuario = "admin";
$contrasenia = "1234";

if( $usuario == $user && $contrasenia == $pass ) {
header("location:https://www.youtube.com/watch?v=Gs069dndIYk&ab_channel=EarthWindandFireVEVO");
} else {
  header("location:https://www.youtube.com/watch?v=fBGWtVOKTkM&ab_channel=Gkvicro");
}


 ?>

