<?php require("../conexion/elegir_conexion.php"); ?>
<?PHP
date_default_timezone_set('America/Guayaquil');
$fecha = date("Y-m-d");
$id = $_GET['id'];
$id_usuario = $_GET['usuario'];
//$id = 3;
$response = 0;
    
$plan_usuario =  mysqli_query($conexion_bd, "INSERT INTO plan_usuario(codigo_plan, id_usuario, fecha, estado) values('$id', '$id_usuario','$fecha','SOLICITADO')");
if (!$plan_usuario) {
    $response = 1;
}
echo ($response);
?>
