<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>X Auto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the header */
        .header {
            padding: 30px;
            text-align: center;
            background: #000000;
            color: #B78632;

        }

        .active {
            background-color: #212A73;
            color: white;
        }

        .active-vinculo {
            background-color: #f2f2f2;
            color: white;
        }

        /* Increase the font size of the h1 element */
        .header h1 {
            font-size: 40px;
        }

        /* Style the top navigation bar */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the navigation bar links */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Right-aligned link */
        .navbar a.right {
            float: right;
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Column container */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Create two unequal columns that sits next to each other */
        /* Sidebar/left column */
        .side {
            flex: 30%;
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* Main column */
        .main {
            flex: 70%;
            background-color: white;
            padding: 20px;
        }

        /* Fake image, just for this example */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
        }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: column;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
        }

        fieldset {
            display: block;
            margin-left: 40px;
            margin-right: 20px;
            margin-top: 40px;
            padding-top: 0.35em;
            padding-bottom: 0.625em;
            padding-left: 0.75em;
            padding-right: 0.75em;
            border: 2px groove (internal value);
        }





        select {
            width: 80%;
            padding: 18px 22px;
            border: none;
            border-radius: 5px;
            color: #FFFFFF;
            background-color: #212A73;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            background-color: #FFFF;
        }


        * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:white;
}

input[type=submit] {
  background-color: #212A73;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #000000;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>

<?php require("../menu/menu_principal.php");

$q_etapa = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo=" . $_SESSION['codigo'] . "");
  while ($c_etapa = mysqli_fetch_array($q_etapa)) {
    $etapa=$c_etapa['etapa'];
  }

	$posicion_1='';
	$posicion_2='';
	$posicion_3='';
	$posicion_11='';
	$posicion_12='';
	$posicion_13='';
	$posicion_21='';
	$posicion_22='';
	$posicion_23='';
	$posicion_31='';
	$posicion_32='';
	$posicion_33='';
	$nombre_1='1';
	$nombre_2='2';
	$nombre_3='3';
	$nombre_11='1.1';
	$nombre_12='1.2';
	$nombre_13='1.3';
	$nombre_21='2.1';
	$nombre_22='2.2';
	$nombre_23='2.3';
	$nombre_31='3.1';
	$nombre_32='3.2';
	$nombre_33='3.3';
	$contador_etapa=0;

if($etapa==1)
{

	$q_consulta = mysqli_query($conexion_bd, "SELECT * FROM subusuario where recomendador=" . $_SESSION['codigo'] . "");
	while ($consulta = mysqli_fetch_array($q_consulta)) {
	  if ($consulta['posicion']=='1')
	  {
		$posicion_1=$consulta['usuario'];
	  }
	  if ($consulta['posicion']=='2')
	  {
		$posicion_2=$consulta['usuario'];
	  }
	  if ($consulta['posicion']=='3')
	  {
		$posicion_3=$consulta['usuario'];
	  }
	}

	if($posicion_1!='')
	{
	  $q_consulta1 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_1'");
	  while ($consulta1 = mysqli_fetch_array($q_consulta1)) {
		$nombre_1=$consulta1['username'];
		$contador_etapa=$contador_etapa+1;


			$q_consulta11 = mysqli_query($conexion_bd, "SELECT * FROM subusuario where recomendador=" . $consulta1['codigo'] . "");
			while ($consulta11 = mysqli_fetch_array($q_consulta11)) {
			  if ($consulta11['posicion']=='1')
			  {
				$posicion_11=$consulta11['usuario'];
			  }
			  if ($consulta11['posicion']=='2')
			  {
				$posicion_12=$consulta11['usuario'];
			  }
			  if ($consulta11['posicion']=='3')
			  {
				$posicion_13=$consulta11['usuario'];
			  }
			}

			if($posicion_11!='')
			{
			  $q_consulta11 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_11'");
			  while ($consulta11 = mysqli_fetch_array($q_consulta11)) {
				$nombre_11=$consulta11['username'];
				$contador_etapa=$contador_etapa+1;
			  }
			}
			if($posicion_12!='')
			{
			  $q_consulta12 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_12'");
			  while ($consulta12 = mysqli_fetch_array($q_consulta12)) {
				$nombre_12=$consulta12['username'];
				$contador_etapa=$contador_etapa+1;
			  }
			}
			if($posicion_13!='')
			{
			  $q_consulta13 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_13'");
			  while ($consulta13 = mysqli_fetch_array($q_consulta13)) {
				$nombre_13=$consulta13['username'];
				$contador_etapa=$contador_etapa+1;
			  }
			}

	  }
	}
	if($posicion_2!='')
	{
	  $q_consulta2 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_2'");
	  while ($consulta2 = mysqli_fetch_array($q_consulta2)) {
		$nombre_2=$consulta2['username'];
		$contador_etapa=$contador_etapa+1;

		$q_consulta21 = mysqli_query($conexion_bd, "SELECT * FROM subusuario where recomendador=" . $consulta2['codigo'] . "");
		while ($consulta21 = mysqli_fetch_array($q_consulta21)) {
		  if ($consulta21['posicion']=='1')
		  {
			$posicion_21=$consulta21['usuario'];
		  }
		  if ($consulta21['posicion']=='2')
		  {
			$posicion_22=$consulta21['usuario'];
		  }
		  if ($consulta21['posicion']=='3')
		  {
			$posicion_23=$consulta21['usuario'];
		  }
		}

		if($posicion_21!='')
		{
		  $q_consulta21 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_21'");
		  while ($consulta21 = mysqli_fetch_array($q_consulta21)) {
			$nombre_21=$consulta21['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}
		if($posicion_22!='')
		{
		  $q_consulta22 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_22'");
		  while ($consulta22 = mysqli_fetch_array($q_consulta22)) {
			$nombre_22=$consulta22['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}
		if($posicion_23!='')
		{
		  $q_consulta23 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_23'");
		  while ($consulta23 = mysqli_fetch_array($q_consulta23)) {
			$nombre_23=$consulta23['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}




	  }
	}
	if($posicion_3!='')
	{
	  $q_consulta3 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_3'");
	  while ($consulta3 = mysqli_fetch_array($q_consulta3)) {
		$nombre_3=$consulta3['username'];
		$contador_etapa=$contador_etapa+1;



		$q_consulta31 = mysqli_query($conexion_bd, "SELECT * FROM subusuario where recomendador=" . $consulta3['codigo'] . "");
		while ($consulta31 = mysqli_fetch_array($q_consulta31)) {
		  if ($consulta31['posicion']=='1')
		  {
			$posicion_31=$consulta31['usuario'];
		  }
		  if ($consulta31['posicion']=='2')
		  {
			$posicion_32=$consulta31['usuario'];
		  }
		  if ($consulta31['posicion']=='3')
		  {
			$posicion_33=$consulta31['usuario'];
		  }
		}

		if($posicion_31!='')
		{
		  $q_consulta31 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_31'");
		  while ($consulta31 = mysqli_fetch_array($q_consulta31)) {
			$nombre_31=$consulta31['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}
		if($posicion_32!='')
		{
		  $q_consulta32 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_32'");
		  while ($consulta32 = mysqli_fetch_array($q_consulta32)) {
			$nombre_32=$consulta32['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}
		if($posicion_33!='')
		{
		  $q_consulta33 = mysqli_query($conexion_bd, "SELECT * FROM usuario where codigo='$posicion_33'");
		  while ($consulta33 = mysqli_fetch_array($q_consulta33)) {
			$nombre_33=$consulta33['username'];
			$contador_etapa=$contador_etapa+1;
		  }
		}


	  }
	}
	?>
<?php
}
if($etapa==2)
{
	//$q_consulta = mysqli_query($conexion_bd, "SELECT * FROM usuario where recomendador=" . $_SESSION['codigo'] . " and etapa=2");
	//while ($consulta = mysqli_fetch_array($q_consulta)) {
	$q_consulta = mysqli_query($conexion_bd, "SELECT * FROM subusuario, usuario where subusuario.recomendador=" . $_SESSION['codigo'] . " and subusuario.usuario=usuario.codigo ");
	while ($consulta = mysqli_fetch_array($q_consulta)) 
	{
	 if ($consulta['posicion']=='1')
	  {
		$codigo_1=$consulta['usuario'];
		$q_consulta1 = mysqli_query($conexion_bd, "SELECT * FROM subusuario, usuario where subusuario.recomendador='$codigo_1' and subusuario.usuario=usuario.codigo and usuario.etapa=2");
		while ($consulta1 = mysqli_fetch_array($q_consulta1)) 
		{
		  $nombre_1=$consulta1['username'];		  
		  if ($consulta1['posicion']=='1')
		  {
			$posicion_11=$consulta11['usuario'];
		  }
		  if ($consulta1['posicion']=='2')
		  {
			$posicion_12=$consulta12['usuario'];
		  }
		  if ($consulta1['posicion']=='3')
		  {
			$posicion_33=$consulta31['usuario'];
		  }
		}
	  }
	  if ($consulta['posicion']=='2')
	  {
		$codigo_2=$consulta['usuario'];
		$nombre_2=$consulta['username'];
	  }
	  if ($consulta['posicion']=='3')
	  {
		$codigo_3=$consulta['usuario'];
		$nombre_3=$consulta['username'];
	  }
	}
	
	
	
}
?>

	<div class="container">
	  <h2><font color="red">Plan Etapa <?php echo $etapa; ?> </font></h2>
	  <p>Tus referidos</p>
	  <table class="table">
		<thead>
		  <tr>
			<th><input type="button" class="btn btn-danger" value="<?php echo $_SESSION['username']; ?>"></th>
			<th></th>
			<th></th>

		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td></td>
			<td><input type="button" class="btn btn-info" value="<?php echo $nombre_1; ?>"></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_11; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_12; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_13; ?></button></td>
		  </tr>
		<tr>
			<td></td>
			<td><input type="button" class="btn btn-info" value="<?php echo $nombre_2; ?>"></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_21; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_22; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_23; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td><input type="button" class="btn btn-info" value="<?php echo $nombre_3; ?>"></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_31; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_32; ?></button></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td> <button type="button" class="btn btn-success"><?php echo $nombre_33; ?></button></td>
		  </tr>
		</tbody>
	  </table>
	</div>

?> 	
</body>
</html>
