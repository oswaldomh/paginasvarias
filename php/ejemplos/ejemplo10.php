<?php
?>
<!DOCTYPE html>
<html>
<head><title>Juego de Dados</title></head>
<body>
    <p>Este juego de dados te da las respuestas aleatorias posibles <br>
       Tomando en cuenta el numero de dados y numero de tiros.
    </p>
    <i>Los dados en este juego tienen 6 caras</i><br><br>
<form name="juegoDados" method="post" action="./ejemplo11.php">
  <label for="usuario">Por favor ingrese su nombre:</label><br>
  <input type="text" id="usuario" name="usuario"><br><br>
  <label for="dados">Numero de dados:</label><br>
  <input type="number" id="dados" name="dados"><br><br>
  <label for="tiros">Numero de tiros:</label><br>
  <input type="number" id="tiros" name="tiros"><br><br>
  <label for="tiros">Elige un numero del uno al seis:</label><br>
  <input type="number" id="favorito" name="favorito"><br><br>
  <input type="submit" value="Enviar">
</form> 

    <p>Los datos se enviaran a ./ejemplo11.php</p>
</body>
</html>


