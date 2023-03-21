<?php require("../conexion/elegir_conexion.php");?>

<script type="text/javascript">
	function pdf(id) {
		window.location = "pdf.php?codigo="+id;
	}				
</script>


<?php
date_default_timezone_set('America/Guayaquil');
$hora=date('Y-m-d H:i:s', time());
$error = 0; 
 $username=$_POST['username'];

$password=md5($_POST['password']);
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$referido1=$_POST['referido1'];
//echo $url=$_POST['url'];
// Salida: http://midominio.com/pagina/index.php?user=pepito
$nivel=0;
$consulta_referido = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE username='$referido1'");
 while ($ref = mysqli_fetch_array($consulta_referido)) 
{
	$nivel = $ref["nivel"];
}
$nivel=$nivel+1;
$query_control = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE username='$_POST[username]'");
	if(mysqli_num_rows($query_control) == 0){
		$q_proy= "INSERT INTO usuario ( codigo, username, email, password, referido, tipo, fecha_registro, nivel, estado, telefono) VALUES ('', '$username', '$email',  '$password',  '$referido1', 'USUARIO', '$hora', '$nivel', 'ACTIVO', '$telefono') ";
		$ejec_proy  = mysqli_query($conexion_bd, $q_proy);
			if (!$ejec_proy)
				$error = 1;

		//$id=mysqli_insert_id();

		if ($error != 1){
				?>                      
				<script  language="JavaScript">
					alert("Registro satisfactorio"); 
					window.location = "login.php"; 		
				</script> <?php 
			}else {?>                           
				<script  language="JavaScript">
					alert("ERROR al guardar el registro");  
					window.close();
				</script> <?php 
			}
	}else{
		?>                           
     	<script  language="JavaScript">
      		alert("EL USUARIO YA EXISTE");  
      		window.location = "login.php";
   		</script> 
		<?php 
	}


