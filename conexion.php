<?php
$host 	= "localhost";
$db	= "web";
$user	= "root";
$pass	= "nasa";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}

//fetch
//CONSULTA Y EJECUCION
$sqlrotacion = "SELECT path FROM imagenesrotacion WHERE rotacion === true";// ATENCION PORQUE CAMBIA SEGUN DONDE SE EJECUTE LA BASE DE DATOS
$sqlmiembros = "SELECT path FROM imagenesrotacion WHERE rotacion === true";
$sqlcarousel = "SELECT path FROM imagenesrotacion WHERE rotacion === true";
$qm = $conn->prepare($sqlmiembros);
$qr = $conn->prepare($sqlrotacion);
$qc = $conn->prepare($sqlcarousel);
$qm->execute(array());
$qr->execute(array());
$qc->execute(array());
if((!$q) or (!$qc) or (!$qr))
{
	die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo()); 
};
?>