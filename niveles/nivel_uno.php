<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
            float: right;
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
<!--INICIO DEL FORMULARIO-->

<!--<body background="../images/img_avatar2.png">-->

<body bgcolor="black">
    <form class="multiplecolumn" method="post" id="guardar" action="" width="80%">

        <fieldset style="background-color:#ffffff00; width:30% ;text-align: center; ">
            <legend><b><font color="#B78632">NIVELES</font></b></legend>
            <table>
            <tr> 
                <td ><input type="button" class="button" name="primer_nivel" value="<?php echo $_SESSION['username']; ?>" /></td>                            
                <td ></td>
                                              
            </tr>
                <?php
                        $k = 1;
                        $q_nivel = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE username='$_SESSION[username]'");
                        while ($linea = mysqli_fetch_array($q_nivel)) {
                            $nivel=$linea['nivel'];
                           





                            $q_referido = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE   referido='$_SESSION[username]'");
                            while ($referido = mysqli_fetch_array($q_referido)) {
                                $refer=$referido['username'];
                                $codigo=$referido['codigo'];
                        ?>
                            <tr>                            
                                <td ><img src="../images/flecha_uno.jpg" width="80"  height="45"></td>
                                <td ><input type="button" class="button" name="primer_nivel" value="<?php echo $referido['username']; ?>" /></td>  
                                <td></td>                             
                            </tr>
                            <tr>                            
                                <td ></td>
                                <td></td>
                                <td >
                                    <table background="black">
                                        <?php
                                        $q_planes = mysqli_query($conexion_bd, "SELECT * FROM plan_usuario WHERE   id_usuario='$codigo'");
                                        $kk=1;
                                        while ($planes = mysqli_fetch_array($q_planes)) {
                                            $codigo_plan=$planes['codigo_plan'];

                                            $q_nombre_planes = mysqli_query($conexion_bd, "SELECT * FROM planes WHERE   codigo='$codigo_plan'");
                                            while ($nombre_planes = mysqli_fetch_array($q_nombre_planes)) {

                                            ?>
                                        <tr>
                                            <td><font color ="#B78632"><?php echo $kk; ?></td>
                                            <td><font color ="#B78632"><?php echo $nombre_planes['nombre']; ?></td>
                                            <td><font color ="#B78632"><?php echo $nombre_planes['valor']; ?></td>
                                            <td><font color ="#B78632"><?php echo $planes['estado']; ?></font></td>
                                        </tr>
                                        <?php
                                            }
                                            $kk=$kk+1;
                                        }
                                        ?>
                                    </table>    
                                </td>  
                                                             
                            </tr>
                        <?php
                            $k = $k + 1;
                            }
                        } ?>
               
                  
            </table>
        </fieldset>
    </form>
</body>

</html>