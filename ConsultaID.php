<?php

include "conexion.php";
$Id=$_POST["ID"];

$sql="SELECT * FROM servicio where Id_Servicios=$Id";
$result=mysqli_query($conn,$sql);
$datos= array();
if($result){
	$i=0;
	while($fila=mysqli_fech_assoc($result)){
	 $datos[$i]=$fila;
	 $i=$i+1;
	}

}else{
	echo "Error no se encontro ID".mysqli_error();

}
mysqli_close($coon);
echo jso_encode($datos);
?>