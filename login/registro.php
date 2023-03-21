<?php 
function url_actual(){
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://"; 
  }else{
    $url = "http://"; 
  }
    $url . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
 }

$url=url_actual();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 80%;
  margin-bottom: 15px;
}
span.psw {
  float: center;
  padding-top: 16px;

}

.avat {
 justify-content:center
}

.icon {
  padding: 10px;
  background: #212A73;
  color: white;
  min-width: 50px;
  text-align: center;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
  text-align:center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  /* background-color: dodgerblue; */
  background-color: #212A73;

  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<?php
$referido1=$_GET['referido'];

?>
<form action="../login/guardar_registro.php" style="max-width:500px;margin:auto" method="post">
  <h2>Registrar nuevo Afiliado</h2>
  <div class="avat">
   <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
 </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input name="username" class="input-field" pattern="[a-zA-Z0-9]+" type="text" placeholder="Username" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="telefono" placeholder="Telefono" name="telefono" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>
  
   <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" readonly name="referido1" value="<?php echo $referido1; ?>" required>
  </div>
  <div>
  <label>
        <input type="checkbox" checked="checked" name="remember"> Recordar
  </label>
  </div>
  <button type="submit" class="btn">Reg&iacute;strate</button>
  <input type="hidden" name"url" value="<?php echo $url; ?>">
</form>

<form action="../login/login.php" style="max-width:500px;margin:auto">
  <span class="psw">Tienes ya una cuenta? <a href="../login/login.php">Ingresar</a></span>
</form>

</body>
</html>
<?php
//https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal
//  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_form_icon