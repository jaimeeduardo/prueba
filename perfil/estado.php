<?php
$conexion_bd=mysqli_connect("localhost","investme_web1","eithanaime1177");

if (!$conexion_bd) {
    error_log("Failed to connect to MySQL: " . mysqli_connect_error($conexion_bd));
    die('Internal server error1');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($conexion_bd, "investme_freedom");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_connect_error($conexion_bd));
    die('Internal server error2');
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$id_estado = $_POST['elegido'];
//$id_provincia = 1;
$cantones =  mysqli_query($conexion_bd, "SELECT * FROM estado  WHERE ubicacionpaisid =$id_estado" );
while ($canton = mysqli_fetch_array($cantones)) {
  echo '<option class="input" value="' . $canton['id'] . '">' . iconv('ISO-8859-1', 'UTF-8', $canton['estadonombre']) . '</option>';
}
?>