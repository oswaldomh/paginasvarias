<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $usuario = $_POST["usuario"];
    $dados = $_POST["dados"];
    $tiros = $_POST["tiros"];
    $favorito = $_POST["favorito"];
    $txd = $tiros*$dados;
    } 
else {echo "No se registraron datos";
    die();
    }

if ($txd >= 100){
    echo "Son muchos datos, no puedo procesar tantos :(";
    die();
    }
$cuantasveces = 0;

    for($i = 0; $i < $txd; $i++) {
        $variablex[$i] = rand(1,6);
        if($variablex[$i] == $favorito){
            $cuantasveces++;
        }      
        
    }


    /*echo "dado ".$variablex[$i]=$variablex[$i];    
    }
    dado 1 = 5
    dado 2 = 3
    dado 3 = 3
    dado 4 = 1
    dado $txd = 5
    */
?>

<!DOCTYPE html>
<html>

<head>
    <title>Resultado de Juego de Dados</title>
</head>

<body>
<h1> Este es el resutado de su tirada: </h1>

    Jugador: <?php echo $usuario;?><br>
    Para: <?php echo $dados;?> dados<br> 
    y <?php echo $tiros;?> tiros<br>
    Los resultados son: <br>
    Con tu numero <?php echo $favorito?><br>
    <?php
    if ($cuantasveces > 0){
    ?>
      <p>"Felicidades Ganaste, tu numero es : <?= $favorito ?> 
    y salio " <?= $cuantasveces ?> " veces";</p>  
    <?php
    } 
    else { 
        echo "Perdiste, tu numero no salio :(";   
         }
    ?>
    
    <?php
    $nDado = 1;
    for($i = 0; $i < $txd; $i++) {
        //$variablex[$i] = (rand(1,6));

     ?>
     <p> Dado <?= $nDado++ ?> : <?= $variablex[$i] ?> </p>
    <?php
        
    }

    ?>
      
  <hr>
<a href="./ejemplo10.php"> Juegue de nuevo aqui </a><br>

</body>
</html>


