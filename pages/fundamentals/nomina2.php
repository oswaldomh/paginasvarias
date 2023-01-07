<?php

// Definicion de valores y obtencion de datos Request
if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $nombre = $_POST["nombre"];
    $bruto = $_POST["bruto"];
    $dlab = $_POST["dlab"];
    $faltas = $_POST["faltas"];
    $retardos = $_POST["retardos"];
}
else {
    echo 'No se registraron datos';
    exit();
}

// Calculo de días laborados
    // CALCULO DE SALARIO
    $reta = intval($retardos/3);
    $fltas = ($faltas + $reta);
    $diaslab = ($dlab - $fltas);
    // datos por día
    $dbru = ($bruto/30);
    $dimp = ($dbru * 0.16);
    $dper = ($dbru - $dimp);
    // salario percibido
    $mes1 = ($dper*30);
    $qui1 = ($dper*15);
    $sem1 = ($dper*7);
    // impuestos pagados
    $mes2 = ($dimp*30);
    $qui2 = ($dimp*15);
    $sem2 = ($dimp*7);
    // salario sin impuestos
    $mes3 = ($dbru*30);
    $qui3 = ($dbru*15);
    $sem3 = ($dbru*7);

    $tot = ($dper * $diaslab);
    $mes3 = number_format($mes3,2);
    $mes2 = number_format($mes2,2);
    $mes1 = number_format($mes1,2);
    $qui3 = number_format($qui3,2);
    $qui2 = number_format($qui2,2);
    $qui1 = number_format($qui1,2);
    $sem3 = number_format($sem3,2);
    $sem2 = number_format($sem2,2);
    $sem1 = number_format($sem1,2);
    $dbru = number_format($dbru,2);
    $dimp = number_format($dimp,2);
    $dper = number_format($dper,2);
    $tot = number_format($tot,2);
// if($retardos > 0){
//     for ($fltas = 1; $fltas < $retardos; $fltas+3);
//     $fltas = $fltas + $faltas;
//     $diaslab = $dlab - $fltas;
// } else {
//     $diaslab = $dlab - $fltas;
// }

// Intento fallido de calculo de días laborados

// if($retardos > 0){
//     for ($i = 1; $i < $retardos; $i+3);
//     $diaslab = $dlab - ($faltas + $i);
// } elseif ($faltas > 0){
//     $diaslab = $dlab - $faltas;
// } else {
//     $diaslab = $dlab;
// }


?>

<!-- Empieza html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Resultados</title>
</head>
<body>

<div class="container">
  <h2>Segun los datos ingresados su nomina consta de lo siguiente: </h2>
  <p>Su nombre es: <?php echo "$nombre" ?><br><br>
    Trabajó : <?php echo "$diaslab días completos" ?><br><br>
    Su nomina percibida es: </p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>MENSUAL:</th>
        <th>QUINCENAL:</th>
        <th>SEMANAL:</th>
        <th>DIA:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ingresos brutos:</td>
        <td><?php echo "$ $mes3 pesos"?></td>
        <td><?php echo "$ $qui3 pesos"?></td>
        <td><?php echo "$ $sem3 pesos"?></td>
        <td><?php echo "$ $dbru pesos"?></td>
      </tr>
      <tr>
        <td>Impuestos pagados:</td>
        <td><?php echo "$ $mes2 pesos"?></td>
        <td><?php echo "$ $qui2 pesos"?></td>
        <td><?php echo "$ $sem2 pesos"?></td>
        <td><?php echo "$ $dimp pesos"?></td>
      </tr>
      <tr style="background-color:rgb(255,255,0)" >
        <td>Percibido:</td>
        <td><?php echo "$ $mes1 pesos"?></td>
        <td><?php echo "$ $qui1 pesos"?></td>
        <td><?php echo "$ $sem1 pesos"?></td>
        <td><?php echo "$ $dper pesos"?></td>
      </tr>
    </tbody>
  </table>
</div>
<h2 style="text-align:center;">Tu salario percibido es: <?php echo "$ $tot pesos"?></h2>
</body>
</html>