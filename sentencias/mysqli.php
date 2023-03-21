<?php 
	function Query_cliente($sentencia){
		$query = mysql_query($sentencia);
		return $query;
	}
	function Query($sentencia){
		$query = mysql_query($sentencia);
		return $query;
	}
	function fetchArray($sentencia){
		$array = mysql_fetch_array($sentencia);
		return $array;
	}
	function numRows($sentencia){
		$rows = mysql_num_rows($sentencia);
		return $rows;
	}
	function Cerrar(){
		$cerrar= mysql_close();
		return $cerrar;
	}
	function cerrarCliente(){
		$cerrar_cli= mysql_close();
		return $cerrar_cli;
	}
	function autoCommit(){
		$auto = mysql_query("BEGIN");
		return $auto;
	}
	function Commit(){
		$comm = mysql_query("COMMIT");
		return $comm;
	}
	function Rollback(){
		$roll = mysql_query("ROLLBACK");  
		return $roll;
	}
?>
