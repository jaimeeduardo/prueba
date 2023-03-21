<?php
include("../conexion/elegir_conexion.php");
include("../sentencias/mysqli.php");
session_start();
$username = $_POST["username"];
$password = md5($_POST["password"]);

//Usuario
$resultado = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE username = '$username'");
date_default_timezone_set('America/Guayaquil');
$fecha_hora = date('Y-m-d H:i:s', time());

//Validamos si el usuario es el correcto
if ($row = mysqli_fetch_array($resultado)) {
	//Si el usuario es correcto ahora validamos su contraseña
	if ($row["password"] == $password) {

		$_SESSION['username'] = $row["username"];
		$_SESSION['password'] = $row["password"];
		$_SESSION['referido'] = $row["referido"];
		$_SESSION['codigo'] = $row["codigo"];

		/*$usuarios_sesion="global_conta";
			session_name($usuarios_sesion);
			$_SESSION['username'] = $username; 
			$_SESSION['password'] = $row['password'];
			// incia sessiones
			//session_start();
			
			// Paranoia: decimos al navegador que no "cachee" esta página.
			session_cache_limiter('nocache,private');
			/*if($perfil=='SECRETARIA')
			{
				$_SESSION['global_system'] = $usuario; 
				$_SESSION['id_global'] = $row['cod_pro'];
				$_SESSION['name'] = $row['ape_pro'].' '.$row['nom_pro'];
				$_SESSION['perfil'] = $perfil;
				$_SESSION['intervalo'] = 90; // en minutos 
				$_SESSION['inicio'] = time();
			//	$_SESSION['bodega'] = $row['usr_bodega'];
	  			header("Location: ../login/index.htm");		
	  		}
	  		if($perfil=='DOCENTE')
			{
				$_SESSION['global_system'] = $usuario; 
				$_SESSION['id_global'] = $row['cod_pro'];
				$_SESSION['name'] = $row['ape_pro'].' '.$row['nom_pro'];
				$_SESSION['perfil'] = $perfil;
				$_SESSION['intervalo'] = 90; // en minutos 
				$_SESSION['inicio'] = time();
			//	$_SESSION['bodega'] = $row['usr_bodega'];
	  			header("Location: ../principal_empleado/principal_empleado.php");		
	  		}
	  		
	  		
session_start();
*/


		header("Location: ../menu/menu.php");
	} else {
		//En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
?>
		<script languaje="javascript">
			alert("CLAVE INCORRECTA");
			location.href = "../login/login.php";
		</script>
	<?php
	}
} else {
	//en caso que el nombre del usuario es incorrecto enviamos un msj y redireccionamos a login.php
	?>
	<script languaje="javascript">
		alert("USUARIO INCORRECTO");
		location.href = "../login/login.php";
	</script>
<?php
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
//mysqli_free_result($resultado);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
//Cerrar();
?>