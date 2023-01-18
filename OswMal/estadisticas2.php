<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
// ---------ingresos---------
    $ene = $_POST["ene"];
    $feb = $_POST["feb"];
    $mar = $_POST["mar"];
    $abr = $_POST["abr"];
    $may = $_POST["may"];
    $jun = $_POST["jun"];
    $jul = $_POST["jul"];
    $ago = $_POST["ago"];
    $sep = $_POST["sep"];
    $oct = $_POST["oct"];
    $nov = $_POST["nov"];
    $dic = $_POST["dic"];
// --------egresos---------
    $enee = $_POST["enee"];
    $febe = $_POST["febe"];
    $mare = $_POST["mare"];
    $abre = $_POST["abre"];
    $maye = $_POST["maye"];
    $june = $_POST["june"];
    $jule = $_POST["jule"];
    $agoe = $_POST["agoe"];
    $sepe = $_POST["sepe"];
    $octe = $_POST["octe"];
    $nove = $_POST["nove"];
    $dice = $_POST["dice"];
    $dene = ($ene - $enee);
    $dfeb = ($feb - $febe);
    $dmar = ($mar - $mare);
    $dabr = ($abr - $abre);
    $dmay = ($may - $maye);
    $djun = ($jun - $june);
    $djul = ($jul - $jule);
    $dago = ($ago - $agoe);
    $dsep = ($sep - $sepe);
    $doct = ($oct - $octe);
    $dnov = ($nov - $nove);
    $ddic = ($dic - $dice);
}
else{
    echo "We don't recibe any data, please try again";
    die();
}

$mes = array ('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    $ime = array ($ene, $feb, $mar, $abr, $may, $jun, $jul, $ago, $sep, $oct, $nov, $dic);
    $eme = array ($enee, $febe, $mare, $abre, $maye, $june, $jule, $agoe, $sepe, $octe, $nove, $dice);
    $dif = array ($dene, $dfeb, $dmar, $dabr, $dmay, $djun, $djul, $dago, $dsep, $doct, $dnov, $ddic);
    $acu = 0;
        for ($i = 0; $i <= 11; $i++){
            $acu = $acu + $dif[$i];
            // echo "Para ".$mes[$i]." los ingresos son: ".$ime[$i]." y los egresos son: ".$eme[$i]." la diferencia es: ".$dif[$i]." y el acumulado es: ".$acu;?><br>
            <?php
        }

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Ingresos y Egresos Anuales</h2>
  <h3>Resultado mensual</h3>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Mes</th>
        <th>Ingresos</th>
        <th>Egresos</th>
        <th>Diferencia</th>
        <th>Acumulado</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    for($i=0; $i<=11; $i++){?>
        <tr<?php[$i]?>>
        <td><?=$mes[$i]?></td>
        <td style="background-color: #52BE80"><?=$ime[$i]?></td>
        <td style="background-color: #EC7063"><?=$eme[$i]?></td>
        <td style="background-color: #F7DC6F"><?=$dif[$i]?></td>
        <td style="background-color: #F8C471"><?=$acu?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>


