<?php 

session_start();



include("conn_bd.php");
include("../Modelo/Cliente.php");


if (isset($_POST['user']) && isset($_POST['pass'] )) {


 
	$user = $_POST['user']; 
	$pass = $_POST['pass'];
	
	$pre = $conex->prepare("SELECT phone from cliente  where nombre = ? and pass = ? limit 1");

    //(phone) where nombre = ? and pass = ? limit 1


    $pre->bind_param("ss",$user,$pass);
    
    $pre->execute();

    $pre->bind_result($phone);

    
    
    if($pre->fetch()){
        $cliente = new Cliente($phone, $user, $pass);

        $_SESSION ["usuario"] = serialize ($cliente);
        echo "sesion iniciada";
    }else{
        echo "Usuario y/o contraseña incorrecto";
    }

}else{
	echo "datos incorrectos";
}