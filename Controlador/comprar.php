<?php 


include("conn_bd.php");
include("../Modelo/Producto.php");




if ( isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['precio'] ) && isset($_POST['cantidad'])) {
	
	$id = $_POST['id']; 
	$nombre = $_POST['nombre']; 
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
	
	$pre = $conex->prepare("INSERT INTO id(id, nombre, precio, $array) VALUES (?,?,?,?)");

	$pre->bind_param("isfs",$id,$nombre,$precio,$cantidad);
	$pre->execute();


	echo "se ha registrado correctamente";


}else{
	echo "datos incorrectos";
}