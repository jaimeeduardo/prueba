<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <title>Investment Monopoly</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<body bgcolor="black" onload="move();">
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
            background-color: #B78632;
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
            color: #B78632;
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
        .button
        { 
            float: left;
            font-weight: 200;
            font-size: 12px;
            font-size: 12px;
            text-transform: uppercase;
            color: #fff;
            text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
            background: #56c2e1;
            border: 1px solid #46b3d3;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
            -moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
            -webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
            padding:5px 10px;
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

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #B78632;
            border: none;
            color: white;
            padding: 16px 15px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            float: center;
        }

        select {
            width: 80%;
            padding: 18px 22px;
            border: none;
            border-radius: 5px;
            color: #FFFFFF;
            background-color: #B78632;
        }
    </style>
</head>

<?php require("../menu/menu_principal.php"); ?>
<?php
$q_paquete = mysqli_query($conexion_bd, "SELECT * FROM plan_usuario WHERE username='$_SESSION[username]'");
     $fecha_actual=date("Y-m-d");
  
  ?>
<div class="w3-container">
  <h2><font color="#B78632">Mis paquetes</font></h2>
  <p><font color="#B78632">Detalle de los paquetes:</font></p>

  <table bgcolor="black" class="w3-table-all w3-card-4">
    <tr>
      <th bgcolor="black"><font color="#B78632">Identificacion</th>
      <th bgcolor="black"><font color="#B78632">Paquete</th>
      <th bgcolor="black"><font color="#B78632">Estado</th>
      <th bgcolor="black"><font color="#B78632">Progreso</th>
      <th bgcolor="black"><font color="#B78632">Capital</th>
      <th bgcolor="black"><font color="#B78632">Utilidad</th>
      <th bgcolor="black"><font color="#B78632">Fecha</th>
      <th bgcolor="black"><font color="#B78632">Solicitar Retiro</th>
    </tr>
     <?php
    while ($paquete = mysqli_fetch_array($q_paquete)) 
    {
        $id_plan=$paquete['id'];
        $fecha_pago=$paquete['fecha_pago'];
        $fecha_pago1=$fecha_pago.' 00:00:00';
        $fecha_actual1=$fecha_actual.' 00:00:00';
        $valor_acumulado=0;
        $capital=0;
        $porcentaje_avance=0;
        $q_pagos = mysqli_query($conexion_bd, "SELECT * FROM pagos WHERE id_plan='$id_plan' and tipo_transaccion='ABONO' and  fecha_pagos<='$fecha_actual1' and fecha_pagos>='$fecha_pago1'");
        while ($pag = mysqli_fetch_array($q_pagos)) 
        {
            $valor_acumulado=$valor_acumulado+$pag['valor_pagos'];
        }

        $fecha_culmina=$paquete['fecha_culmina'];
        $codigo_plan1[]=$paquete['id'];
        ?>
    <tr>
       
      <td bgcolor="black"><font color="#B78632"><?php echo $id=$paquete['id']; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php
              $codigo_plan=$paquete['codigo_plan'];
               $q_plan = mysqli_query($conexion_bd, "SELECT * FROM planes WHERE codigo='$codigo_plan'");
               while ($plan = mysqli_fetch_array($q_plan)) 
                {
                    echo $plan['nombre'].' '.$plan['valor'];
                    $valor_plan=$plan['valor'];
                 }
             ?>
      </td>
    <?php
    function number_of_working_days($from, $to) {
        $workingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
        $holidayDays = ['*-12-25', '*-01-01', '2013-12-23']; # variable and fixed holidays

        $from = new DateTime($from);
        $to = new DateTime($to);
        $to->modify('+1 day');
        $interval = new DateInterval('P1D');
        $periods = new DatePeriod($from, $interval, $to);

        $days = 0;
        foreach ($periods as $period) {
            if (!in_array($period->format('N'), $workingDays)) continue;
            if (in_array($period->format('Y-m-d'), $holidayDays)) continue;
            if (in_array($period->format('*-m-d'), $holidayDays)) continue;
            $days++;
        }
        return $days;
    }
    if($fecha_actual>$fecha_culmina)
    {
        $progreso='FINALIZADO';
    }
    else
    {
        
       
        $dias=number_of_working_days($fecha_pago,$fecha_actual);
       // $dias=$dias-1;
        $progreso='EN PROGRESO';
        //$porcentaje_avance=(round(($dias/100),2))*100;
        $porcentaje_avance=(round(($valor_acumulado/$valor_plan),2))*100;
      //  $capital=round(((($dias/100)*$valor_acumulado)),2);
        $capital=$valor_acumulado;
    }
?>
      <td bgcolor="black"><font color="#B78632"><?php echo $progreso; ?></td>
      <td bgcolor="black">
        <?php $valor=50; ?>
        <div class="w3-container">    
          <div class="w3-light-grey">
            <div id="myBar" class="w3-green" style="height:24px;width:10;color:#B78632;"><font color="#B78632">0%</div>
          </div>  
        </div>
    </td>
      <td bgcolor="black"><font color="#B78632"><?php echo $capital; ?></td>
     <td bgcolor="black"><font color="#B78632"><?php echo $capital; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php echo $fecha_pago; ?></td>
      <td bgcolor="black" align="center"><font color="#B78632">
        <?php 
       
        if($porcentaje_avance>10)
        {
            ?>        
        <input type="button" class="button" onClick="location.href='solicitar_retiro.php'+'?j='+<?php echo $id; ?>+'&monto_maximo='+<?php echo $capital; ?>" name="solicitar_retiro" value="SOLICITAR" />
        <input type="button" class="button" onClick="location.href='detalle.php'+'?j='+<?php echo $id; ?>" name="detalle" value="DETALLE" />
        </td>
        <?php 
        }
        ?>
    </tr>
    <?php
    }
    ?>    
  </table>
</div>
<br>
<br>
<div class="w3-container">
  <h2><font color="#B78632">Mis retiros</font></h2>
  <p><font color="#B78632">Detalle de los retiros:</font></p>

  <table bgcolor="black" class="w3-table-all w3-card-4">
    <tr>
      <th bgcolor="black"><font color="#B78632">Identificacion</th>
      <th bgcolor="black"><font color="#B78632">Plan</th>
      <th bgcolor="black"><font color="#B78632">Valor</th>
      <th bgcolor="black"><font color="#B78632">Estado</th>
      
      <th bgcolor="black"><font color="#B78632">Fecha</th>
    </tr>  
    <?php
foreach($codigo_plan1 as $plan)
{ 
    $q_retiro = mysqli_query($conexion_bd, "SELECT * FROM pagos WHERE id_plan='$plan' and tipo_transaccion='RETIRO'");
    while ($retiro = mysqli_fetch_array($q_retiro)) 
    {
  ?>  
    <tr>       
      <td bgcolor="black"><font color="#B78632"><?php echo $retiro['codigo_pagos']; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php echo $retiro['id_plan']; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php echo $retiro['valor_pagos']; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php echo $retiro['estado']; ?></td>
      <td bgcolor="black"><font color="#B78632"><?php echo $retiro['fecha_pagos']; ?></td>
         
    </tr>
    <?php
    }
}
?>
    </table>
</div>
<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= <?php echo $porcentaje_avance; ?>) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>
</body>
</html> 
