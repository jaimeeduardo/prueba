<!DOCTYPE html>
<html>
<title>Investment Monopoly</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css">
<body bgcolor="black" onload="move();">
    <?php $valor=50; ?>
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
    </tr>
    <tr>
      <td bgcolor="black"><font color="#B78632">1</td>
      <td bgcolor="black"><font color="#B78632">gold 300</td>
      <td bgcolor="black"><font color="#B78632">PROGRESO</td>
      <td bgcolor="black">
        <div class="w3-container">    
          <div class="w3-light-grey">
            <div id="myBar" class="w3-green" style="height:24px;width:10"><font color="#B78632">0%</div>
          </div>  
        </div>
    </td>
      <td bgcolor="black"><font color="#B78632">150</td>
     <td bgcolor="black"><font color="#B78632">150</td>
      <td bgcolor="black"><font color="#B78632">2021-12-04</td>
    </tr>    
  </table>
</div>
<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= <?php echo $valor; ?>) {
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
