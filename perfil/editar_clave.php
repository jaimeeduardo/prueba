<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <title>X AUTO</title>
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

        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #212A73;
            border: none;
            color: white;
            padding: 16px 15px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            float: right;
        }

        input[type=button] {
            background-color: #212A73;
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
  color:#B78632;
}

input[type=submit] {
  background-color: #B78632;
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
.pass{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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

    fieldset {
        border: 1px solid rgb(255, 232, 57);
        margin-top: 20px;
        margin: auto;
    }
</style>

<body>
 <div class="container" >
 <form class="multiplecolumn" method="post" id="guardar" action="">
    <?php
        $query_usuario = mysqli_query($conexion_bd, "SELECT * FROM usuario WHERE codigo=" . $_SESSION['codigo'] . "");
        $user = mysqli_fetch_array($query_usuario);
    ?>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input id="lname" class="pass" type="password" name="clave1" placeholder="password">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Repetir Password</label>
      </div>
      <div class="col-75">
        <input type="password" class="pass" name="clave2"  id="lname" placeholder="repetir password">
      </div>
    </div>
    <br>
    <div class="row">
    
      <input class="button" type="submit" name="OK" value="GUARDAR" />
    </div>
  </form>
</div>




   
</body>

</html>
<?php
if (isset($_POST['OK'])) {
    $error = 0;
    if ($_POST["clave1"] == $_POST["clave2"]) {
        if ($_POST["clave1"] != ""  && $_POST["clave2"] != "") {
            $clave1 = md5($_POST["clave1"]);
            $clave2 = md5($_POST["clave2"]);
            //ingreso solicitud de mantenimiento

            $query_actualizar = "UPDATE usuario SET `password`='" . $clave1 . "' WHERE codigo = " . $_SESSION['codigo'] . "";
            $q_a = mysqli_query($conexion_bd, $query_actualizar);
        } else {
            $query_actualizar = "UPDATE usuario SET email='" . $_POST['email'] . "' WHERE codigo = " . $_SESSION['codigo'] . "";
            $q_a = mysqli_query($conexion_bd, $query_actualizar);
        }
        if ($q_a) { ?>
            <script language="JavaScript">
                alert("Informacion Guardada correctamente");
                window.location = "../menu/menu.php";
            </script>
        <?php } else { ?>
            <script language="JavaScript">
                alert("Error! al momento de guardar la informacion");
            </script> <?php
                    }
                } else {
                        ?>
        <script language="JavaScript">
            alert("Las contraseñas no son iguales");
        </script> <?php
                }
            } ?>