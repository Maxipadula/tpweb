<html> 
 	<?PHP 
 	session_start() ; 
 	 
 	$id_viaj =$_POST ["id_viajes"]; 
 	$id_usua =$_GET ["ID"]; 
 	$id_trnsp =$_GET ["ID_TRA"]; 
	$acoplado =$_GET ["ID_ACO"]; 
 	$orig =$_POST ["origen"]; 
 	$destin =$_POST ["destino"]; 
 	$client =$_POST ["cliente"]; 
 	$fecha_inic =$_POST ["fecha_inicio"]; 
 	$carg =$_POST ["carga"]; 
	$cero="null";
	 
 		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
 	 
	  $insert_usuario = mysql_query("insert into viaje (id_viaje, id_usuario,id_acoplado, id_transporte, origen, km_recorridos, destino, cliente, fecha_inicio, fecha_fin, carga) 
 									values ('".$id_viaj."','".$id_usua."','".$id_trnsp."','".$acoplado."','".$orig."','0','".$destin."','".$client."', '".$fecha_inic."','0000-00-00 00:00:00', '".$carg."')  
 										    ;")or die (mysql_error()); 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 	/*$consulta2= mysql_query(" SELECT id_tipo_doc tipo 
                               FROM tipo_doc 
                               WHERE descripcion = '".$tipo_d."' ") or die ("no q3"); 
 	 
 	$fila2 = mysql_fetch_assoc($consulta2); 
 	$id_tipo_d = $fila2["tipo"]; 
 	 
 	 
 	//echo $id_tipo_d; PARA VER QUE TRAEN
 							 
 							 
 	$consulta1= mysql_query(" SELECT codigo_rol ID 
                               FROM rol  
                               WHERE rol.descripcion = '".$rol."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$cod_rol = $fila1["ID"]; 
 		 					   
      
 	//echo $cod_rol; PARA VER QUE TRAEN	 
       
  
*/
 											 
	echo "<p>Los datos han sido guardados con exito.</p>    
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 							 
  
 	?> 
 	 
 </html> 