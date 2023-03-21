<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Investment Monopoly</title>
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

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 15px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            float: right;
        }
    </style>
</head>


<?php
$referido = $_SESSION['username'];
$link = 'http://www.investmentsmonopoly.com/freedom/login/registro.php?referido=' . $referido;
?>
<div class="header">
    <h1>Investment Monopoly</h1>
    <p>"La pasión construye negocios. El miedo no."</p>
</div>

<?php require("../menu/menu_principal.php"); ?>

<style>
    <?php require("../css/tabla.css"); ?>
</style>
<!--INICIO DEL FORMULARIO-->
<!--<body background="../images/img_avatar2.png">
    -->

<!--<body>
     <form class="multiplecolumn" method="post" id="guardar" action="" width="80%">

        <fieldset style="background-color:#ffffff00; width:50% ; ">
            <legend><b>PAQUETES</b></legend>
            <?php
            $q_mantenimiento = mysqli_query($conexion_bd, "SELECT * FROM plan_usuario WHERE id_usuario='$_SESSION[codigo]'");
            ?>
            <table width="100%">
                <thead>
                    <tr>
                        <th class="table-sortable:numeric" style="width:5%; font-size:10px">NRO</th>
                        <th class="table-sortable:default" style="width:15%; font-size:10px">NOMBRE</th>
                        <th class="table-sortable:default" style="width:30%; font-size:10px">VALOR</th>
                    </tr>

                <tbody id="prueba">
                    <?php
                    $k = 1;
                    while ($linea = mysqli_fetch_array($q_mantenimiento)) {
                        $q_plan = mysqli_query($conexion_bd, "SELECT * FROM planes WHERE codigo='$linea[codigo_plan]'");
                        $plan = mysqli_fetch_array($q_plan)
                    ?>
                        <tr>
                            <td style="width:10%;"> <?php printf($k); ?> </td>
                            <td style="width:10%;"> <?php printf($plan['nombre']); ?> </td>
                            <td style="width:10%;"> <?php printf($plan['valor']); ?> </td>
                        </tr>
                    <?php
                        $k = $k + 1;
                    } ?>
                </tbody>
            </table>
        </fieldset>
</form>
</body>-->


<body background="../images/monopoli.jpg">


    <form class="multiplecolumn" method="post" id="guardar" action="" width="80%">

        <fieldset style="background-color:#ffffff00; width:50% ; ">
            <legend><b>PAQUETES CONTRATADOS</b></legend>
            <div class="datagrid">
                <table>
                    <thead>
                        <tr>
                            <th class="table-sortable:numeric" style="width:5%; font-size:10px">NRO</th>
                            <th class="table-sortable:default" style="width:50%; font-size:10px">NOMBRE</th>
                            <th class="table-sortable:default" style="width:20%; font-size:10px">VALOR</th>
                        </tr>
                    </thead>
                    <!--<tfoot>
                    <tr>
                        <td colspan="4">
                            <div id="paging">
                                <ul>
                                    <li><a href="#"><span>Previous</span></a></li>
                                    <li><a href="#" class="active"><span>1</span></a></li>
                                    <li><a href="#"><span>2</span></a></li>
                                    <li><a href="#"><span>3</span></a></li>
                                    <li><a href="#"><span>4</span></a></li>
                                    <li><a href="#"><span>5</span></a></li>
                                    <li><a href="#"><span>Next</span></a></li>
                                </ul>
                            </div>
                    </tr>
                </tfoot>-->
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
                                <td style="width:10%;"> <?php printf($plan['valor']); ?> </td>
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