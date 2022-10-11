<?php 

session_start();

//require_once'crudes.php';

$user=$_POST['usuario'];
$pass=$_POST['contrasena'];


if ($user==="jmorenoe" & $pass==="123456") {

$_SESSION['usuario']=$user;

header('location: usuario.php');
	
}else{
	header('location: index.php');
}










 ?>