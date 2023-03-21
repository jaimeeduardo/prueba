
<?php require("../conexion/elegir_conexion.php"); ?>


<?php
	$query_update = mysqli_query($conexion_bd, "UPDATE plan_usuario SET estado='ANULADO' WHERE id='$_GET[codigo]'");
	if ($query_update) {
		//Auditoria
		//$ejec_aud  = Auditoria("EL USUARIO MODIFICO UNA UNIDAD DE MEDIDA.");
		?>                      
		<script  language="JavaScript">
			alert("RECHAZADO CORRECTAMENTE");
			window.location = "../paquetes/registro_paquete.php";
		</script> 
		<?php 
	}else {
		?>                           
		<script  language="JavaScript">
			alert("ERROR AL RECHAZAR");  
		</script> 
		<?php 
	}
	?>
