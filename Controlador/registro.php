<?php 

session_start();


include("conn_bd.php");
include("../Modelo/Cliente.php");



if ( isset($_POST['phone']) && isset($_POST['user']) && isset($_POST['pass'] )) {



	$phone = $_POST['phone']; 
	$user = $_POST['user']; 
	$pass = $_POST['pass'];
	
	$pre = $conex->prepare("INSERT INTO cliente(phone, nombre, pass) VALUES (?,?,?)");

	$pre->bind_param("iss",$phone,$user,$pass);
	$pre->execute();


	echo "se ha registrado correctamente";


}else{
	echo "datos incorrectos";
}