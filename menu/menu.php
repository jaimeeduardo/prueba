<?php include("../login/control.php"); ?>
<?php require("../conexion/elegir_conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
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
      color: #212A73;

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

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

    .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
  </style>
</head>

<body>
  <script>
function copiarTexto() {
  /* Get the text field */
  var copyText = document.getElementById("codigo");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

  <?php
  $referido = $_SESSION['username'];
  //$link = 'localhost/xauto/login/registro.php?referido=' . $referido;
  //$link = 'http://www.investmentsmonopoly.com/freedom/login/registro.php?referido=' . $referido;
  $link = 'http://www.investmentsmonopoly.com/xauto/login/registro.php?referido=' . $referido;
  ?>
  <?php require("../menu/menu_principal.php"); ?>
  <div class="topnav" id="myTopnav">
    <a href="#contact" class="active">
      <button onclick="copiarTexto()"><img src="../images/vinculo.jpg" alt="Avatar"></button>
      <input style="FONT-SIZE: 12pt; FONT-FAMILY: Verdana;
COLOR: white; BACKGROUND-COLOR: black; width:400px"; id="codigo" type="text" name="codigo" readonly value="<?php echo $link; ?>">
    </a>
  </div>
  <div class="">
  <div class=""></div>
  <img src="../images/ARTE-FINAL-2.jpeg" style="width:100%">
  <div class="text"></div>
</div>




</body>

</html>