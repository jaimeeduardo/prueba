<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>
<!DOCTYPE html>
<html>
<?php
$ver=0;
$q_verifica = mysqli_query($conexion_bd, "SELECT * FROM plan_usuario WHERE id_usuario='$_SESSION[codigo]' and estado='COMPRADO'");
    while ($verifica = mysqli_fetch_array($q_verifica)) 
    {
        $ver=1;
    }
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <title>Investment Monopoly</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
    f
    function Rechazar(id) {
        window.location = "eliminar_compra.php?codigo="+id;
    }   

</script>
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

        /*input[type=button],*/
        input[type=submit],
        input[type=reset] {
            background-color: #B78632;
            border: none;
            color: white;
            padding: 16px 15px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            float: right;
        }

        input[type=button] {
            background-color: #B78632;
            border: none;
            color: white;
            padding: 16px 15px;
            text-decoration: none;

            text-align: center;

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

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            background-color: #FFFF;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
    </style>
</head>

<?php require("../menu/menu_principal.php"); ?>
<style>
    <?php require("../css/tabla.css"); ?>div.container {
        text-align: center;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body style="background-color: black;">
    <?php $paquetes = mysqli_query($conexion_bd, "SELECT * FROM planes"); ?>
    <form class="multiplecolumn" method="post" id="guardar" action="" width="100%">

        <fieldset style="background-color:black; width:95% ;text-align: center; ">
            <legend style="color:#B78632;"><b>PAQUETES DISPONIBLES</b></legend>
            <div class="datagrid" style="overflow-x:auto; text-align:center">
                <table >
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                    <tbody>
                        <tr>
                            <?php
                            $cont = 0;
                            $paquetes = mysqli_query($conexion_bd, "SELECT * FROM planes");
                            while ($row = mysqli_fetch_array($paquetes)) {
                                $cont = $cont + 1;
                                $color = '#' . $row['color'] ?>

                                <td>
                                    <fieldset style="background-color:<?php echo $color ?>; width:80% ; text-align: center;">
                                        <legend style="color:#B78632; "><b><?php echo $row['nombre']; ?></b></legend>
                                        <table style="font-color:red">
                                            <tr>
                                                <td style=" text-align: center;"> <b><?php echo '$ ' . $row['valor']; ?></b>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: center;">
                                                    <input class="button" type="button" name="OK" onclick="Comprar('<?php echo $row['codigo']; ?>','<?php echo $ver; ?>');" value="COMPRAR PLAN" />
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </td>
                                <?php if ($cont % 3 == 0) { ?>
                        </tr>
                        <tr>
                        <?php } ?>

                    <?php
                            } ?>

                        </tr>
                    </tbody>
                </table>
                <table>
                    <tr>
                        <td style=" width:30%; text-align:left">
                            <fieldset style=" background-color:#ffffff00; width:90% ;text-align: center;">
                                <legend style="color:#B78632;"><b>PASOS PARA INGRESAR</b></legend>
                               <img src="../images/izquierdo.jpeg" style="width:90%" class="center">
                                <p style="background-color:#B78632;" style="text-align: center;">3LzxzLbNfxJBKx44JmSDBpvRZxmdhAvmXX
                                </p>
                            </fieldset>
                        </td>
                        <td style=" width:30%; text-align:center">
                            <fieldset style=" background-color:#ffffff00; width:90% ;text-align: center;">
                                <legend style="color:#B78632;"><b>PAGA EN BILLETERA</b></legend>
                                <img src="../images/codigo.jpeg" style="width:90%" class="center">
                                <p style="background-color:#B78632;" style="text-align: center;">3LzxzLbNfxJBKx44JmSDBpvRZxmdhAvmXX
                                </p>
                            </fieldset>
                        </td>
                         <td style=" width:30%; text-align:left">
                            
                               
                               <div class="coupon">
                                  <div class="container">
                                    <h3>INVESTMENT MONOPOLY</h3>
                                  </div>
                                  <img src="../images/avatar1.png" alt="Avatar" style="width:100%;">
                                  <div class="container" style="background-color:white">
                                    <h2><b> BIENVENIDO</b></h2> 
                                    <p>Felicidades estás a un paso de pertenecer a la plataforma número 1 a nivel mundial Monopoly Investnent  </p>
                                  </div>
                                  <div class="container">
                                    
                                    <p class="expire"><?php echo date('Y-m-d'); ?></p>
                                  </div>
                                </div>  
                                
                          
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <script type="text/javascript">
            function Comprar(id,v) {
                var plan = id;
                var verif = v;
                console.log("pala" + id);
                if(verif==0)
                {    
                    //alert("Esta seguro que desea comprar ese plan?");
                    if (confirm("Esta seguro que desea comprar ese plan?")) {
                        var url = "guardar_plan.php?id=" + plan + "&usuario=" + <?php echo $_SESSION['codigo']; ?>;
                        $.getJSON(url, function(motor) {
                            if (motor == 0) {
                                alert("Paquete comprado con exito");
                                window.location = "registro_paquete.php"
                            } else {
                                alert("Compra Cancelada");
                                window.location = "registro_paquete.php"
                            }
                        });

                    } else {
                        window.location = "registro_paquete.php"
                    }
                } else {
                    alert("Ya tiene un paquete vigente");
                    window.location = "registro_paquete.php"
                }

            }
        </script>
        <fieldset style="background-color:#ffffff00; width:95% ;text-align: center; float:center ">
            <legend style="color:#B78632; "><b>PAQUETES CONTRATADOS</b></legend>
            <div class="datagrid" style="overflow-x:auto; text-align:center">
                <table>
                    <thead>
                        <tr>
                            <th class="table-sortable:numeric" style="width:5%; font-size:10px">NRO</th>
                            <th class="table-sortable:default" style="width:25%; font-size:10px">NOMBRE</th>
                            <th class="table-sortable:default" style="width:25%; font-size:10px">FECHA</th>
                            <th class="table-sortable:default" style="width:25%; font-size:10px">ESTADO</th>
                            <th class="table-sortable:default" style="width:25%; font-size:10px">VALOR</th>
                            <th class="table-sortable:default" style="width:25%; font-size:10px">OPCION</th>
                        </tr>

                    <tbody>

                        <?php
                        $k = 1;
                        $q_mantenimiento = mysqli_query($conexion_bd, "SELECT * FROM plan_usuario WHERE id_usuario='$_SESSION[codigo]'");
                        while ($linea = mysqli_fetch_array($q_mantenimiento)) {
                            $q_plan = mysqli_query($conexion_bd, "SELECT * FROM planes WHERE codigo='$linea[codigo_plan]'");
                            $plan = mysqli_fetch_array($q_plan)
                        ?>
                            <tr>
                                <td style="width:10%;"> <?php printf($k); ?> </td>
                                <td style="width:10%;"> <?php printf($plan['nombre']); ?> </td>
                                <td style="width:10%;"> <?php printf($linea['fecha']); ?> </td>
                                <td style="width:10%;"> <?php printf($linea['estado']); ?> </td>
                                <td style="width:10%;"> <?php printf($plan['valor']); ?> </td>
                                <td style="width:10%;">
                                <?php 
                               
                                if($linea['estado']=='SOLICITADO')
                                {
                                    ?>        
                                    <a href="#" class="teditar" onClick="Rechazar('<?php printf($linea['id']); ?>');">ANULAR</a>
                                    <?php 
                                    }
                                    ?>    
                                
                            </tr>
                        <?php
                            $k = $k + 1;
                        } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </form>
</body>

</html>