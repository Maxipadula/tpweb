<?php
include ('../../../rutas.php');
                    
                    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
                    mysql_select_db ("tpFinal",$conexion) or die ("no db");

$descripcion = $_POST['descripcion'];

$result = $conexion->query("SELECT MO.descripcion modelo,MO.id_modelo id
                           FROM modelo MO inner join 
								vehiculo V on V.id_modelo = MO.id_modelo inner join
								marca MA on MA.id_marca =V.id_marca;
                            WHERE MA.descripcion = '".$descripcion."' ");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<option value="'.$row['id'].'">'.$row['modelo'].'</option>';
    }
}
echo $html;
?>