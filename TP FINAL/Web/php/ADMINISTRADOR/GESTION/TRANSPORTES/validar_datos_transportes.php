<html> 
<head>
<meta charset="UTF-8">
</head>
<body>
 	<?PHP 
 	session_start() ; 
 	 
	$id =$_POST ["id_tr"]; 	 
 	$estado =$_POST ["estado_transporte"];
	$marca =$_POST ["marca_transporte"];
	$modelo =$_POST ["modelo_transporte"];
	$chasis =$_POST ["num_chasis"];
	$motor=$_POST ["num_motor"];
	$fabricacion =$_POST ["fabricacion"];
	$patente=$_POST ["patente"];
	
	


    include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	echo $marca;
	echo $modelo;
	
	$consulta_vehiculo = mysql_query("SELECT id_vehiculo ID
										FROM vehiculo
										WHERE id_modelo = '".$modelo."' and id_marca= '".$marca."' ")or die (mysql_error());
										
	$filas=mysql_num_rows($consulta_vehiculo);
	echo $filas;
	$vehiculo = mysql_fetch_assoc($consulta_vehiculo);
	$id_vehiculo = $vehiculo["ID"];
											
 	 
	$insert_transportes = mysql_query(" insert into transporte (id_transporte, id_estado, id_vehiculo, num_chasis, num_motor, anio_fabricacion,patente)
										values	('".$id."', '".$estado."', '".$id_vehiculo."','".$chasis."', '".$motor."','".$fabricacion."','".$patente."')
 										    ;")or die (mysql_error());
	
 	 ?>
</body>
 </html> 