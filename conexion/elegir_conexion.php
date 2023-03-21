<?php  
/*
	if($conexion_bd = mysqli_connect("localhost","investme_web","Eithanaime1177??@@")){
			mysqli_select_db("investme_freedom",$conexion_bd);
		}else
		{
			echo "Fallo en la conexión con la base de datos.";
		}
*/


$conexion_bd=mysqli_connect("localhost","investme_web1","eithanaime1177");

if (!$conexion_bd) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error($conexion_bd));
    die('Internal server error1');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($conexion_bd, "investme_xauto");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_connect_error($conexion_bd));
    die('Internal server error2');
}
date_default_timezone_set('America/Guayaquil');
//proceso satisfactorio
?>