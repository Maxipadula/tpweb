
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php 
			session_start();
		  
		   include ("../../rutas.php"); 
		    
			$permiso = "consulta de graficos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../permiso.php");
			
			?>
			
<div id='divHeader'>
			<h1> GRAFICOS</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
           <li><a href="">RENDIMIENTO DE LOS VEHICULOS EN KM</a></li>
		
		   <li><a href="">RENDIMIENTO PROMEDIO DE CONSUMO DE COMBUSTIBLE</a></li>

		   <li> <a href="">SALIR</a></li>
	

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>